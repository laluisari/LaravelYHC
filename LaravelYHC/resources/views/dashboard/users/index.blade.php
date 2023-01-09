@extends('dashboard.layouts.main')
@section('container')



@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif


 @if ($users->count())

<div class="container">
  <a href="{{ route('users.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
  <div class="row">
    

      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">username</th>
            <th scope="col" class="text-center">option</th>

          </tr>
        </thead>

        <tbody>
          @foreach ($users as $user)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td class="text-center mx-2"> 
              <a href="{{ route('users.edit', $user->id) }}" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
      {{ $users->links() }}
    </center>
  </div>
</div>

@else
<p>post not found</p>
<a href="{{ route('users.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
@endif


@endsection