<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referente extends Model
{
    protected $fillable = [
        'marchio_id',
        'nome',
        'cognome',
        'numero_telefono',
        'email',
    ];

    public function marchio(): BelongsTo
    {
        return $this->belongsTo(Marchio::class);
    }
}
