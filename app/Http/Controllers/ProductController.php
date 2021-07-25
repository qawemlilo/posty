<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getPage(){

        $author = 'BlackHawk';
        $title = 'Reckon';

        return view('posts.index', compact('author', 'title'));

    }


    public function listProducts() {
      return view('products.list');
    }
}
