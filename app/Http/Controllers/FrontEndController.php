<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function frontEnd()
    {
        return view('front-end.home.home');
    }
}
