<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ServiceOrderResource\Pages;
use App\Models\ServiceOrder;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceOrderResource extends Resource
{
    protected static ?string $model = ServiceOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Orderan Buku';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Verified' => 'Verified',
                        'In Progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'Revised' => 'Revised',
                    ])
                    ->default('pending')->label('Status'),
                Forms\Components\TextInput::make('name')->required()->label('Nama'),
                Forms\Components\TextInput::make('book_title')->required()->label('Judul Buku'),
                Forms\Components\TextInput::make('email')->email()->required()->label('Email'),
                Forms\Components\TextInput::make('phone')->required()->label('Whatsapp'),
                Forms\Components\DatePicker::make('date_of_birth')->nullable()->label('Tanggal Lahir'),
                Forms\Components\Select::make('gender')
                    ->options(['Pria' => 'Pria', 'Wanita' => 'Wanita'])
                    ->required()->label('Gender'),
                Forms\Components\TextInput::make('institution')->nullable()->label('Institusi'),
                Forms\Components\TextInput::make('job_title')->nullable()->label('Pekerjaan'),
                Forms\Components\Textarea::make('address')->nullable()->label('Alamat'),
                Forms\Components\Select::make('service_type')
                    ->options([
                        'Penerbitan Buku' => 'Penerbitan Buku',
                        'Mencetak Buku' => 'Mencetak Buku',
                        'Menerbitkan dan Mencetak' => 'Menerbitkan dan Mencetak',
                    ])
                    ->required()->label('Jenis Layanan'),
                Forms\Components\Select::make('book_size')
                    ->options([
                        '100-250 halaman' => '100-250 halaman',
                        '250-550 halaman' => '250-550 halaman',
                    ])
                    ->nullable()->label('Ukuran Buku'),
                Forms\Components\TextInput::make('print_quantity')->numeric()->nullable()->label('Jumlah Cetakan'),
                Forms\Components\TextInput::make('invoice_number')->nullable()->label('Nomor Invoice'),
                Forms\Components\TextInput::make('amount')->numeric()->nullable()->label('Harga'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('book_title')->label('Judul Buku')->sortable()->searchable(),
                
                Tables\Columns\TextColumn::make('service_type')->label('Jenis Layanan')->sortable(),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->color(function(string $state) : string{
                    return match($state){
                        'Pending' => 'warning',
                        'Verified' => 'info',
                        'In Progress' => 'primary',
                        'Completed' => 'success',
                        'Revised' => 'danger',
                    };
                })
                ->sortable(),
                Tables\Columns\TextColumn::make('amount')->label('Harga')->money('idr')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('phone')
                    ->label('Whatsapp')
                    ->getStateUsing(fn() => true) 
                    ->icon(fn(bool $state): string => 'heroicon-o-phone') 
                    ->color('success')
                    ->url(fn($record) => 'https://wa.me/' . preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $record->phone)))
                    ->openUrlInNewTab(), 
                Tables\Columns\IconColumn::make('download_invoice')
                    ->label('Download Invoice')
                    ->icon('heroicon-o-arrow-down-on-square')
                    ->color('success')
                    ->url(fn($record) => route('invoice.download', ['id' => $record->id]))
                    ->openUrlInNewTab(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Verified' => 'Verified',
                        'In Progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'Revised' => 'Revised',
                    ])
                    ->label('Filter by Status'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListServiceOrders::route('/'),
            'create' => Pages\CreateServiceOrder::route('/create'),
            'view' => Pages\ViewServiceOrder::route('/{record}'),
            'edit' => Pages\EditServiceOrder::route('/{record}/edit'),
        ];
    }
}
