<?php

namespace App\Filament\Resources\PublisherOrderResource\Pages;

use App\Filament\Resources\PublisherOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublisherOrder extends CreateRecord
{
    protected static string $resource = PublisherOrderResource::class;

    protected static ?string $title = 'Tambah Orderan Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.publisher_orders.index');
    }
}
