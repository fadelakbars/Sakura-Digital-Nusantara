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

    protected static ?string $title = 'Edit Turnitin Order'; 
    
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.turnitin_orders.index');
    }
}
