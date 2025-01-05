<?php

namespace App\Filament\Resources\TurnitinOrderResource\Pages;

use App\Filament\Resources\TurnitinOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTurnitinOrder extends EditRecord
{
    protected static string $resource = TurnitinOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
