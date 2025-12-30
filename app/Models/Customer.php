<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Post;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name','age','address'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function posts()
    { 
        return $this->hasMany(Post::class); 
    }

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();
    }

    public function latestCommentThroughPost()
    {
        return $this->hasOneThrough(
            Comment::class,  // Final model (C)
            Post::class,     // Intermediate model (B)
            'customer_id',       // FK on posts table  posts.customer_id
            'post_id',       // FK on comments table  comments.post_id
            'id',            // PK on customers table
            'id'             // PK on posts table
        )->latestOfMany(); // get the latest comment
    }
}
