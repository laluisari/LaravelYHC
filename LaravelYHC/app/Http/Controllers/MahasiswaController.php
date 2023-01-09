<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Prodi;
use App\Models\Tahun;
use App\Models\Semester;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        if(request('prodi')){
            Prodi::firstWhere('name', request('prodi'));
        }
        if(request('semester')){
            Semester::firstWhere('semester', request('semester'));
        }
        if(request('kelas')){
            Kelas::firstWhere('name', request('kelas'));
        }
        if(request('tahun')){
            Tahun::firstWhere('tahun', request('tahun'));
        }

        return view('dashboard/mahasiswa/index', [
            'mahasiswa' => Mahasiswa::latest()->Filter(request(['search', 'prodi', 'semester', 'kelas', 'tahun']))->paginate(9)->withQueryString()
        ]);
        // $mahasiswa = Mahasiswa::latest()->paginate(10);
        // return view('dashboard.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    
    public function create()
    {
        return view('dashboard.mahasiswa.create', [
            'prodi' => Prodi::all(),
            'semester' => Semester::all(),
            'kelas' => Kelas::all(),
            'tahun' => Tahun::all()
        ]);
    }

   
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|min:3',
            'nim' => 'required|min:5|unique:mahasiswas',
            'prodi_id' => 'required',
            'semester_id' => 'required',
            'kelas_id' => 'required',
            'tahun_id' => 'required'
        ]);

        Mahasiswa::create($validate);
        return redirect('/dashboard/mahasiswa')->with(['success' => 'berhasil di tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.edit', [
            'mahasiswa' => $mahasiswa,
            'prodi' => Prodi::all(),
            'semester' => Semester::all(),
            'kelas' => Kelas::all(),
            'tahun' => Tahun::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $data = [
            'nama' => 'required|min:3',
            'prodi_id' => 'required',
            'semester_id' => 'required',
            'kelas_id' => 'required',
            'tahun_id' => 'required'
        ];
        if ($request->nim == $mahasiswa->nim){
            $data['nim'] =  'required|min:3' ;
        }
        if ($request->nim != $mahasiswa->nim){
            $data['nim'] =  'required|min:3|unique:mahasiswas';
        }
        $validateData = $request->validate($data);

        $mahasiswa->update($validateData);

        return redirect('/dashboard/mahasiswa')->with(['success' => 'berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/dashboard/mahasiswa')->with(['success' => 'berhasil di hapus']);
    }
}
