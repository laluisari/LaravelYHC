@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row">
        @foreach($prodi as $data)
        <div class="col-md-4 my-5">

            <a href="/mahasiswa?prodi={{ $data->name }}">
            <div class="card bg-dark text-white">   
                <img src="https://source.unsplash.com/500x400?{{ $data->name }}" alt="{{ $data->name }}" class="card-img">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $data->name }}</h5>
                </div>
            </div>
            </a>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
