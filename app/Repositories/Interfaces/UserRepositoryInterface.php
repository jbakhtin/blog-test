<?php


namespace App\Repositories\Interfaces;


use App\Models\User\User;

interface UserRepositoryInterface
{
    public function all();
    public function deleted();
    public function save(User $user);
}
