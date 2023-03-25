<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AnnouncementRequest;
use Gate;

class AnnouncementController extends Controller
{

    public function index()
    {
        if (Gate::none(['announcement_allow', 'announcement_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "announcement";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data["fileInfo"] = Announcement::$admiko_file_info;
        $tableData = Announcement::orderByDesc("id")->get();
        return view("admin.announcement.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['announcement_allow'])) {
            return redirect(route("admin.announcement.index"));
        }
        $admiko_data['sideBarActive'] = "announcement";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.announcement.store");
        $admiko_data["fileInfo"] = Announcement::$admiko_file_info;
        
        return view("admin.announcement.manage")->with(compact('admiko_data'));
    }

    public function store(AnnouncementRequest $request)
    {
        if (Gate::none(['announcement_allow'])) {
            return redirect(route("admin.announcement.index"));
        }
        $data = $request->all();
        
        $Announcement = Announcement::create($data);
        
        return redirect(route("admin.announcement.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Announcement = Announcement::find($id);
        if (Gate::none(['announcement_allow', 'announcement_edit']) || !$Announcement) {
            return redirect(route("admin.announcement.index"));
        }

        $admiko_data['sideBarActive'] = "announcement";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.announcement.update", [$Announcement->id]);
        $admiko_data["fileInfo"] = Announcement::$admiko_file_info;
        
        $data = $Announcement;
        return view("admin.announcement.manage")->with(compact('admiko_data', 'data'));
    }

    public function update(AnnouncementRequest $request,$id)
    {
        if (Gate::none(['announcement_allow', 'announcement_edit'])) {
            return redirect(route("admin.announcement.index"));
        }
        $data = $request->all();
        $Announcement = Announcement::find($id);
        $Announcement->update($data);
        
        return redirect(route("admin.announcement.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['announcement_allow'])) {
            return redirect(route("admin.announcement.index"));
        }
        Announcement::destroy($request->idDel);
        return back();
    }
    
    
    
}
