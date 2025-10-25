<?php

namespace App\Filament\Admin\Resources\Illuminaziones\Pages;

use App\Filament\Admin\Resources\Illuminaziones\IlluminazioneResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIlluminazione extends EditRecord
{
    protected static string $resource = IlluminazioneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
