<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function show($num1,$comp,$num2)
    {
        return view('calc.show',['num1'=>$num1,'comp'=>$comp,'num2'=>$num2]);
    }
}
