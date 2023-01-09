<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prodi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $prodi = Prodi::latest()->paginate(10);
        return view('dashboard.prodi.index', ['prodis' => $prodi ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3'
        ]);
        Prodi::create($validate);
        return redirect('/dashboard/prodi')->with(['success' => 'berhasil di tambah']);

    }

    public function show(Prodi $prodi)
    {
        //
    }
    public function edit(Prodi $prodi)
    {
    
        return view('dashboard.prodi.edit', ['prodi' => $prodi]);
    }

    public function update(Request $request, Prodi $prodi)
    {
        $data = $request->validate([
            'name' => 'required|min:3'
        ]);

        $prodi->update($data);
        return redirect('/dashboard/prodi')->with(['success' => 'berhasil di edit']);

    }
    
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect('/dashboard/prodi')->with(['success' => 'berhasil di hapus']);
    }
}
