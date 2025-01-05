<?php

namespace App\Filament\Resources\PublisherOrderResource\Pages;

use App\Filament\Resources\PublisherOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublisherOrders extends ListRecords
{
    protected static string $resource = PublisherOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
