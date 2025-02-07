<?php

namespace App\Policies;

use App\Models\Brands;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BrandsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view brands');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Brands $brands): bool
    {
        return $user->can('view brands');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create brands');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Brands $brands): bool
    {
        return $user->can('update brands');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Brands $brands): bool
    {
        return $user->can('delete brands');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Brands $brands): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Brands $brands): bool
    {
        return false;
    }
}
