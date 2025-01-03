<?php

namespace App\Filament\Resources\TestimoniResource\Pages;

use App\Filament\Resources\TestimoniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonis extends ListRecords
{
    protected static string $resource = TestimoniResource::class;

    protected static ?string $title = 'Daftar Testimoni'; 

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
