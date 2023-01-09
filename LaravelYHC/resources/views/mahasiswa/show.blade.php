@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8 my-3">
          
          <div class="card mt-5" >
             
              <img src="https://source.unsplash.com/800x400?student" alt="" class="img-fluid">
             
              <div class="card-body">
                  <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                  <h5 class="card-text">{{ $mahasiswa->nim }}</h5>
                  <small>
                    <p class="card-text my-2">
                      <a href="/mahasiswa?prodi={{ $mahasiswa->prodi->name }}">{{ $mahasiswa->prodi->name }}</a>
                    </p></small>
                    @if ($mahasiswa->semester->semester % 2 == 0)
                    <p class="card-text">Semester : {{ $mahasiswa->semester->semester }} | Genap</p>
                    @else
                    <p class="card-text">Semester : {{ $mahasiswa->semester->semester }} | Ganjil</p>
                    @endif
                  <p class="card-text">{{ $mahasiswa->kelas->name }}</p>
                  <p class="card-text">{{ $mahasiswa->tahun->tahun }}</p>
                </div>
            </div>      
        </div>
        <div class="col-md-8 my-3">
            <a href="mahasiswa/" class="btn btn-primary">Back to all Post</a> 
        </div>
    </div>
</div>

@endsection