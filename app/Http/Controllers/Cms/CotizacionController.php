<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cms\Cotizacion;
use App\Cms\CotizacionItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class CotizacionController extends Controller
{
    public function index()
    {
        $cotizaciones = Cotizacion::with('items')->notArchived()->orderBy('created_at', 'desc')->get();
        return view('cms.cotizaciones.cotizaciones')->with(compact('cotizaciones'));
    }

    public function archived()
    {
        $cotizaciones = Cotizacion::with('items')->archived()->orderBy('created_at', 'desc')->get();
        return view('cms.cotizaciones.cotizaciones')->with(compact('cotizaciones'));
    }

    public function create()
    {
        return view('cms.cotizaciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:191',
            'nombre_cliente' => 'nullable|max:191',
            'creador' => 'required|max:191',
            'fecha' => 'required|date',
            'propuesta' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Borrador,Pendiente,Rechazada,Vencida,Aprobada'
        ]);

        $cotizacion = new Cotizacion($request->all());
        $cotizacion->save();

        // Handle items
        if ($request->has('item_nombres') && $request->has('item_precios')) {
            $nombres = $request->input('item_nombres');
            $precios = $request->input('item_precios');
            
            foreach ($nombres as $key => $nombre) {
                if (!empty($nombre) && isset($precios[$key])) {
                    CotizacionItem::create([
                        'cotizacion_id' => $cotizacion->id,
                        'nombre' => $nombre,
                        'precio' => (float) $precios[$key],
                        'orden' => $key
                    ]);
                }
            }
        }

        $cotizacion->total = $cotizacion->calculateTotal();
        $cotizacion->save();

        return redirect()->route('cotizacion.home')->with('message', 'Cotización creada exitosamente');
    }

    public function edit($id)
    {
        $cotizacion = Cotizacion::with('items')->findOrFail($id);
        if ($cotizacion->archivada) {
            return redirect()->route('cotizacion.home')->with('error', 'No se puede editar una cotización archivada.');
        }
        return view('cms.cotizaciones.edit')->with(compact('cotizacion'));
    }

    public function update(Request $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        if ($cotizacion->archivada) {
            return redirect()->route('cotizacion.home')->with('error', 'No se puede editar una cotización archivada.');
        }
        $request->validate([
            'nombre' => 'required|max:191',
            'nombre_cliente' => 'nullable|max:191',
            'creador' => 'required|max:191',
            'fecha' => 'required|date',
            'propuesta' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Borrador,Pendiente,Rechazada,Vencida,Aprobada'
        ]);
        $cotizacion->fill($request->all());
        $cotizacion->save();

        // Delete existing items
        $cotizacion->items()->delete();

        // Handle new items
        if ($request->has('item_nombres') && $request->has('item_precios')) {
            $nombres = $request->input('item_nombres');
            $precios = $request->input('item_precios');
            
            foreach ($nombres as $key => $nombre) {
                if (!empty($nombre) && isset($precios[$key])) {
                    CotizacionItem::create([
                        'cotizacion_id' => $cotizacion->id,
                        'nombre' => $nombre,
                        'precio' => (float) $precios[$key],
                        'orden' => $key
                    ]);
                }
            }
        }

        $cotizacion->total = $cotizacion->calculateTotal();
        $cotizacion->save();

        return redirect()->route('cotizacion.home')->with('message', 'Cotización actualizada exitosamente');
    }

    public function destroy($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->delete();

        return back()->with('message', 'Cotización eliminada exitosamente');
    }

    public function archive($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->archivada = true;
        // Al archivar, no debe ser pública
        $cotizacion->publicada = false;
        $cotizacion->save();

        return back()->with('message', 'Cotización archivada exitosamente');
    }

    public function unarchive($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->archivada = false;
        $cotizacion->save();

        return back()->with('message', 'Cotización desarchivada exitosamente');
    }

    public function publish($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        if ($cotizacion->archivada) {
            return back()->with('error', 'No se puede publicar una cotización archivada.');
        }
        
        if (!$cotizacion->token_publico) {
            $cotizacion->token_publico = $cotizacion->generatePublicToken();
        }
        
        $cotizacion->publicada = true;
        $cotizacion->save();

        return back()->with('message', 'Cotización publicada exitosamente. URL: ' . route('cotizacion.public', $cotizacion->token_publico));
    }

    public function unpublish($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->publicada = false;
        $cotizacion->save();

        return back()->with('message', 'Cotización despublicada exitosamente');
    }

    /**
     * Duplicate a quotation with its items
     */
    public function duplicate($id)
    {
        $original = Cotizacion::with('items')->findOrFail($id);

        // Create a shallow copy with adjusted fields
        $copy = $original->replicate([
            // All fillable are copied by replicate by default; we'll adjust below
        ]);

        // Reset publishing/archive-related fields and dates
    $copy->nombre = Str::limit($original->nombre . ' (Copia)', 191, '');
        $copy->archivada = false;
        $copy->publicada = false;
        $copy->token_publico = null;
    $copy->estatus = 'Borrador';
        // Keep fecha the same by default; if you want today, uncomment next line
        // $copy->fecha = now();

        // Temporarily set total to 0; will recalc after creating items
        $copy->total = 0;
        $copy->push();

        // Duplicate items maintaining order
        foreach ($original->items as $item) {
            $newItem = $item->replicate();
            $newItem->cotizacion_id = $copy->id;
            $newItem->save();
        }

        // Recalculate total
        $copy->updateTotal();

        return redirect()->route('cotizacion.edit', $copy->id)->with('message', 'Cotización duplicada. Ahora puedes editarla.');
    }

    public function showPublic($token)
    {
        $cotizacion = Cotizacion::with('items')->where('token_publico', $token)
            ->where('publicada', true)
            ->where('archivada', false)
            ->firstOrFail();

        return view('cotizaciones.public')->with(compact('cotizacion'));
    }

    public function downloadPdf($token)
    {
        $cotizacion = Cotizacion::with('items')->where('token_publico', $token)
            ->where('publicada', true)
            ->where('archivada', false)
            ->firstOrFail();

        // Generate PDF using DomPDF
        $pdf = Pdf::loadView('cotizaciones.pdf', compact('cotizacion'));
        
        // Set filename
        $filename = 'cotizacion-' . $cotizacion->id . '.pdf';
        
        return $pdf->download($filename);
    }
}