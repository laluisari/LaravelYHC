@extends('layouts.main')
@section('container')

<h3 class="text-center mt-2">daftar mahasiswa</h3>

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif

  <div class="row justify-content-center  my-3">
    <div class="col-md-6">

      <form action="/mahasiswa" class="d-flex" role="search">

        @if (request('prodi')) 
        <input type="hidden" name="prodi" value="{{ request('prodi') }}">           
        @endif
        @if (request('kelas')) 
        <input type="hidden" name="kelas" value="{{ request('kelas') }}">           
        @endif
        @if (request('semester')) 
        <input type="hidden" name="semester" value="{{ request('semester') }}">           
        @endif
        @if (request('tahun')) 
        <input type="hidden" name="tahun" value="{{ request('tahun') }}">           
        @endif
        
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
      
    </div>
  </div>
   

 @if ($mahasiswa->count())

<div class="container">
 
  <div class="row">
    
    
      
      @foreach ($mahasiswa as $data)

       {{-- @php
           @dd($mahasiswa);
       @endphp --}}

      <div class="col-md-4 my-3">
        <div class="card">
            <div class="card-body">          
              <img src="https://source.unsplash.com/800x400?student" alt="" class="img-fluid">
              <h5 class="card-title">{{ $data->nama }}</h5>
              <h3 class="card-text">{{ $data->nim }}</h3>
              <small>
                <p class="card-text my-2">
                  <a href="/mahasiswa?prodi={{ $data->prodi->name }}">{{ $data->prodi->name }}</a>
                </p>
              </small>
              <a href="/mahasiswa/{{ $data->id }}"><button class="btn btn-primary">More Detail ..</button></a>
              <p class="my-3"><small>{{ $data->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
      </div>

    @endforeach

    <center>  
      {{ $mahasiswa->links() }}
    </center>
  </div>
</div>

@else
<p>post not found</p>
@endif



@endsection