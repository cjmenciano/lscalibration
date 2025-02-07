<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
    Spatie\Permission\PermissionServiceProvider::class,

    /*'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
    'role_or_middleware' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,*/
];
