<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
       return view('register.index');
    }

    public function createUser(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'email|required|min:3|unique:users',
            'username' =>  'required|min:3|unique:users',
            'password' => 'required|max:225'
        ]);
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect('/login')->with(['success' => 'berhasil register']);


    }
}
