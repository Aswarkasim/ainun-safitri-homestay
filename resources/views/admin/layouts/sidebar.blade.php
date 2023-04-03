  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="/img/ktc_logo_line.png" alt="AdminLTE Logo" width="15px" class="" style="opacity: .8">  --}}
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{Request::is('admin/dashboard*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="/admin/order" class="nav-link {{Request::is('admin/order*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Order
              </p>
            </a>
          </li>


          @if (auth()->user()->role == 'admin')
              
          <li class="nav-item">
            <a href="/admin/room" class="nav-link {{Request::is('admin/room*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Room
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="/admin/saran" class="nav-link {{Request::is('admin/saran*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Saran
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="/admin/banner" class="nav-link {{Request::is('admin/banner*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
              </p>
            </a>
          </li>

          @endif


     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


