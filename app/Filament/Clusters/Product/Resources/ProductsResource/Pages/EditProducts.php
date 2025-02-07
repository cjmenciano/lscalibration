<?php

namespace App\Filament\Clusters\Product\Resources\ProductsResource\Pages;

use App\Filament\Clusters\Product\Resources\ProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditProducts extends EditRecord
{
    protected static string $resource = ProductsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Product updated')
                ->icon('heroicon-o-check-circle')
                ->body('The product has been updated successfully.');
    }
}
