<?php

namespace App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Pages;

use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\PavimentoRivestimentoBattiscopaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPavimentoRivestimentoBattiscopas extends ListRecords
{
    protected static string $resource = PavimentoRivestimentoBattiscopaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
