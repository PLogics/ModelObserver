<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::create([
            'name' => 'Royal Enfield-2023',
            'price' => 1000
        ]);
        
        dd($product);
    }

    // public function delete()
    // {
    //     Product::where('id',2)->delete();
            
            // dd('done');
    // }
}
