<?php

namespace App\Filament\Admin\Resources\Rubinetterias\Pages;

use App\Filament\Admin\Resources\Rubinetterias\RubinetteriaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRubinetterias extends ListRecords
{
    protected static string $resource = RubinetteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
