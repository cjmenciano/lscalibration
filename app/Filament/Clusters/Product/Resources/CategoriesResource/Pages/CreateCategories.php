<?php

namespace App\Filament\Clusters\Product\Resources\CategoriesResource\Pages;

use App\Filament\Clusters\Product\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Category created')
                ->icon('heroicon-o-check-circle')
                ->body('The category has been created successfully.');
    }
}
