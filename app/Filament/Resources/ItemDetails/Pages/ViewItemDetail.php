<?php

namespace App\Filament\Resources\ItemDetails\Pages;

use App\Filament\Resources\ItemDetails\ItemDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewItemDetail extends ViewRecord
{
    protected static string $resource = ItemDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
