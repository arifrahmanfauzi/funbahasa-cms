<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Tags;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TagsRequest;
use Gate;

class TagsController extends Controller
{

    public function index()
    {
        if (Gate::none(['tags_allow', 'tags_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "tags";
		$admiko_data["sideBarActiveFolder"] = "";
        
        $tableData = Tags::orderByDesc("id")->get();
        return view("admin.tags.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['tags_allow'])) {
            return redirect(route("admin.tags.index"));
        }
        $admiko_data['sideBarActive'] = "tags";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.tags.store");
        
        
        return view("admin.tags.manage")->with(compact('admiko_data'));
    }

    public function store(TagsRequest $request)
    {
        if (Gate::none(['tags_allow'])) {
            return redirect(route("admin.tags.index"));
        }
        $data = $request->all();
        
        $Tags = Tags::create($data);
        
        return redirect(route("admin.tags.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Tags = Tags::find($id);
        if (Gate::none(['tags_allow', 'tags_edit']) || !$Tags) {
            return redirect(route("admin.tags.index"));
        }

        $admiko_data['sideBarActive'] = "tags";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.tags.update", [$Tags->id]);
        
        
        $data = $Tags;
        return view("admin.tags.manage")->with(compact('admiko_data', 'data'));
    }

    public function update(TagsRequest $request,$id)
    {
        if (Gate::none(['tags_allow', 'tags_edit'])) {
            return redirect(route("admin.tags.index"));
        }
        $data = $request->all();
        $Tags = Tags::find($id);
        $Tags->update($data);
        
        return redirect(route("admin.tags.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['tags_allow'])) {
            return redirect(route("admin.tags.index"));
        }
        Tags::destroy($request->idDel);
        return back();
    }
    
    
    
}
