<?php

namespace App\Filament\Admin\Resources\Illuminaziones\Pages;

use App\Filament\Admin\Resources\Illuminaziones\IlluminazioneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIlluminaziones extends ListRecords
{
    protected static string $resource = IlluminazioneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
