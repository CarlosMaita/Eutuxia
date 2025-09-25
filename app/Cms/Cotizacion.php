<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'cotizaciones';

    protected $fillable = [
        'nombre',
        'creador',
        'fecha',
        'propuesta',
        'descripcion',
        'incluye',
        'no_incluye',
        'total',
        'tiempo_construccion',
        'estatus',
        'archivada',
        'publicada',
        'token_publico'
    ];

    protected $casts = [
        'fecha' => 'date',
        'archivada' => 'boolean',
        'publicada' => 'boolean',
        'total' => 'decimal:2'
    ];

    /**
     * Get the items for this cotizacion
     */
    public function items()
    {
        return $this->hasMany(CotizacionItem::class)->orderBy('orden');
    }

    /**
     * Generate a unique public token
     */
    public function generatePublicToken()
    {
        do {
            $token = bin2hex(random_bytes(16));
        } while (self::where('token_publico', $token)->exists());
        
        return $token;
    }

    /**
     * Calculate total from items
     */
    public function calculateTotal()
    {
        return $this->items()->sum('precio');
    }

    /**
     * Update total when items are modified
     */
    public function updateTotal()
    {
        $this->total = $this->calculateTotal();
        $this->save();
    }

    /**
     * Scope for non-archived quotes
     */
    public function scopeNotArchived($query)
    {
        return $query->where('archivada', false);
    }

    /**
     * Scope for archived quotes
     */
    public function scopeArchived($query)
    {
        return $query->where('archivada', true);
    }

    /**
     * Scope for published quotes
     */
    public function scopePublished($query)
    {
        return $query->where('publicada', true)->whereNotNull('token_publico');
    }
}