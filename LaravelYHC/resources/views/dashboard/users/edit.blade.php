@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('users.update', $users->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  name="name" required autofocus value="{{ old('name', $users->name) }}">
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          
              <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $users->email) }}" name="email"  required >
                
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username', $users->username) }}" name="username"  required >
                
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password', $users->password) }}" name="password"  required >
                
                @error('password')
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