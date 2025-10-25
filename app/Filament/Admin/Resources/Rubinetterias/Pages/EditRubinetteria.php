<?php

namespace App\Filament\Admin\Resources\Rubinetterias\Pages;

use App\Filament\Admin\Resources\Rubinetterias\RubinetteriaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRubinetteria extends EditRecord
{
    protected static string $resource = RubinetteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
