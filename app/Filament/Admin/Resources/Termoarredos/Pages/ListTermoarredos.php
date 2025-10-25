<?php

namespace App\Filament\Admin\Resources\Termoarredos\Pages;

use App\Filament\Admin\Resources\Termoarredos\TermoarredoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTermoarredos extends ListRecords
{
    protected static string $resource = TermoarredoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
