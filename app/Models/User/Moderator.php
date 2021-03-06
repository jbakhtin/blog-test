<?php

namespace App\Models\User;

use App\Models\User\User;

class Moderator extends User
{
    function __construct(array $attributes = [])
    {
        $attributes['tole'] = 'moderator';
        parent::__construct($attributes);
    }
}
