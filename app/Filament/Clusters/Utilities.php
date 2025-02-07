<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Gate;

class Utilities extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-m-cog-6-tooth';

    protected static ?string $navigationLabel = 'System Management';

}
