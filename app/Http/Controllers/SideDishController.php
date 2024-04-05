<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use App\Models\SideDishes;
use Illuminate\Http\Request;

class SideDishController extends Controller
{

    public function index()
    {
        $models1 = Sauce::all();
        $models2 = SideDishes::all();

        return view('side', ['models1' => $models1, 'models2' => $models2]);
    }



    public function show($id)
    {
        $models1 = Sauce::findOrFail($id);
        $models2 = SideDishes::findOrFail($id);

        return view('product_detail', ['sauce' => $models1, 'sideDish' => $models2]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $models1 = new Sauce();

        if ($validatedData['sauce_id'] != null) {
            $models1 = Sauce::find($validatedData['sauce_id']);
        }

        $models1->name = $validatedData['name'];
        $models1->save();


        $models2 = new SideDishes();

        if ($validatedData['side_dish_id'] != null) {
            $models2 = SideDishes::find($validatedData['side_dish_id']);
        }

        $models2->name = $validatedData['name']; // คุณอาจต้องปรับเปลี่ยนการเชื่อมโยงข้อมูลที่นี่ตามโมเดล SideDish
        $models2->save();

        return redirect()->route('slide');
    }
}
