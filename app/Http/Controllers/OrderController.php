<?php

namespace App\Http\Controllers;

use App\Models\Meatball;
use App\Models\Order;
use App\Models\Sauce;
use App\Models\SideDishes;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index() {
        $models1 = Sauce::all();
        $models2 = SideDishes::all();
        
        return view('side', ['models1' => $models1, 'models2' => $models2]);
    }

    public function saveModel(Request $request) {
        $models = [];
        $object = $request->all();
        $keys = array_keys($object);

        foreach($keys as $key) {
            $model = new OrderDetail();
            $model->meatball_id = $object[$key]["id"];
            $model->amount = $object[$key]["value"];
            $models[] = $model;
        }
        
        Session::put('model', $models);
        return  json_encode($models);
    }

    public function getModel() {
        $models  = Session::get('model');

        return json_encode($models);
    }

    public function saveOrder(Request $request) {
        DB::beginTransaction();
        try {
            $object = $request->all();
            $order = new Order();
            $list = $object["detail"];
            $order->sauce_id = $object["sauce"];
            $order->side_dishes_id = $object["side_dishes"];
            $order->total_price = 0;
            $order->save();
            foreach($list as $item) {
                $orderDetail = new OrderDetail();
                $orderDetail->meatball_id = $item["meatball_id"];
                $orderDetail->amount = $item["amount"];
                $orderDetail->order_id =  $order->order_id;
                $orderDetail->save();
                $meatball = Meatball::findOrFail($item["meatball_id"]);
                $meatball->amount -= $item["meatball_id"];
                $meatball->save();
            }

            DB::commit();
            return $order->order_id;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
