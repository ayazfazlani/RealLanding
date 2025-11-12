<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use Filament\Schemas\Schema;
use App\Models\PortfolioCategory;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                Select::make('portfolio_category_id')
                ->label('Portfolio Category')
                ->required()
                ->options(PortfolioCategory::all()->pluck('name', 'id'))
                ->searchable(), // Optional: makes it searchable
                FileUpload::make('image')
                ->disk('public') // Change from 'private' to 'public'
                ->directory('portfolio') // Optional: organize in subfolder
                ->image(),
                RichEditor::make('short_description')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
