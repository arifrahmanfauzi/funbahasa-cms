<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Karya;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\KaryaRequest;
use Gate;
use App\Models\Admin\Category;
use App\Models\Admin\Tags;

class KaryaController extends Controller
{

    public function index()
    {
        if (Gate::none(['karya_allow', 'karya_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "karya";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data["fileInfo"] = Karya::$admiko_file_info;
        $tableData = Karya::orderByDesc("id")->get();
        return view("admin.karya.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['karya_allow'])) {
            return redirect(route("admin.karya.index"));
        }
        $admiko_data['sideBarActive'] = "karya";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.karya.store");
        $admiko_data["fileInfo"] = Karya::$admiko_file_info;
        
		$category_all = Category::all()->sortBy("category_name")->pluck("category_name", "id");
		$tags_all = Tags::all()->sortBy("name_tag")->pluck("name_tag", "id");
        return view("admin.karya.manage")->with(compact('admiko_data','category_all','tags_all'));
    }

    public function store(KaryaRequest $request)
    {
        if (Gate::none(['karya_allow'])) {
            return redirect(route("admin.karya.index"));
        }
        $data = $request->all();
        
        $Karya = Karya::create($data);
        
        return redirect(route("admin.karya.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Karya = Karya::find($id);
        if (Gate::none(['karya_allow', 'karya_edit']) || !$Karya) {
            return redirect(route("admin.karya.index"));
        }

        $admiko_data['sideBarActive'] = "karya";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.karya.update", [$Karya->id]);
        $admiko_data["fileInfo"] = Karya::$admiko_file_info;
        
		$category_all = Category::all()->sortBy("category_name")->pluck("category_name", "id");
		$tags_all = Tags::all()->sortBy("name_tag")->pluck("name_tag", "id");
        $data = $Karya;
        return view("admin.karya.manage")->with(compact('admiko_data', 'data','category_all','tags_all'));
    }

    public function update(KaryaRequest $request,$id)
    {
        if (Gate::none(['karya_allow', 'karya_edit'])) {
            return redirect(route("admin.karya.index"));
        }
        $data = $request->all();
        $Karya = Karya::find($id);
        $Karya->update($data);
        
        return redirect(route("admin.karya.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['karya_allow'])) {
            return redirect(route("admin.karya.index"));
        }
        Karya::destroy($request->idDel);
        return back();
    }
    
    
    
}
