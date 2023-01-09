@extends('dashboard.layouts.main')
@section('container')

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif


@if ($semesters->count())

<div class="container">
  <a href="{{ route('semester.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
  <div class="row">
    
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">semester</th>
            <th scope="col">keterangan</th>
            <th scope="col" class="text-center">option</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($semesters as $smstr)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $smstr->semester }} </td>
           @if ($smstr->semester % 2 == 0 )
           <td>genap</td>
           @else
               <td>ganjil</td>
           @endif
            <td class="text-center mx-2"> 
              <a href="{{ route('semester.edit', $smstr->id) }}" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="{{ route('semester.destroy', $smstr->id) }}" method="POST" class="d-inline">
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
      {{ $semesters->links() }}
    </center>

  </div>
</div>

@else
<p class="mt-3">post not found</p>
<a href="{{ route('semester.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
@endif


@endsection