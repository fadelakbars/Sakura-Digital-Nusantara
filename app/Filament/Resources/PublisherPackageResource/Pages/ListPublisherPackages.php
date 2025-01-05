<?php

namespace App\Filament\Resources\PublisherPackageResource\Pages;

use App\Filament\Resources\PublisherPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublisherPackages extends ListRecords
{
    protected static string $resource = PublisherPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected static ?string $title = 'Daftar Layanan'; 

}
