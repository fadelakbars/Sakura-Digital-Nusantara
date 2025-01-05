<?php

namespace App\Filament\Resources\PrintQuantityResource\Pages;

use App\Filament\Resources\PrintQuantityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrintQuantity extends EditRecord
{
    protected static string $resource = PrintQuantityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected static ?string $title = 'Edit Harga Cetak Per Buku'; 

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.print-quantities.index');
    }
}
