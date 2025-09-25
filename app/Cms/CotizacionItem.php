<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class CotizacionItem extends Model
{
    protected $table = 'cotizaciones_items';

    protected $fillable = [
        'cotizacion_id',
        'nombre',
        'precio',
        'orden'
    ];

    protected $casts = [
        'precio' => 'decimal:2'
    ];

    /**
     * Get the cotizacion that owns this item
     */
    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class);
    }
}