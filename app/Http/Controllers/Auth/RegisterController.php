<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register(RegisterRequest $request){
        $request->dd();
    }
}
