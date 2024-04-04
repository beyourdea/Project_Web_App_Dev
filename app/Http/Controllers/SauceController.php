<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    public function index()
    {
        $models = Sauce::all();
        return view('slide', ['models' => $models]);
    }

    public function show($id)
    {
        $model = Sauce::findOrFail($id);
        return view('product_detail', ['model' => $model]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
        ]);

        $model = new Sauce();

        if ($validatedData['sauce_id'] != null) {
            $model = Sauce::find($validatedData['sauce_id']);
        }

        $model->name = $validatedData['name'];
        

        $model->save();

        return redirect()->route('slide');
    }
}
