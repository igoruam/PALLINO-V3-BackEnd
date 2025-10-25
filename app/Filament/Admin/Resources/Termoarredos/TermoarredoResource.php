<?php

namespace App\Filament\Admin\Resources\Termoarredos;

use App\Filament\Admin\Resources\Termoarredos\Pages\CreateTermoarredo;
use App\Filament\Admin\Resources\Termoarredos\Pages\EditTermoarredo;
use App\Filament\Admin\Resources\Termoarredos\Pages\ListTermoarredos;
use App\Filament\Admin\Resources\Termoarredos\Schemas\TermoarredoForm;
use App\Filament\Admin\Resources\Termoarredos\Tables\TermoarredosTable;
use App\Models\Termoarredo;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TermoarredoResource extends Resource
{
    protected static ?string $model = Termoarredo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return TermoarredoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TermoarredosTable::configure($table);
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
            'index' => ListTermoarredos::route('/'),
            'create' => CreateTermoarredo::route('/create'),
            'edit' => EditTermoarredo::route('/{record}/edit'),
        ];
    }
}
