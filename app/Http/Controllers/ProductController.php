<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();

        $producers = Producer::all();

        return view('list',[
            'products' => $products,
            'producers' => $producers,
        ]);
    }

    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->producer_id = $request->producers;
        $product->save();

        return redirect('/')->with('status', 'Product Has Been inserted');
    }
}
