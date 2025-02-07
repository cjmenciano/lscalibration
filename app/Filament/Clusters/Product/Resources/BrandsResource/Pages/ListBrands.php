<?php

namespace App\Filament\Clusters\Product\Resources\BrandsResource\Pages;

use App\Filament\Clusters\Product\Resources\BrandsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrands extends ListRecords
{
    protected static string $resource = BrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
