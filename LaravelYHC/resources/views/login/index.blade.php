@extends('layouts.main')
@section('container')
<link href="signin.css" rel="stylesheet">


<div class="row justify-content-center my-3">
      @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
     
      <div class="col-md-4">
        
        <main class="form-signin w-100 m-auto">
          <form action="/login" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            
            <div class="form-floating my-1">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" autofocus value="{{ old('email') }}">
              <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-1">
              <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
              <label for="floatingPassword">Password</label>
            </div>
            
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 |
            don't have an account ?<a href="/register">Register here</a></p>
          </form>
        </main>
      </div>

</div>

@endsection    

