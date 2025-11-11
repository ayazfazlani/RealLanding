<?php

namespace App\Filament\Resources\ItemDetails\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('portfolio_item_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name'),
                FileUpload::make('image')
                ->disk('public') // Change from 'private' to 'public'
                ->directory('portfolio') // Optional: organize in subfolder
                ->image(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
