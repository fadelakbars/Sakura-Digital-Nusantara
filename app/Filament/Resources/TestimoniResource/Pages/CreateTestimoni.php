<?php

namespace App\Filament\Resources\TestimoniResource\Pages;

use App\Filament\Resources\TestimoniResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimoni extends CreateRecord
{
    protected static string $resource = TestimoniResource::class;
    
    protected static ?string $title = 'Tambah Testmoni'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.testimonis.index');
    }
}
