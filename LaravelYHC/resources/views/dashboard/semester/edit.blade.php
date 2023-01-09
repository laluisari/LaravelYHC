@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('semester.update', $smstr->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="semester" class="form-label">semester</label>
                <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester"  name="semester" required autofocus value="{{ old('semester', $smstr->semester) }}">
              @error('semester')
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