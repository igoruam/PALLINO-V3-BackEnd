<?php

namespace App\Filament\Admin\Resources\Termoarredos\Pages;

use App\Filament\Admin\Resources\Termoarredos\TermoarredoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTermoarredo extends EditRecord
{
    protected static string $resource = TermoarredoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
