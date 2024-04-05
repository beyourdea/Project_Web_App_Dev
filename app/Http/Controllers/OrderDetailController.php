<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    public function index()
    {
        $models = OrderDetail::all();
        return view('receipt', ['models' => $models]);
    }

    public function show($id)
    {
        $model = OrderDetail::findOrFail($id);
        return view('receipt', ['model' => $model]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|string|max:50',
            'meatball_id' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        $model = new OrderDetail();

        if ($validatedData['order_detail_id'] != null) {
            $model = OrderDetail::findOrFail($validatedData['meatball_id']);
        }

        $model->name = $validatedData['name'];
        $model->price = $validatedData['price'];
        $model->amount = $validatedData['amount'];

        $model->save();

        return redirect()->route('receipt');
    }  
}
