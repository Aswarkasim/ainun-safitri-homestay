<style>
  .active-header{
    color: blue;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm rounded" aria-label="Eleventh navbar example">
  <div class="container">
    <a class="navbar-brand" href="/">
    <img src="/img/logo.png" width="150px" alt="">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample09" style="">
      
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/room">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>

        <div class="dropdown text-end">
          @auth
               <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                 {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                  <li><a class="dropdown-item" href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i> Sign out</a></li>
                </ul>
          @else
            <a href="/register" class="btn btn-primary"><i class="fa fa-user-plus"></i> Register</a>
            <a href="/login" class="btn btn-outline-primary"><i class="fa fa-sign-in"></i> Login</a>
          @endauth
         
        </div>
    </div>
  </div>
</nav>

