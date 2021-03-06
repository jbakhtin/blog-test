<?php

namespace App\Models\User;

use App\Models\User\User;

class Admin extends User
{
    function __construct(array $attributes = [])
    {
        $attributes['tole'] = 'admin';
        parent::__construct($attributes);
    }
}
