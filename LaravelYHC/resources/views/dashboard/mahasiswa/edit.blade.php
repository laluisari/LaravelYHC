@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama"  autofocus value="{{ old('nama', $mahasiswa->nama) }}">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"  name="nim"  autofocus value="{{ old('nim', $mahasiswa->nim) }}">
              @error('nim')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

          

            <label  class="form-label">Prodi</label>
              <select class="form-select mb-3" aria-label="Default select example" name="prodi_id">
                @foreach ($prodi as $data)
                @if(old('prodi', $mahasiswa->prodi_id) == $data->id)
                <option value={{ $data->id }} selected>{{ $data->name }}</option>
                @else
                <option value={{ $data->id }} >{{ $data->name }}</option>
                @endif
                @endforeach
              </select>

              <label  class="form-label">semester</label>
              <select class="form-select mb-3" aria-label="Default select example" name="semester_id">
                @foreach ($semester as $data)
                @if (old('semester', $mahasiswa->semester_id) == $data->id)
                    <option value={{ $data->id }} selected>{{ $data->semester }}</option>
                @else
                    <option value={{ $data->id }}>{{ $data->semester }}</option>
                @endif
               
                @endforeach
              </select>
              <label  class="form-label">kelas</label>
              <select class="form-select mb-3" aria-label="Default select example" name="kelas_id">
                @foreach ($kelas as $data)
                @if (old('kelas', $mahasiswa->kelas_id) == $data->id)
                <option value={{ $data->id }} selected>{{ $data->name }}</option>
                @else
                <option value={{ $data->id }}>{{ $data->name }}</option>
                @endif
                @endforeach
              </select>
              <label  class="form-label">tahun</label>
              <select class="form-select mb-3" aria-label="Default select example" name="tahun_id">
                @foreach ($tahun as $data)
                @if (old('tahun', $mahasiswa->tahun_id) == $data->id)
                <option value={{ $data->id }} selected>{{ $data->tahun }}</option>
                @else
                <option value={{ $data->id }}>{{ $data->tahun }}</option>
                @endif
                @endforeach
              </select>

            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
        </form>
        
    </div>
</div>

@endsection