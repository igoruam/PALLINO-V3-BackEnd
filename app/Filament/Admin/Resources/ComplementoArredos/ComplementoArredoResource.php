<?php

namespace App\Filament\Admin\Resources\ComplementoArredos;

use App\Filament\Admin\Resources\ComplementoArredos\Pages\CreateComplementoArredo;
use App\Filament\Admin\Resources\ComplementoArredos\Pages\EditComplementoArredo;
use App\Filament\Admin\Resources\ComplementoArredos\Pages\ListComplementoArredos;
use App\Filament\Admin\Resources\ComplementoArredos\Schemas\ComplementoArredoForm;
use App\Filament\Admin\Resources\ComplementoArredos\Tables\ComplementoArredosTable;
use App\Models\ComplementoArredo;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComplementoArredoResource extends Resource
{
    protected static ?string $model = ComplementoArredo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return ComplementoArredoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComplementoArredosTable::configure($table);
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
            'index' => ListComplementoArredos::route('/'),
            'create' => CreateComplementoArredo::route('/create'),
            'edit' => EditComplementoArredo::route('/{record}/edit'),
        ];
    }
}
