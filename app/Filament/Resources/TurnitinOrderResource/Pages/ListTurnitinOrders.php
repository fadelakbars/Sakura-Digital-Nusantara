<?php

namespace App\Filament\Resources\TurnitinOrderResource\Pages;

use App\Filament\Resources\TurnitinOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTurnitinOrders extends ListRecords
{
    protected static string $resource = TurnitinOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected static ?string $title = 'Daftar Turnitin Order'; 

}
