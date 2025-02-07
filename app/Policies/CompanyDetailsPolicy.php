<?php

namespace App\Policies;

use App\Models\CompanyDetails;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompanyDetailsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view company profile');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CompanyDetails $companyDetails): bool
    {
        return $user->can('view company profile');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create company profile');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CompanyDetails $companyDetails): bool
    {
        return $user->can('update company profile');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CompanyDetails $companyDetails): bool
    {
        return $user->can('delete company profile');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CompanyDetails $companyDetails): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CompanyDetails $companyDetails): bool
    {
        return false;
    }
}
