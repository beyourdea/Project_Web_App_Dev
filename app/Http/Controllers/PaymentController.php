<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($id) {
      $models1 = Order::join("sauce", "sauce.sauce_id", "=", "order.sauce_id")
      ->join("side_dishes", "side_dishes.side_dishes_id", "=", "order.side_dishes_id")
      ->select("order.*", "sauce.name AS sauce_name", "side_dishes.name AS side_dishes_name")
      ->where("order.order_id", $id)->get();
      $models2 = OrderDetail::join("meatball", "meatball.meatball_id", "=", "order_detail.meatball_id")
      ->select("order_detail.*", "meatball.name AS name", "meatball.price AS price")
      ->where("order_id", $id)->get();
        
      return view('receipt', ['models1' => $models1, 'models2' => $models2]);
    }
    
    
}