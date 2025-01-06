<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceRangeResource\Pages;
use App\Filament\Resources\PriceRangeResource\RelationManagers;
use App\Models\PriceRange;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PriceRangeResource extends Resource
{
    protected static ?string $model = PriceRange::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationLabel = 'Paket Penerbitan Buku';

    protected static ?string $navigationGroup = 'Publisher Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('page_rage')
                    ->label('Paket')
                    ->required(),
                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_rage')
                    ->label('Paket')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->sortable()
                    ->searchable()->money('idr'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Delet Selected'),
            ]);
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
            'index' => Pages\ListPriceRanges::route('/'),
            'create' => Pages\CreatePriceRange::route('/create'),
            'edit' => Pages\EditPriceRange::route('/{record}/edit'),
        ];
    }
}
