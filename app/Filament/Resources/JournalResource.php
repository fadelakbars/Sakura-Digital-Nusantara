<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JournalResource\Pages;
use App\Filament\Resources\JournalResource\RelationManagers;
use App\Models\Journal;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\MarkdownEditor;

class JournalResource extends Resource
{
    protected static ?string $model = Journal::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Jurnal';

    protected static ?string $navigationGroup = 'Publisher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('journalcname')
                    ->label("Nama Jurnal")
                    ->required(),
                // TextInput::make('description')
                //     ->label("Deskripsi")
                //     ->required(),
                TextInput::make('link')
                    ->label("Link Jurnal")
                    ->required(),
                TextInput::make('courrent_issue')
                    ->label("Link Current Issue")
                    ->required(),
                FileUpload::make('image')
                    ->label("Cover Jurnal")
                    ->required(),
                MarkdownEditor::make('description')
                    ->label("Deskripsi")
                    ->required()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Cover Jurnal'),
                TextColumn::make('journalcname')
                    ->label('Nama Jurnal')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link')
                    ->label('Link Jurnal')
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
            'index' => Pages\ListJournals::route('/'),
            'create' => Pages\CreateJournal::route('/create'),
            'edit' => Pages\EditJournal::route('/{record}/edit'),
        ];
    }
}
