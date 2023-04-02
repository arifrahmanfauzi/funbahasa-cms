<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function uploadScript()
    {
        return view('upload');
    }

    public function event()
    {
        return view('event');
    }

    public function readScript()
    {
        return view('reading');
    }
}
