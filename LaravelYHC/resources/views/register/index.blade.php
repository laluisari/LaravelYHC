@extends('layouts.main')
@section('container')

    <link href="signin.css" rel="stylesheet">
    </head>

    <div class="row justify-content-center my-3">

      <div class="col-md-4">
        
        <main class="form-signin w-100 m-auto">
          <form action="/register" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Form Register</h1>
            
            <div class="form-floating my-2">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="name" autofocus value="{{ old('name') }}">
              <label for="floatingInput">Name </label>

              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating mb-2">
              <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
              <label for="floatingInput">Email address</label>

              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating mb-2">
              <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="floatingInput" placeholder="Username" value="{{ old('username') }}" >
              <label for="floatingInput">username </label>

              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating mb-2">
              <input type="password" class="form-control  @error('name') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
              <label for="floatingPassword">Password</label>

              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 |
            you have an account ?<a href="/register"> login here</a></p>
          </form>
        </main>
      </div>
</div>

@endsection    

