<?php

namespace App\Filament\Resources\ParaphrasingOrderResource\Pages;

use App\Filament\Resources\ParaphrasingOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParaphrasingOrders extends ListRecords
{
    protected static string $resource = ParaphrasingOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
