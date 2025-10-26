<?php

namespace App\Traits;

trait HasFotoUrl
{
    public function initializeHasFotoUrl(): void
    {
        $this->appends = array_merge($this->appends ?? [], ['foto_url']);
    }

    public function getFotoUrlAttribute(): ?string
    {
        if (!$this->foto) {
            return null;
        }

        // Rimuove /storage/ dall'inizio se presente
        $path = preg_replace('#^/storage/#', '', $this->foto);

        return url("api/images/{$path}");
    }
}
