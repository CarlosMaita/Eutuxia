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
        'items',
        'total',
        'tiempo_construccion',
        'estatus',
        'archivada',
        'publicada',
        'token_publico'
    ];

    protected $casts = [
        'items' => 'array',
        'fecha' => 'date',
        'archivada' => 'boolean',
        'publicada' => 'boolean',
        'total' => 'decimal:2'
    ];

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
        if (!$this->items) {
            return 0;
        }

        $total = 0;
        foreach ($this->items as $item) {
            $total += (float) ($item['precio'] ?? 0);
        }

        return $total;
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