<?php

namespace App\Filament\Resources\JournalResource\Pages;

use App\Filament\Resources\JournalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJournal extends CreateRecord
{
    protected static string $resource = JournalResource::class;

    protected static ?string $title = 'Tambah Data jurnal'; 
    
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.journals.index');
    }
}
