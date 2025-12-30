<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Post;

class LikeController extends Controller
{
    public function showLikedPosts(){
        $user = Customer::find(4);
        $likedPosts = $user->likedPosts()->get();
        foreach ($likedPosts as $post) {
            echo $post->title . "<br>";
            $title[] = $post->title;
        }
        //dd( $title);
    }

    public function showPostLikers() {
        $post = Post::find(2); 
        $likers = $post->likers()->get();

        foreach ($likers as $user) {
            echo($user->id . "<br>");
            echo($user->name . "<br>");
        }
    }
}
