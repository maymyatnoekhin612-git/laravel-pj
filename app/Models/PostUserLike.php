<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    protected $fillable = ['post_id','customer_id'];
}
