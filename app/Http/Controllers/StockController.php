<?php

namespace App\Http\Controllers;
use App\Models\Meatball;
use App\Models\Sauce;
use App\Models\SideDishes;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() {
        $models1 = Meatball::all();
        $models2 = Sauce::all();
        $models3 = SideDishes::all();
          
        return view('stock', ['models1' => $models1, 'models2' => $models2,'models3'=> $models3]);
      }
}
