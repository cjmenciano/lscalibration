<?php

namespace App\Filament\Clusters\Product\Resources\BrandsResource\Pages;

use App\Filament\Clusters\Product\Resources\BrandsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditBrands extends EditRecord
{
    protected static string $resource = BrandsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Brand updated')
                ->icon('heroicon-o-check-circle')
                ->body('The brand has been updated successfully.');
    }
}
