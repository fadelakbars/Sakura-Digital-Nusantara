<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublisherPackageResource\Pages;
use App\Filament\Resources\PublisherPackageResource\RelationManagers;
use App\Models\PublisherPackage;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublisherPackageResource extends Resource
{
    protected static ?string $model = PublisherPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationLabel = 'Layanan Publikasi';

    protected static ?string $navigationGroup = 'Publisher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('package_name')
                    ->label('Layanan')
                    ->required(),
                // TextInput::make('description')
                //     ->label('Deskripsi')
                //     ->required(),
                TextInput::make('base_price')
                    ->label('Harga'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pakage_name')
                    ->label('Layanan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Layanan')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListPublisherPackages::route('/'),
            'create' => Pages\CreatePublisherPackage::route('/create'),
            'edit' => Pages\EditPublisherPackage::route('/{record}/edit'),
        ];
    }
}