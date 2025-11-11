<?php

namespace App\Filament\Resources\ItemDetails\Pages;

use App\Filament\Resources\ItemDetails\ItemDetailResource;
use Filament\Resources\Pages\CreateRecord;

class CreateItemDetail extends CreateRecord
{
    protected static string $resource = ItemDetailResource::class;
}
