<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::latest()->paginate(10);
        return view('dashboard.kelas.index', ['kelases' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|unique:kelas'
        ]);
        Kelas::create($data);
        return redirect('/dashboard/kelas')->with(['success' => 'berhasil di tambah']);
        
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
    public function edit(Kelas $kela)
    {
        return view('dashboard.kelas.edit', ['kela' => $kela]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kela)
    {
        if ($request->name !== $kela->name) {
            $data  = $request->validate([
                'name' => 'required|unique:kelas'
            ]);
            $kela->update($data);
            return redirect('/dashboard/kelas')->with(['success' => 'berhasil di edit']);
         }else {
            $data  = $request->validate([
                'name' => 'required'
            ]);
            $kela->update($data);
            return redirect('/dashboard/kelas')->with(['success' => 'berhasil di edit']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        $kela->delete();
        return redirect('/dashboard/kelas')->with(['success' => 'berhasil di hapus']);
    }
}
