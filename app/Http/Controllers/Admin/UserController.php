<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequest;
use Gate;

class UserController extends Controller
{

    public function index()
    {
        if (Gate::none(['user_allow', 'user_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "user";
		$admiko_data["sideBarActiveFolder"] = "";
        
        $tableData = User::orderByDesc("id")->get();
        return view("admin.user.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['user_allow'])) {
            return redirect(route("admin.user.index"));
        }
        $admiko_data['sideBarActive'] = "user";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.user.store");
        
        
        return view("admin.user.manage")->with(compact('admiko_data'));
    }

    public function store(UserRequest $request)
    {
        if (Gate::none(['user_allow'])) {
            return redirect(route("admin.user.index"));
        }
        $data = $request->all();
        
        $User = User::create($data);
        
        return redirect(route("admin.user.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $User = User::find($id);
        if (Gate::none(['user_allow', 'user_edit']) || !$User) {
            return redirect(route("admin.user.index"));
        }

        $admiko_data['sideBarActive'] = "user";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.user.update", [$User->id]);
        
        
        $data = $User;
        return view("admin.user.manage")->with(compact('admiko_data', 'data'));
    }

    public function update(UserRequest $request,$id)
    {
        if (Gate::none(['user_allow', 'user_edit'])) {
            return redirect(route("admin.user.index"));
        }
        $data = $request->all();
        $User = User::find($id);
        $User->update($data);
        
        return redirect(route("admin.user.index"));
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['user_allow'])) {
            return redirect(route("admin.user.index"));
        }
        User::destroy($request->idDel);
        return back();
    }
    
    
    
}
