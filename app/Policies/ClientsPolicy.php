<?php

namespace App\Policies;

use App\Models\Clients;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ClientsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view clients');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Clients $clients): bool
    {
        return $user->can('view clients');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create clients');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Clients $clients): bool
    {
        return $user->can('update clients');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Clients $clients): bool
    {
        return $user->can('delete clients');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Clients $clients): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Clients $clients): bool
    {
        return false;
    }
}
