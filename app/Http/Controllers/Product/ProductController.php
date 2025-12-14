<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [ "productName" => "laptop", "color" => "red", "price"=> 300 ],
            [ "productName" => "TV", "color" => "black", "price"=> 350 ],
            [ "productName" => "Phone", "color" => "silver", "price"=> 200 ],
            [ "productName" => "Desktop", "color" => "white", "price"=> 400 ],
        ];

        return view('products.index', ['products' => $products]);
    }
}
