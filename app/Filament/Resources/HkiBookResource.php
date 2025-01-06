<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HkiBookResource\Pages;
use App\Filament\Resources\HkiBookResource\RelationManagers;
use App\Models\BookHkiPrice;
use App\Models\HkiBook;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HkiBookResource extends Resource
{
    protected static ?string $model = BookHkiPrice::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationLabel = 'Harga HKI Buku';

    protected static ?string $navigationGroup = 'Publisher Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('book_hki_price')
                    ->label('Harga HKI Buku')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('book_hki_price')
                    ->label('Harga HKI Buku')
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
            'index' => Pages\ListHkiBooks::route('/'),
            'create' => Pages\CreateHkiBook::route('/create'),
            'edit' => Pages\EditHkiBook::route('/{record}/edit'),
        ];
    }
}
