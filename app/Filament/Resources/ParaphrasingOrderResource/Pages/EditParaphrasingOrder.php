<?php

namespace App\Filament\Resources\ParaphrasingOrderResource\Pages;

use App\Filament\Resources\ParaphrasingOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParaphrasingOrder extends EditRecord
{
    protected static string $resource = ParaphrasingOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
