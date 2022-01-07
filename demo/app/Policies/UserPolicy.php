<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function create(User $user)
    {
        return $user->email === 'hexapie@gmail.com';
    }

    public function edit(User $user, User $model)
    {
        return (bool) mt_rand(0, 1); // 👀
    }
}
