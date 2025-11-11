<?php

namespace App\Filament\Resources\ItemDetails;

use App\Filament\Resources\ItemDetails\Pages\CreateItemDetail;
use App\Filament\Resources\ItemDetails\Pages\EditItemDetail;
use App\Filament\Resources\ItemDetails\Pages\ListItemDetails;
use App\Filament\Resources\ItemDetails\Pages\ViewItemDetail;
use App\Filament\Resources\ItemDetails\Schemas\ItemDetailForm;
use App\Filament\Resources\ItemDetails\Schemas\ItemDetailInfolist;
use App\Filament\Resources\ItemDetails\Tables\ItemDetailsTable;
use App\Models\ItemDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemDetailResource extends Resource
{
    protected static ?string $model = ItemDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ItemDetail';

    public static function form(Schema $schema): Schema
    {
        return ItemDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ItemDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ItemDetailsTable::configure($table);
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
            'index' => ListItemDetails::route('/'),
            'create' => CreateItemDetail::route('/create'),
            'view' => ViewItemDetail::route('/{record}'),
            'edit' => EditItemDetail::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
