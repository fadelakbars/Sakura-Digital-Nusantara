<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrintQuantityResource\Pages;
use App\Filament\Resources\PrintQuantityResource\RelationManagers;
use App\Models\PrintQuantity;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrintQuantityResource extends Resource
{
    protected static ?string $model = PrintQuantity::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationLabel = 'Harga Per Cetakan';

    protected static ?string $navigationGroup = 'Publisher Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('quantity')
                    ->label('Jumlah Cetakan'),
                TextInput::make('price_per_unit')
                    ->label('Harga Perbuku')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('quantity')
                    ->label('Jumlah Cetakan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price_per_unit')
                    ->label('Harga Perbuku')
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
                Tables\Actions\DeleteBulkAction::make()->label('Delete Selected'),
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
            'index' => Pages\ListPrintQuantities::route('/'),
            'create' => Pages\CreatePrintQuantity::route('/create'),
            'edit' => Pages\EditPrintQuantity::route('/{record}/edit'),
        ];
    }
}
