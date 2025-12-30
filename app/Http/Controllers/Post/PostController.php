<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postedUser()
    {
        //$post= Post::find(3);
        //$post_user = $post->customer->name;
        //dd($post_user);

        $post= Post::find(4);
        $post_user = $post->customer->name;
        dd($post_user);
    }
}
