<?php

namespace App\Filament\Clusters\Product\Resources\CategoriesResource\Pages;

use App\Filament\Clusters\Product\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCategories extends EditRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Category updated')
                ->icon('heroicon-o-check-circle')
                ->body('The category has been updated successfully.');
    }
}
