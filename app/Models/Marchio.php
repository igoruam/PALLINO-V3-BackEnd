<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marchio extends Model
{
    protected $fillable = [
        'nome',
        'categoria',
        'indirizzo',
        'email',
        'num_telefono',
        'logo',
        'descrizione',
    ];

    public function referenti(): HasMany
    {
        return $this->hasMany(Referente::class);
    }

    public function pavimentiRivestimentiBattiscopa(): HasMany
    {
        return $this->hasMany(PavimentoRivestimentoBattiscopa::class);
    }

    public function illuminazioni(): HasMany
    {
        return $this->hasMany(Illuminazione::class);
    }

    public function boxDoccia(): HasMany
    {
        return $this->hasMany(BoxDoccia::class);
    }

    public function stufe(): HasMany
    {
        return $this->hasMany(Stufa::class);
    }

    public function complementiArredo(): HasMany
    {
        return $this->hasMany(ComplementoArredo::class);
    }

    public function termoarredi(): HasMany
    {
        return $this->hasMany(Termoarredo::class);
    }

    public function sanitari(): HasMany
    {
        return $this->hasMany(Sanitario::class);
    }

    public function rubinetterie(): HasMany
    {
        return $this->hasMany(Rubinetteria::class);
    }
}
