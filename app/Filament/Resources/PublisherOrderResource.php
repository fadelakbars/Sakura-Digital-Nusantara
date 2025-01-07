<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublisherOrderResource\Pages;
use App\Filament\Resources\PublisherOrderResource\RelationManagers;
use App\Models\PublisherOrder;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class PublisherOrderResource extends Resource
{
    protected static ?string $model = PublisherOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Orderan Buku';

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

                TextInput::make('client_name')
                    ->required()
                    ->label('Nama Pelanggan'),

                TextInput::make('book_title')
                    ->required()
                    ->label('Judul Buku'),

                TextInput::make('print_qunaitity')
                    ->required()
                    ->numeric()
                    ->label('Jumlah Cetakan'),

                // RELASI TABEL
                Forms\Components\Select::make('package_id')
                    ->relationship('package', 'package_name') 
                    // ->searchable()  
                    ->label('layanan')
                    ->required(),

                Select::make('price_range_id')
                    ->relationship('priceRange', 'page_rage')
                    // ->searchable()  
                    ->label('Paket Penerbitan'),

                TextInput::make('price_per_unit')
                    ->label('Harga Cetak Perbuku'),
                // END RELASI TABEL

                TextInput::make('client_email')
                    ->email()
                    ->required()
                    ->label('Email Pelanggan'),

                TextInput::make('client_phone')
                    ->required()
                    ->label('Whatsapp'),

                Select::make('client_gender')
                    ->options(['Pria' => 'Pria', 'Wanita' => 'Wanita'])
                    ->required()
                    ->label('Gender'),

                DatePicker::make('client_birthdate')
                    ->required()
                    ->label('Tanggal Lahir'),

                TextInput::make('client_job_title')
                    ->required()
                    ->label('Pekerjaan'),

                TextInput::make('client_institution')
                    ->required()
                    ->label('Institusi'),

                TextInput::make('invoice_number')
                    ->nullable()
                    ->label('Nomor Invoice'),

                TextInput::make('total_price')
                    ->label('Total Harga'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //publisher_orders
                Tables\Columns\TextColumn::make('client_name')->label('Nama Pelanggan')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('book_title')->label('Judul Buku')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('package.package_name')->label('Layanan')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->color(function(string $state) : string{
                    return match($state){
                        'Pending' => 'warning',
                        'In Progress' => 'primary',
                        'Completed' => 'success',
                        'Revised' => 'danger',
                    };
                })->searchable()->sortable(),
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
                    ->label('Manuscript')
                    ->getStateUsing(fn() => true)
                    ->icon(fn(bool $state): string => 'heroicon-o-document-arrow-down')
                    ->color('primary')
                    ->url(fn($record) => route('manuscript.download', ['id' => $record->id])),

            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'In Progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'Revised' => 'Revised',
                    ])
                    ->label('Filter by Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Edit'),
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
            'index' => Pages\ListPublisherOrders::route('/'),
            'create' => Pages\CreatePublisherOrder::route('/create'),
            'edit' => Pages\EditPublisherOrder::route('/{record}/edit'),
        ];
    }
}
