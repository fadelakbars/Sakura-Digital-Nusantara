<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TurnitinOrderResource\Pages;
use App\Filament\Resources\TurnitinOrderResource\RelationManagers;
use App\Models\TurnitinOrder;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TurnitinOrderResource extends Resource
{
    protected static ?string $model = TurnitinOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    protected static ?string $navigationLabel = 'Turnitin Domunet';

    protected static ?string $navigationGroup = 'Publisher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'In Progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'Revised' => 'Revised',
                    ])
                    ->default('pending')
                    ->label('Status'),
                TextInput::make('client_name')->label('Nama'),
                TextInput::make('client_email')->label('Email'),
                TextInput::make('client_phone')->label('Whatsapp'),
                TextInput::make('document_title')->label('Judul Dokumen'),
                TextInput::make('document_path')->label('Dokumen'),
                TextInput::make('invoice_number')->label('Invooice'),
                TextInput::make('invoice_path')->label('Path'),
                TextInput::make('total_price')->label('Harga'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client_name')->label('Nama')->searchable()->sortable(),
                TextColumn::make('document_title')->label('Nama Dokumen')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('total_price')->label('Total Harga')->money('IDR')->searchable()->sortable(),
                Tables\Columns\IconColumn::make('client_phone')
                    ->label('WA')
                    ->getStateUsing(fn() => true) 
                    ->icon(fn(bool $state): string => 'heroicon-o-phone') 
                    ->color('success')
                    ->url(fn($record) => 'https://wa.me/' . preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $record->client_phone)))
                    ->openUrlInNewTab(),
                Tables\Columns\IconColumn::make('')
                    ->label('Invoice')
                    ->getStateUsing(fn() => true) 
                    ->icon(fn(bool $state): string => 'heroicon-o-arrow-down-on-square') 
                    ->color('warning')
                    ->url(fn($record) => route('invoice.download', ['id' => $record->id])),
                Tables\Columns\IconColumn::make('manuscript_download')
                    ->label('Manuskrip')
                    ->getStateUsing(fn() => true)
                    ->icon(fn(bool $state): string => 'heroicon-o-document-arrow-down')
                    ->color('primary')
                    ->url(fn($record) => route('manuscript.download', ['id' => $record->id])),

            ])
            ->filters([
                
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
            'index' => Pages\ListTurnitinOrders::route('/'),
            'create' => Pages\CreateTurnitinOrder::route('/create'),
            'edit' => Pages\EditTurnitinOrder::route('/{record}/edit'),
        ];
    }
}
