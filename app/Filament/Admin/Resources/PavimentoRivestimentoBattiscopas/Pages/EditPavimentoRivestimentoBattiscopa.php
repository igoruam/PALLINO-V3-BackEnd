<?php

namespace App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Pages;

use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\PavimentoRivestimentoBattiscopaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPavimentoRivestimentoBattiscopa extends EditRecord
{
    protected static string $resource = PavimentoRivestimentoBattiscopaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
