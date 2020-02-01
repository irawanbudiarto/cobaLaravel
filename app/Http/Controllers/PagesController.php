<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function organic()
    {
        return view('organic');
    }

    public function foods()
    {
        return view('foods');
    }

    public function about()
    {
        return view('about');
    }
}
