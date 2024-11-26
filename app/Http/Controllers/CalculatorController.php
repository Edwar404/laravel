<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculators.index');
    }
    public function plus()
    {
        $title = "Plus Calculator";
        $result = 0;
        $operator = "plus";
        return view('calculators.result', compact('title', 'result', 'operator'));
    }



    public function minus()
    {
        $title = "Minus Calculator";
        $result = 0;
        $operator = 'minus';
        return view('calculators.result', compact('title', 'result', 'operator'));
    }

    public function multiply()
    {
        $title = "Multiply Calculator";
        $result = 0;
        $operator = 'multiply';
        return view('calculators.result', compact('title', 'result', 'operator'));
    }

    public function divide()
    {
        $title = "Divide Calculator";
        $result = 0;
        $operator = 'divide';
        return view('calculators.result', compact('title', 'result', 'operator'));
    }

    public function calculate(Request $request)
    {

        $number1 = $request->number1;
        $number2 = $request->number2;
        $operator = $request->operator;
        if ($operator == 'plus') {
            $symbol = '+';
            $result = $number1 + $number2;
        } elseif ($operator == 'minus') {
            $symbol = '-';
            $result = $number1 - $number2;
        } elseif ($operator == 'multiply') {
            $symbol = 'X';
            $result = $number1 * $number2;
        } elseif ($operator == 'divide') {
            $symbol = ':';
            $result = $number1 / $number2;
        }

        $title = "Result of: " . $number1 . " " . $symbol . " " . $number2 . " is " . $result;
        return view('calculators.result', compact('title', 'result', 'operator'));
    }
}
