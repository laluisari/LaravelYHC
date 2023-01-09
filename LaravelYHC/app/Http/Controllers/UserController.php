<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('dashboard.users.index', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'email|required|min:3|unique:users',
            'username' =>  'required|min:3|unique:users',
            'password' => 'required|max:225'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect('/dashboard/users')->with(['success' => 'berhasil di tambah']);


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', ['users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $data = [
            'name' => 'required|min:3',
            'password' => 'required|max:225'
        ];
        if ($request->email !== $user->email){
            $data['email'] =  'email|required|min:3|unique:users' ;
        }
        if ($request->username !== $user->username){
            $data['username'] = 'required|min:3|unique:users';
        }

        $validateData = $request->validate($data);

        $validateData['password'] = bcrypt($validateData['password']);
        
        $user->update($validateData);
        
        return redirect('/dashboard/users')->with(['success' => 'berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/dashboard/users')->with(['success' => 'berhasil di hapus']);

    }
}
