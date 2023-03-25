<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\EventRequest;
use Gate;
use App\Models\Admin\Tags;

class EventController extends Controller
{

    public function index()
    {
        if (Gate::none(['event_allow', 'event_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "event";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data["fileInfo"] = Event::$admiko_file_info;
        $tableData = Event::orderByDesc("id")->get();
        return view("admin.event.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['event_allow'])) {
            return redirect(route("admin.event.index"));
        }
        $admiko_data['sideBarActive'] = "event";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.event.store");
        $admiko_data["fileInfo"] = Event::$admiko_file_info;
        
		$tags_all = Tags::all()->sortBy("name_tag")->pluck("name_tag", "id");
        return view("admin.event.manage")->with(compact('admiko_data','tags_all'));
    }

    public function store(EventRequest $request)
    {
        if (Gate::none(['event_allow'])) {
            return redirect(route("admin.event.index"));
        }
        $data = $request->all();
        
        $Event = Event::create($data);
        
        return redirect(route("admin.event.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Event = Event::find($id);
        if (Gate::none(['event_allow', 'event_edit']) || !$Event) {
            return redirect(route("admin.event.index"));
        }

        $admiko_data['sideBarActive'] = "event";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.event.update", [$Event->id]);
        $admiko_data["fileInfo"] = Event::$admiko_file_info;
        
		$tags_all = Tags::all()->sortBy("name_tag")->pluck("name_tag", "id");
        $data = $Event;
        return view("admin.event.manage")->with(compact('admiko_data', 'data','tags_all'));
    }

    public function update(EventRequest $request,$id)
    {
        if (Gate::none(['event_allow', 'event_edit'])) {
            return redirect(route("admin.event.index"));
        }
        $data = $request->all();
        $Event = Event::find($id);
        $Event->update($data);
        
        return redirect(route("admin.event.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['event_allow'])) {
            return redirect(route("admin.event.index"));
        }
        Event::destroy($request->idDel);
        return back();
    }
    
    
    
}
