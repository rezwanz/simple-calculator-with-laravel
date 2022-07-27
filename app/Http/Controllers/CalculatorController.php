<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Result;

class CalculatorController extends Controller
{
    private $result;
    public function getResult (Request $request)
    {
        switch ($request->option)
        {
            case '+' : $this->result = $request->first_number + $request->last_number;
            break;
            case '-' : $this->result = $request->first_number - $request->last_number;
            break;
            case '*' : $this->result = $request->first_number * $request->last_number;
            break;
            case '/' : $this->result = $request->first_number / $request->last_number;
            break;
            case '%' : $this->result = $request->first_number % $request->last_number;
            break;
        }
        return redirect()->back()->with('result', $this->result);
    }
}
