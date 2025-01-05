<?php

namespace App\Filament\Resources\ProofreadingOrderResource\Pages;

use App\Filament\Resources\ProofreadingOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProofreadingOrders extends ListRecords
{
    protected static string $resource = ProofreadingOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
