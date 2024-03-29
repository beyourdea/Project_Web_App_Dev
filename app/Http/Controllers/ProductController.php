<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = products::all();
        return view("Products", compact("products"));
    }
}
