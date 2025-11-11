<?php

namespace App\Filament\Resources\ItemDetails\Pages;

use App\Filament\Resources\ItemDetails\ItemDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListItemDetails extends ListRecords
{
    protected static string $resource = ItemDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
