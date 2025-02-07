<?php

namespace App\Policies;

use App\Models\Trainings;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TrainingsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view trainings');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Trainings $trainings): bool
    {
        return $user->can('view trainings');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create trainings');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Trainings $trainings): bool
    {
        return $user->can('update trainings');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Trainings $trainings): bool
    {
        return $user->can('delete trainings');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Trainings $trainings): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Trainings $trainings): bool
    {
        return false;
    }
}
