@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('tahun.update', $tahun->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tahun" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="tahun"  name="tahun" required autofocus value="{{ old('name', $tahun->tahun) }}">
              @error('tahun')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
        </form>
        
    </div>
</div>

@endsection