<?php

namespace App\Filament\Resources\HkiBookResource\Pages;

use App\Filament\Resources\HkiBookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHkiBooks extends ListRecords
{
    protected static string $resource = HkiBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected static ?string $title = 'Harga HKI Buku'; 

}
