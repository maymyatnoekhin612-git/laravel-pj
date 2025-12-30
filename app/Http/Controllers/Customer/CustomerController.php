<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Profile;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with('profile')->get();
        $customer = $customers[8];
        $bio = $customer->profile->bio;
        $customer_id = $customer->profile->customer_id;
        dd($bio, $customer_id);

    }

    public function postList()
    {
        //$customer = Customer::with('posts')->find(1);
        //$posts = $customer->posts;
        //dd($posts);

        //$user_posts  = Customer::find(1)->posts;
        //dd($user_posts);

        $user_posts  = Customer::find(1)->posts;
        foreach($user_posts as $user_post) {
            $user_post_title[] = $user_post->title;
        }
        dd($user_post_title);
    }

    public function showLatestComment($customerId)
    {
        $user = Customer::find($customerId);
        $latestComment = $user->latestCommentThroughPost;
        dd($latestComment->comment);
    }
}
