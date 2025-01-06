<?php

namespace App\Filament\Resources\PublisherOrderResource\Pages;

use App\Filament\Resources\PublisherOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublisherOrder extends EditRecord
{
    protected static string $resource = PublisherOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected static ?string $title = 'Edit Orderan Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.publisher_orders.index');
    }
}
