<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Semester;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smstr = Semester::latest()->paginate(10);
        return view('dashboard.semester.index', ['semesters' => $smstr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(['semester' => 'required|unique:semesters']);
        Semester::create($data);
        return redirect('/dashboard/semester')->with(['success' => 'berhasil di tambah']);
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
    public function edit(Semester $semester)
    {
      
        return view('dashboard.semester.edit', ['smstr' => $semester]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semester $semester)
    {
       
     if ($request->semester !== $semester->semester) {
        $data  = $request->validate([
            'semester' => 'required|unique:semesters'
        ]);
        $semester->update($data);
        return redirect('/dashboard/semester')->with(['success' => 'berhasil di edit']);
     }else {
        $data  = $request->validate([
            'semester' => 'required'
        ]);
        $semester->update($data);
        return redirect('/dashboard/semester')->with(['success' => 'berhasil di edit']);
     }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        $semester->delete();
        return redirect('/dashboard/semester')->with(['success' => 'berhasil di hapus']);
    }
}
