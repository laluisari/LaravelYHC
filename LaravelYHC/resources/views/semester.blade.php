@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row">
        @foreach($semester as $data)
        <div class="col-md-4 my-5">

            <a href="/mahasiswa?mahasiswa={{ $data->semester }}">
            <div class="card bg-dark text-white">   
                <img src="https://source.unsplash.com/500x400?{{ $data->semester }}" alt="{{ $data->semester }}" class="card-img">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $data->semester }}</h5>
                </div>
            </div>
            </a>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
