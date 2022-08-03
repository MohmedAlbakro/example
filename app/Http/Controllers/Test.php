<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function test()
    {
        return view('home');
    }
    public function test2()
    {
        return 'bspls;czm';
    }
}
