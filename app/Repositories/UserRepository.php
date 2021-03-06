<?php


namespace App\Repositories;


use App\Models\User\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(){
        return User::all();
    }

    public function deleted(){
        return User::all();
    }

    public function save(User $user){
        $user->password = bcrypt('hello');
        return $user->save();
    }
}
