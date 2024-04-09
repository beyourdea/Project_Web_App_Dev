<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Order;
use App\Models\OrderDetail;

class DashboardController extends Controller
{

    public function index() {
        $combinedData = DB::table('order')
                        ->join('order_detail', 'order.order_id', '=', 'order_detail.order_id')
                        ->join('sauce', 'sauce.sauce_id', '=', 'order.sauce_id')
                        ->join('side_dishes', 'side_dishes.side_dishes_id', '=', 'order.side_dishes_id')
                        ->join('meatball', 'meatball.meatball_id', '=', 'order_detail.meatball_id')
                        ->select('order.order_id','sauce.name AS sauce_name', 'side_dishes.name AS side_dishes_name', 'meatball.name AS meatball_name', 'meatball.price AS meatball_price')
                        ->orderBy('order.order_id', 'desc') // Order by order_id descending
                        ->get();
    
        // Pass data to the view
        return view('dashboard', ['combinedData' => $combinedData]);
    }
    

    
}
