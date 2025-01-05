<?php

namespace App\Filament\Resources\PriceRangeResource\Pages;

use App\Filament\Resources\PriceRangeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceRange extends CreateRecord
{
    protected static string $resource = PriceRangeResource::class;

    protected static ?string $title = 'Tambah Paket Publikasi Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.price-ranges.index');
    }
}
