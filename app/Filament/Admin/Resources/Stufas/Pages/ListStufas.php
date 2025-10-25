<?php

namespace App\Filament\Admin\Resources\Stufas\Pages;

use App\Filament\Admin\Resources\Stufas\StufaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStufas extends ListRecords
{
    protected static string $resource = StufaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
