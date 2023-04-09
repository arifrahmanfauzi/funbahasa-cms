<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register(RegisterRequest $request){

        $validated = $request->validated();
        $users = User::create([
            'name' => $validated['first-name'].' '. $validated['last-name'],
            'email' => $validated['email'],
            'password' => \Hash::make($validated['password'])
        ]);
        return redirect('/register')->with('success','Anda berhasil mendaftar');
    }
}
