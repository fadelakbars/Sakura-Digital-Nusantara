<?php

namespace App\Filament\Resources\ServiceOrderResource\Pages;

use App\Filament\Resources\ServiceOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceOrder extends CreateRecord
{
    protected static string $resource = ServiceOrderResource::class;

    protected static ?string $title = 'Detail Order Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.service-orders.index');
    }

}
