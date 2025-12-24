<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        //$profile = Profile::find(1);
        //$customer_name = $profile->customer->name;
        //dd($customer_name);

        $profile = Profile::find(3);
        $customer_name = $profile->customer->name;
        $customer_age = $profile->customer->age;
        $customer_address = $profile->customer->address;
        dd($customer_name,$customer_age,$customer_address);
    }
}
