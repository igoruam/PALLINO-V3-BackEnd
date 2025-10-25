<?php

namespace App\Filament\Admin\Resources\Sanitarios;

use App\Filament\Admin\Resources\Sanitarios\Pages\CreateSanitario;
use App\Filament\Admin\Resources\Sanitarios\Pages\EditSanitario;
use App\Filament\Admin\Resources\Sanitarios\Pages\ListSanitarios;
use App\Filament\Admin\Resources\Sanitarios\Schemas\SanitarioForm;
use App\Filament\Admin\Resources\Sanitarios\Tables\SanitariosTable;
use App\Models\Sanitario;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SanitarioResource extends Resource
{
    protected static ?string $model = Sanitario::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return SanitarioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SanitariosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSanitarios::route('/'),
            'create' => CreateSanitario::route('/create'),
            'edit' => EditSanitario::route('/{record}/edit'),
        ];
    }
}
