<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ServiceOrderResource\Pages;
use App\Models\ServiceOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceOrderResource extends Resource
{
    protected static ?string $model = ServiceOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Publiher Order';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Data Pelanggan
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\TextInput::make('email')->email()->required()->label('Email'),
                Forms\Components\TextInput::make('phone')->required()->label('Phone'),
                Forms\Components\DatePicker::make('date_of_birth')->nullable()->label('Date of Birth'),
                Forms\Components\Select::make('gender')
                    ->options(['Pria' => 'Laki-laki', 'Wanita' => 'Perempuan'])
                    ->required()->label('Gender'),
                Forms\Components\TextInput::make('institution')->nullable()->label('Institution'),
                Forms\Components\TextInput::make('job_title')->nullable()->label('Job Title'),
                Forms\Components\Textarea::make('address')->nullable()->label('Address'),

                // Detail Layanan
                Forms\Components\Select::make('service_type')
                    ->options([
                        'penerbitan_buku' => 'Penerbitan Buku',
                        'mencetak_buku' => 'Mencetak Buku',
                        'menerbitkan_dan_mencetak' => 'Menerbitkan dan Mencetak Buku',
                    ])
                    ->required()->label('Service Type'),
                Forms\Components\Select::make('book_size')
                    ->options([
                        '100-250 halaman' => '100-250 halaman',
                        '250-550 halaman' => '250-550 halaman',
                    ])
                    ->nullable()->label('Book Size'),
                Forms\Components\TextInput::make('print_quantity')->numeric()->nullable()->label('Print Quantity'),

                // Invoice & Status
                Forms\Components\TextInput::make('invoice_number')->nullable()->label('Invoice Number'),
                Forms\Components\TextInput::make('amount')->numeric()->nullable()->label('Amount'),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'verified' => 'Verified',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                        'revised' => 'Revised',
                    ])
                    ->default('pending')->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->sortable()->searchable(),
                // Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('service_type')->label('Service Type')->sortable(),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->color(function(string $state) : string{
                    return match($state){
                        'pending' => 'warning',
                        'verified' => 'info',
                        'in_progress' => 'primary',
                        'completed' => 'success',
                        'revised' => 'danger',
                    };
                })
                ->sortable(),
                // Tables\Columns\TextColumn::make('invoice_number')->label('Invoice Number'),
                Tables\Columns\TextColumn::make('amount')->label('Amount')->money('idr'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'verified' => 'Verified',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                        'revised' => 'Revised',
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
