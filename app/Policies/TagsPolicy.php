<?php

namespace App\Policies;

use App\Models\Tags;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TagsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view sub-categories');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tags $tags): bool
    {
        return $user->can('view sub-categories');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create sub-categories');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tags $tags): bool
    {
        return $user->can('update sub-categories');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tags $tags): bool
    {
        return $user->can('delete sub-categories');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tags $tags): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tags $tags): bool
    {
        return false;
    }
}
