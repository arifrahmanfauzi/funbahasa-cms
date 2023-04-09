<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Repat\LaravelRules\DoesntContainEmojis;

class LoginController extends Controller
{
   public function index(){
       return view('login');
   }
   public function login(Request $request){
       if (Auth::attempt($request->only(['email','password']))) {
           $request->session()->regenerate();

           return redirect()->intended('unggah-karya');
       }

       return back()->withErrors([
           'email' => 'The provided credentials do not match our records.',
       ])->onlyInput('email');

   }
   public function logout(Request $request){
       Auth::logout();
       $request->session()->invalidate();

       $request->session()->regenerateToken();
       return redirect('/');
   }
}
