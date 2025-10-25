<?php

namespace App\Filament\Admin\Resources\Sanitarios\Pages;

use App\Filament\Admin\Resources\Sanitarios\SanitarioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSanitario extends EditRecord
{
    protected static string $resource = SanitarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
