<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun = Tahun::latest()->paginate(10);
        return view('dashboard.tahun.index', ['tahun' => $tahun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tahun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(['tahun' => 'required|unique:tahuns']);
        Tahun::create($data);
        return redirect('/dashboard/tahun')->with(['success' => 'berhasil di tambah']);
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
    public function edit(Tahun $tahun)
    {
        return view('dashboard.tahun.edit', ['tahun' => $tahun]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tahun $tahun)
    {
        if ($request->tahun !== $tahun->tahun) {
            $data  = $request->validate([
                'tahun' => 'required|unique:tahuns'
            ]);
            $tahun->update($data);
            return redirect('/dashboard/tahun')->with(['success' => 'berhasil di edit']);
         }else {
            $data  = $request->validate([
                'tahun' => 'required'
            ]);
            $tahun->update($data);
            return redirect('/dashboard/tahun')->with(['success' => 'berhasil di edit']);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tahun $tahun)
    {
        $tahun->delete();
        return redirect('/dashboard/tahun')->with(['success' => 'berhasil di hapus']);
    }
}
