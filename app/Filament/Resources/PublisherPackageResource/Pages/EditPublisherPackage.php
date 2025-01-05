<?php

namespace App\Filament\Resources\PublisherPackageResource\Pages;

use App\Filament\Resources\PublisherPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublisherPackage extends EditRecord
{
    protected static string $resource = PublisherPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
