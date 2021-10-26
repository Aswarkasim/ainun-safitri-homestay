<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 shadow rounded p-5">

       <h1 class="h3 my-3 fw-normal text-center"><b>Ayo Registrasi</b></h1>
        <p class="text-center text-muted">Teman teman yang lain sudah berada di kelas.</p>
        

        <form action="/register" method="POST">
          
          @csrf

           <div class="form-floating mb-1">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="name" placeholder="Mama Lengkap">
            <label for="name">Nama Lengkap</label>
             @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
          </div>

          <div class="form-floating mb-1">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
             @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
          </div>
          
          <div class="form-floating mb-1">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
             @error('password')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
          </div>

          <div class="form-floating">
            <input type="password" class="form-control @error('re_password') is-invalid @enderror" name="re_password" id="password" placeholder="Password">
            <label for="password">Konfirmasi Password</label>
             @error('re_password')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
          </div>

          <div class="d-grid gap-2 mt-2 py-2">
              <button class="btn btn-primary" type="submit">Register</button>
          </div>

      </form>

      <p class="text-center mt-2">Sudah punya akun ? <a href="/login"> Silakan Login</a></p>


    </div>
  </div>
</div>