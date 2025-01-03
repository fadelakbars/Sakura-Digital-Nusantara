<?php

namespace App\Filament\Resources\TestimoniResource\Pages;

use App\Filament\Resources\TestimoniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimoni extends EditRecord
{
    protected static string $resource = TestimoniResource::class;

    protected static ?string $title = 'Edit Testmoni'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.testimonis.index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
