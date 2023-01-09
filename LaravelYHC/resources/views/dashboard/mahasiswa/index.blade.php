@extends('dashboard.layouts.main')
@section('container')

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif


@if ($mahasiswa->count())

<div class="container">
  <a href="{{ route('mahasiswa.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
  <div class="row">
    
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">nama mahasiswa</th>
            <th scope="col">nim </th>
            <th scope="col">prodi</th>
            <th scope="col">semester</th>
            <th scope="col">kelas</th>
            <th scope="col">tahun</th>
            <th scope="col" class="text-center">option</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($mahasiswa as $mhs)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $mhs->nama }} </td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->prodi->name }}</td>
            <td>{{ $mhs->semester->semester }}</td>
            <td>{{ $mhs->kelas->name }}</td>
            <td>{{ $mhs->tahun->tahun }}</td>
            <td class="text-center mx-2"> 
              <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
              <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="badge bg-success"><span data-feather="eye" class="align-text-bottom"></span></a>
              <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit"  class="badge bg-danger border-0" ><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
      
          @endforeach
        </tbody>
      </table>

    <center class="my-3">  
      {{ $mahasiswa->links() }}
    </center>

  </div>
</div>

@else
<p class="mt-3">post not found</p>
<a href="{{ route('mahasiswa.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
@endif


@endsection