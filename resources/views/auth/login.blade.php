<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 shadow rounded p-5 ">

       <h1 class="h3 my-3 fw-normal text-center"><b>Silakan Login</b></h1>
        <p class="text-center text-muted">Sesuatu sedang menunggumu.</p>

         @if (session()->has('success'))      
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        
       @if (session()->has('loginError'))      
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('loginError')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
       

 <form action="/login" method="POST">
  @csrf
      <div class="form-floating mb-1">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" placeholder="name@example.com">
        <label for="email">Email</label>
        @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>

      <div class="d-grid gap-2 mt-2 py-2">
          <button class="btn btn-primary" type="submit">Login</button>
      </div>

 </form>

      <p class="text-center mt-2">Belum punya akun ? <a href="/register"> Silakan Register</a></p>


    </div>
  </div>
</div>