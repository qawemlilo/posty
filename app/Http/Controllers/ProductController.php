<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function getPage(){

        $author = 'BlackHawk';
        $title = 'Reckon';

        return view('posts.index', compact('author', 'title'));

    }


    public function listProducts() {
        // $products = Product::all(); 
        $products = Product::paginate(2);


      return view('products.list', ['products' => $products]
    
    //   return view('products.list', ['products' => DB::table('products')->simplePaginate(2) ]

    );
    }
}
