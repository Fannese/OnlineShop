<?php

namespace App\Policies;

use App\Models\GeschirrModel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class GeschirrPolicy
{
    /**
    public function before($user, $ability)
    {
        if ($user->role_as === 'admin') {
            return true;
        }
    }
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     *
     */

    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GeschirrModel  $geschirrModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, GeschirrModel $geschirr)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // return $user->hasPermission('admin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GeschirrModel  $geschirrModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, GeschirrModel $geschirr)
    {
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GeschirrModel  $geschirrModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, GeschirrModel $geschirr)
    {
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GeschirrModel  $geschirrModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, GeschirrModel $geschirr)
    {
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GeschirrModel  $geschirrModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, GeschirrModel $geschirr)
    {
    }
}
