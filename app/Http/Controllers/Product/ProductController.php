<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //$data = Product::all();
        //$data = Product::find(5);
        //$data = Product::where('price', 27200)->get();
        //$data = Product::where('name', 'Example')->first();
        //$data = Product::orderBy('id', 'desc')->get();
        //$data = Product::pluck('name');

        /*Product::create(['name' => 'New Name',
            'price' => '12600'
        ]);*/

        /*$product = Product::find(1);
        $product->update(['name' => 'Updated']);*/

        // Product::find(1)->delete();
        $data = Product::all();
        return view('products.index', [
            'products' => $data
        ]);
    }
}
