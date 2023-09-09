<?php

namespace App\Http\Controllers;

use App\Models\Admin\Announcement;
use App\Models\Admin\Category;
use App\Models\Admin\Event;
use App\Models\Admin\Karya;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        $event = Event::where('status', 1)->take(1)->first();
        $admiko_data["fileInfo"] = Event::$admiko_file_info;
        return view('index')->with('event', $event)->with('admiko_data', $admiko_data);
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
        $event = new Event();
        $eventActive = $event->whereStatus(1)->first();
        return view('event', ['active_event' => $eventActive,'events' => $event->whereStatus('!=', 1)->get()]);
    }

    public function readScript()
    {
        return view('reading');
    }
    public function read(Request $request)
    {
        $slug = $request->id;
        $category = Category::where('slug', $slug)->first();
        $karya = Karya::where('category', $category->id)->latest('created_at')->paginate(4);
        return view('read-category', ['kategori' => $category, 'karyas' => $karya]);
    }
    public function announcement(Request $request, $id)
    {
        $announcement = Announcement::where('slug', 'like', $id)->firstOrFail();
        return view('announcement', ['announcement' => $announcement]);
    }
}
