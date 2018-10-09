<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id', 'firstName', 'email', 'password', 'lastName', 'avater', 'bio', 'picture'
    ];
}
