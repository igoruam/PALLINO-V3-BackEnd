<?php

namespace App\Models;

use App\Traits\HasFotoUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PavimentoRivestimentoBattiscopa extends Model
{
    use HasFotoUrl;
    protected $fillable = [
        'prodotto',
        'descrizione',
        'marchio_id',
        'formato',
        'disponibilita_mq',
        'prezzo_mq_senza_iva',
        'prezzo_mq_con_iva',
        'foto',
    ];

    protected $casts = [
        'disponibilita_mq' => 'decimal:2',
        'prezzo_mq_senza_iva' => 'decimal:2',
        'prezzo_mq_con_iva' => 'decimal:2',
    ];

    public function marchio(): BelongsTo
    {
        return $this->belongsTo(Marchio::class);
    }
}
