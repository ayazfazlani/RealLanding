<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('portfolio_category_id')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                ->disk('public') // Change from 'private' to 'public'
                ->directory('portfolio') // Optional: organize in subfolder
                ->image(),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
