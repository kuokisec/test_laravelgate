<?php

namespace App\Policies;

use App\Models\User;
use App\Models\role_info;
use Illuminate\Auth\Access\HandlesAuthorization;

class role_infoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role_info.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role_info  $roleInfo
     * @return mixed
     */
    public function view(User $user, role_info $roleInfo)
    {
        $user_types = [
            'systemdomain', // システム管理者
            'supplesiteadmin',  // サプリサイト管理者
            'supplesitestaff', // サプリ一般スタッフ
        ];
        return (in_array($roleInfo->msxxxx_role_code, $user_types , true));
     }

    /**
     * Determine whether the user can create role_infos.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the role_info.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role_info  $roleInfo
     * @return mixed
     */
    public function update(User $user, role_info $roleInfo)
    {
        //
    }

    /**
     * Determine whether the user can delete the role_info.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role_info  $roleInfo
     * @return mixed
     */
    public function delete(User $user, role_info $roleInfo)
    {
        //
    }

    /**
     * Determine whether the user can restore the role_info.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role_info  $roleInfo
     * @return mixed
     */
    public function restore(User $user, role_info $roleInfo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the role_info.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role_info  $roleInfo
     * @return mixed
     */
    public function forceDelete(User $user, role_info $roleInfo)
    {
        //
    }
}
