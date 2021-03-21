<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController1Minus extends Controller
{
    public function sum($action, $x, $y)
    {
        if ($action == 'sum') {
            $suma = $x + $y;
            return view('calculator.calc', compact('suma'));
        } elseif ($action == 'minus') {
            $suma = $x - $y;
            return view('calculator.calc', compact('suma'));
        } elseif ($action == 'mult') {
            $suma = $x * $y;
            return view('calculator.calc', compact('suma'));
        } elseif ($action == 'divide') {
            $suma = $x / $y;
            return view('calculator.calc', compact('suma'));
        } else {
            $suma = ' neveika';
            return view('calculator.calc', compact('suma'));
        }
    }
}
