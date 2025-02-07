<?php

namespace App\Filament\Clusters\Product\Resources\BrandsResource\Pages;

use App\Filament\Clusters\Product\Resources\BrandsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateBrands extends CreateRecord
{
    protected static string $resource = BrandsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Brand created')
                ->icon('heroicon-o-check-circle')
                ->body('The brand has been created successfully.');
    }
}
