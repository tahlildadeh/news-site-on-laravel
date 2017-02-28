<?php

namespace App\Policies;

use App\Item;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

//    public function create(User $user, Item $item)
//    {
//        return $user->id === $item->userWrite;
//    }

    public function edit(User $user, Item $item)
    {
        //dd($user->id, $item->userWrite);
        return $user->id === $item->userWrite;
    }

    public function update(User $user, Item $item)
    {
        return $this->edit($user, $item);
    }
    public function destroy(User $user, Item $item)
    {
        return $this->edit($user, $item);
    }


}
