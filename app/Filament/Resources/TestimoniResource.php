<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniResource\Pages;
use App\Filament\Resources\TestimoniResource\RelationManagers;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationLabel = 'Testimoni';
    // protected static ?string $navigationGroup = 'Publisher';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('customer_name')
                    ->label('Nama Customer')
                    ->required()
                    ->maxLength(255),
                TextInput::make('job_title')
                    ->label('Pekerjaan')
                    ->required()
                    ->maxLength(255),
                TextArea::make('testimonial_text')
                    ->label('Isi Testimoni')
                    ->required()
                    ->cols(5),
                TextInput::make('service')
                    ->label('layanan')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('profile_image')
                    ->label('Foto Customer')
                    ->image()
                    ->maxSize(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\ImageColumn::make('profile_image')
                ->label('Foto Customer')
                ->size(50),
            Tables\Columns\TextColumn::make('customer_name')
                ->label('Nama Customer')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('job_title')
                ->label('Pekerjaan')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('testimonial_text')
                ->label('Isi Testimoni')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('service')
                ->label('Layanan')
                ->searchable()
                ->sortable(),
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
            'index' => Pages\ListTestimonis::route('/'),
            'create' => Pages\CreateTestimoni::route('/create'),
            'edit' => Pages\EditTestimoni::route('/{record}/edit'),
        ];
    }
}
