<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProducstLists(){
        return view('backend.products.products_lists');
    }

    function AddProducts(){
        return view('backend.products.add_product');
    }

}
