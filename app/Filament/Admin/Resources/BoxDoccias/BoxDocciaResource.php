<?php

namespace App\Filament\Admin\Resources\BoxDoccias;

use App\Filament\Admin\Resources\BoxDoccias\Pages\CreateBoxDoccia;
use App\Filament\Admin\Resources\BoxDoccias\Pages\EditBoxDoccia;
use App\Filament\Admin\Resources\BoxDoccias\Pages\ListBoxDoccias;
use App\Filament\Admin\Resources\BoxDoccias\Schemas\BoxDocciaForm;
use App\Filament\Admin\Resources\BoxDoccias\Tables\BoxDocciasTable;
use App\Models\BoxDoccia;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BoxDocciaResource extends Resource
{
    protected static ?string $model = BoxDoccia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return BoxDocciaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BoxDocciasTable::configure($table);
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
            'index' => ListBoxDoccias::route('/'),
            'create' => CreateBoxDoccia::route('/create'),
            'edit' => EditBoxDoccia::route('/{record}/edit'),
        ];
    }
}
