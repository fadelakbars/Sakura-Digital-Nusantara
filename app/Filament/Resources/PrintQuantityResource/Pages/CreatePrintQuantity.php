<?php

namespace App\Filament\Resources\PrintQuantityResource\Pages;

use App\Filament\Resources\PrintQuantityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrintQuantity extends CreateRecord
{
    protected static string $resource = PrintQuantityResource::class;

    protected static ?string $title = 'Tambah Harga Cetak Per Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.print-quantities.index');
    }
}
