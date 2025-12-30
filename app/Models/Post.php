<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Post extends Model
{
    protected $fillable = ['title','body'];

    public function customer() 
    {
        return $this->belongsTo(Customer::class);
    }

    public function likers()
    {
        return $this->belongsToMany(Customer::class, 'post_user_likes')->withTimestamps();
    }
}
