<?php

namespace App\Filament\Admin\Resources\Marchios\Pages;

use App\Filament\Admin\Resources\Marchios\MarchioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMarchios extends ListRecords
{
    protected static string $resource = MarchioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
