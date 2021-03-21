<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController1 extends Controller
{
    public function index($x, $y, $sum)
    {
        $sum = $x + $y;
        return view('calculator.calc', compact('x', 'y', 'sum'));
    }
}