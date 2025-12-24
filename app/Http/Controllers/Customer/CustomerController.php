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
        //$customers = Customer::with('profile')->get();
        //dd($customers);

        //$customer = $customers[0];
        //$customer = $customers[4];
        //dd($customer);

        //$customer = Customer::with('profile')->find(7);
        //$profile = $customer->profile;
        //dd($profile);

        //$customer = Customer::with('profile')->first();
        //$bio = $customer->profile->bio;
        //$customer_id = $customer->profile->customer_id;
        //dd($bio, $customer_id);

        $customers = Customer::with('profile')->get();
        $customer = $customers[8];
        $bio = $customer->profile->bio;
        $customer_id = $customer->profile->customer_id;
        dd($bio, $customer_id);

    }
}
