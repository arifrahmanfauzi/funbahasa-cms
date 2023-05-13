<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Event;
use App\Models\Admin\Karya;
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
    }public function read(Request $request)
    {
        $slug = $request->id;
        $category = Category::where('slug',$slug)->first();
        $karya = Karya::where('category',$category->id)->paginate(4);
        return view('read-category',['kategori' => $category, 'karyas' => $karya]);
    }
}
