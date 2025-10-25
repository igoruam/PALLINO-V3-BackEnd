<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Termoarredo extends Model
{
    protected $fillable = [
        'prodotto',
        'marchio_id',
        'disponibilita',
        'misure',
        'tipo',
        'prezzo_senza_iva',
        'prezzo_con_iva',
        'foto',
    ];

    protected $casts = [
        'disponibilita' => 'integer',
        'prezzo_senza_iva' => 'decimal:2',
        'prezzo_con_iva' => 'decimal:2',
    ];

    public function marchio(): BelongsTo
    {
        return $this->belongsTo(Marchio::class);
    }
}
