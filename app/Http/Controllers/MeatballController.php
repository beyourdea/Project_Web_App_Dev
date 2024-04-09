<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meatball;


class MeatballController extends Controller
{
    public function index()
    {
        $models = Meatball::all();
        return view('product', ['models' => $models]);
    }

    public function show($id)
    {
        $model = Meatball::findOrFail($id);
        return json_encode($model);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'meatball_id' => 'integer',
            'name' => 'required|string|max:50',
            'price' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        $model = new Meatball();

        if ($validatedData['meatball_id'] != null) {
            $model = Meatball::findOrFail($validatedData['meatball_id']);
        }

        $model->name = $validatedData['name'];
        $model->price = $validatedData['price'];
        $model->amount = $validatedData['amount'];

        $model->save();

        return redirect()->route('product');
    }

    public function destroy($id)
    {
        $user = Meatball::findOrFail($id);
        $user->delete();

        return 1;
    }
}
