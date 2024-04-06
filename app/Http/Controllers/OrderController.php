<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use App\Models\SideDishes;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
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
        $keys = array_keys( $object);

        foreach($keys as $key) {
            $model = new OrderDetail();
            $model->meatball_id = $object[$key]["id"];
            $model->amount = $object[$key]["value"];
            $models[] = $model;
        }
        
        Session::flash('model', json_encode($models));
        return  json_encode($models);
    }

    public function getModel() {
        $models  = Session::get('model');

        return response()->json($models);
    }
}
