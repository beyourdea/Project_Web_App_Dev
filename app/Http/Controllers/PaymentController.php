<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($id) {
      $models1 = Order::findOrFail($id);
      $models2 = OrderDetail::join("meatball", "meatball.meatball_id = order_detail.meatball_id")->where('order_id', $id)->get();
        
      return view('receipt', ['models1' => $models1, 'models2' => $models2]);
    }
    
}