<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\view\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    /**
        * Home URL with Parameters
        * @param string $param1
        * @param string $param2
        * @return \Illuminate\View\View
     */

     public function homeWithParams(string $param1, string $param2 ,string $param3 = null): View
     {
         return view('home1', [
            'param1' => $param1, 
            'param2' => $param2,
            'param3' => $param3
        ]);
     }
}

