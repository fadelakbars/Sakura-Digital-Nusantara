<?php

namespace App\Filament\Resources\PrintQuantityResource\Pages;

use App\Filament\Resources\PrintQuantityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrintQuantities extends ListRecords
{
    protected static string $resource = PrintQuantityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
