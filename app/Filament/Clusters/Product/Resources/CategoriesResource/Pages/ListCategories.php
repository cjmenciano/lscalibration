<?php

namespace App\Filament\Clusters\Product\Resources\CategoriesResource\Pages;

use App\Filament\Clusters\Product\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
