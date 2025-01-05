<?php

namespace App\Filament\Resources\PublisherPackageResource\Pages;

use App\Filament\Resources\PublisherPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublisherPackage extends CreateRecord
{
    protected static string $resource = PublisherPackageResource::class;

    protected static ?string $title = 'Tamabh Layanan'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.publisher-packages.index');
    }
}
