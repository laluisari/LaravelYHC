@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('tahun.store') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="tahun" class="form-label">tahun</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"  name="tahun"  autofocus value="{{ old('tahun') }}">
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