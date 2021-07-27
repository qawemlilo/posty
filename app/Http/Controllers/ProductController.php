<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getPage(){

        $author = 'BlackHawk';
        $title = 'Reckon';

        return view('posts.index', compact('author', 'title'));

    }


    public function listProducts() {
        $products = Product::all(); 


      return view('products.list', ['products' => $products]);
    }
}
