<?php

namespace App\Filament\Admin\Resources\Stufas;

use App\Filament\Admin\Resources\Stufas\Pages\CreateStufa;
use App\Filament\Admin\Resources\Stufas\Pages\EditStufa;
use App\Filament\Admin\Resources\Stufas\Pages\ListStufas;
use App\Filament\Admin\Resources\Stufas\Schemas\StufaForm;
use App\Filament\Admin\Resources\Stufas\Tables\StufasTable;
use App\Models\Stufa;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StufaResource extends Resource
{
    protected static ?string $model = Stufa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return StufaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StufasTable::configure($table);
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
            'index' => ListStufas::route('/'),
            'create' => CreateStufa::route('/create'),
            'edit' => EditStufa::route('/{record}/edit'),
        ];
    }
}
