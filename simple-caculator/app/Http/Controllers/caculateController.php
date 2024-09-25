<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caculateController
{
    public function index()
    {
        return view('numbers.index');
    }

    public function calculate(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $total = $a + $b;

        return view('numbers.index', compact('a', 'b', 'total'));
    }
}

