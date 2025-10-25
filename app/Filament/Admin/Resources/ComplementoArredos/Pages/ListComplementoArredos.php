<?php

namespace App\Filament\Admin\Resources\ComplementoArredos\Pages;

use App\Filament\Admin\Resources\ComplementoArredos\ComplementoArredoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComplementoArredos extends ListRecords
{
    protected static string $resource = ComplementoArredoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
