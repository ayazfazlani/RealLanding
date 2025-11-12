<?php

namespace App\Filament\Resources\ItemDetails\Schemas;

use Filament\Schemas\Schema;
use App\Models\PortfolioItem;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ItemDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('portfolio_item_id')
    ->label('Portfolio Item')
    ->required()
    ->options(
        PortfolioItem::query()
            ->orWhereNotNull('title') // fallback to title if name doesn't exist
            ->orderBy('title')
            ->pluck('title', 'id')
    )
    ->searchable()
    ->preload()
    ->placeholder('Select a portfolio item'),
                TextInput::make('name'),
                FileUpload::make('image')
                ->disk('public') // Change from 'private' to 'public'
                ->directory('portfolio') // Optional: organize in subfolder
                ->image(),
                RichEditor::make('description')
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
