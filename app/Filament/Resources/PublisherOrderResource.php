<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublisherOrderResource\Pages;
use App\Filament\Resources\PublisherOrderResource\RelationManagers;
use App\Models\PublisherOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublisherOrderResource extends Resource
{
    protected static ?string $model = PublisherOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationLabel = 'Paket Penerbitan Buku';

    protected static ?string $navigationGroup = 'Publisher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPublisherOrders::route('/'),
            'create' => Pages\CreatePublisherOrder::route('/create'),
            'edit' => Pages\EditPublisherOrder::route('/{record}/edit'),
        ];
    }
}