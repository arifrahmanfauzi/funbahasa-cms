<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use Gate;

class CategoryController extends Controller
{

    public function index()
    {
        if (Gate::none(['category_allow', 'category_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "category";
		$admiko_data["sideBarActiveFolder"] = "";
        
        $tableData = Category::orderByDesc("id")->get();
        return view("admin.category.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['category_allow'])) {
            return redirect(route("admin.category.index"));
        }
        $admiko_data['sideBarActive'] = "category";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.category.store");
        
        
        return view("admin.category.manage")->with(compact('admiko_data'));
    }

    public function store(CategoryRequest $request)
    {
        if (Gate::none(['category_allow'])) {
            return redirect(route("admin.category.index"));
        }
        $data = $request->all();
        
        $Category = Category::create($data);
        
        return redirect(route("admin.category.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Category = Category::find($id);
        if (Gate::none(['category_allow', 'category_edit']) || !$Category) {
            return redirect(route("admin.category.index"));
        }

        $admiko_data['sideBarActive'] = "category";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.category.update", [$Category->id]);
        
        
        $data = $Category;
        return view("admin.category.manage")->with(compact('admiko_data', 'data'));
    }

    public function update(CategoryRequest $request,$id)
    {
        if (Gate::none(['category_allow', 'category_edit'])) {
            return redirect(route("admin.category.index"));
        }
        $data = $request->all();
        $Category = Category::find($id);
        $Category->update($data);
        
        return redirect(route("admin.category.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['category_allow'])) {
            return redirect(route("admin.category.index"));
        }
        Category::destroy($request->idDel);
        return back();
    }
    
    
    
}
