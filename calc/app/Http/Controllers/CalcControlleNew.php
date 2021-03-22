<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CalcControlleNew extends Controller
{
    public function show()

    {
        $rez = Session::get('suma', 'not found');
        Session::put('suma', null);
        return view('pc.show', ['r' => $rez]);
    }
    public function calc(Request $request)
    {
        $suma = $request->x + $request->y;
        Session::put('suma', $suma);
        return redirect()->back();
    }
}