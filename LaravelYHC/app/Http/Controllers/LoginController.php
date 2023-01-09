<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'berhaisl login');
        }

        return back()->with(['loginError' => 'email dan password salah']);
    }

    public function logout(Request $request){
        Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/login');
    }

}
