<?php

namespace App\Filament\Clusters\Utilities\Resources\PermissionResource\Pages;

use App\Filament\Clusters\Utilities\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermissions extends ListRecords
{
    protected static string $resource = PermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
