@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Back to all Post</a> |
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span>Edit</a> |
            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><span data-feather="trash" class="align-text-bottom">Delete</span></button>

            </form>
        </div>
        
        <div class="col-md-8 my-3">
            @php
                // @dd($mahasiswa->)
            @endphp

          <div class="card" >
                  
                    <img src="https://source.unsplash.com/800x400?student" alt="" class="img-fluid">

                    <div class="card-body">
                        <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                        <p class="card-text">NIM : {{ $mahasiswa->nim }} </p>
                        <p class="card-text">Prodi : {{ $mahasiswa->prodi->name }} </p>
                        <p class="card-text">Semester : {{ $mahasiswa->semester->semester }} </p>
                        <p class="card-text">Kelas : {{ $mahasiswa->kelas->name }}</p>
                        <p class="card-text">Tahun angkatan : {{ $mahasiswa->tahun->tahun }}</p>
                      </div>
                    </div>      
        </div>
    </div>
</div>

@endsection