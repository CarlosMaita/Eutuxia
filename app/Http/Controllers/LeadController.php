<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user())
        {
            $leads = Lead::orderBy('id','DESC')->paginate(25);
            return view('cms.leads.leads', compact('leads'));
        }

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //vars
        $nombre = $request->nombre;
        $correo = $request->correo;
        $funnel = $request->funnel_type;
        if (isset($request->id_funnel)){
            $id_funnel = $request->id_funnel;
        }
        //crear Lead
        $Lead = Lead::create(
            [
                "name"=> $nombre,
                "email"=> $correo,
                "funnel" => $funnel,
             ]
            );
        // Store a piece of data in the session...
        session(['usuario_name' => $nombre, 'usuario_email'=>$correo ]);

        if (isset($request->id_funnel)){
            //funnel de venta 01
            if ($id_funnel=='01'){
                 // Store a piece of data in the session...
                session(['usuario_hot' => $nombre, 'email_hot'=>$correo ]);
                return back();
            }

        }else{
            return redirect('/tienda-de-instagram-venezuela_ok');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
