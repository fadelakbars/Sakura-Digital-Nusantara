<?php

namespace App\Filament\Resources\HkiBookResource\Pages;

use App\Filament\Resources\HkiBookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHkiBook extends CreateRecord
{
    protected static string $resource = HkiBookResource::class;

    protected static ?string $title = 'Tambah Harga HKI Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.book_hki_price.index');
    }
}
