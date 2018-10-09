<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'posts';

    protected $fillable = ['user_id','title', 'description','post_icon'];

}
