<?php

namespace App\Filament\Clusters\Services\Resources\FaqsResource\Pages;

use App\Filament\Clusters\Services\Resources\FaqsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaqs extends ListRecords
{
    protected static string $resource = FaqsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
