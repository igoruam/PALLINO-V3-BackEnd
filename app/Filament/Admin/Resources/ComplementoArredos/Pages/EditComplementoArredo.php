<?php

namespace App\Filament\Admin\Resources\ComplementoArredos\Pages;

use App\Filament\Admin\Resources\ComplementoArredos\ComplementoArredoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditComplementoArredo extends EditRecord
{
    protected static string $resource = ComplementoArredoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
