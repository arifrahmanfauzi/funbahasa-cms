<?php

namespace App\Http\Controllers;

use App\Models\Admin\Event;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index(){
        $event = Event::where('status',1)->take(1)->first();
        $admiko_data["fileInfo"] = Event::$admiko_file_info;
        return view('index')->with('event',$event)->with('admiko_data',$admiko_data);
    }
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
