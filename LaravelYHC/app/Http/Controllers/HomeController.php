<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
       
        if(request('prodi')){
            Prodi::firstWhere('name', request('prodi'));
        }
        return view('mahasiswa/index', [
            'mahasiswa' => Mahasiswa::latest()->Filter(request(['search', 'prodi']))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Mahasiswa $mahasiswa){
        return view('mahasiswa.show', [ "mahasiswa" => $mahasiswa]);
    }

}
