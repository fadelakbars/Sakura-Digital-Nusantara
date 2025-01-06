<?php

namespace App\Filament\Resources\HkiBookResource\Pages;

use App\Filament\Resources\HkiBookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHkiBook extends EditRecord
{
    protected static string $resource = HkiBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
