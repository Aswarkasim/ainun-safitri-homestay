<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/admin/dashboard"><img src="/img/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Menu</li>

                <li class="sidebar-item {{Request::is('admin/dashboard*') ? 'active' : ''}}">
                    <a href="/admin/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                
                <li class="sidebar-item {{Request::is('admin/order*') ? 'active' : ''}}">
                    <a href="/admin/order" class='sidebar-link'>
                        <i class="fa fa-exchange"></i>
                        <span>Order</span>
                    </a>
                </li>

                <li class="sidebar-item {{Request::is('admin/room*') ? 'active' : ''}}">
                    <a href="/admin/room" class='sidebar-link'>
                        <i class="fa fa-building"></i>
                        <span>Room</span>
                    </a>
                </li>

                 <li class="sidebar-item {{Request::is('admin/saran*') ? 'active' : ''}}">
                    <a href="/admin/saran" class='sidebar-link'>
                        <i class="fa fa-envelope"></i>
                        <span>Saran</span>
                    </a>
                </li>

                 <li class="sidebar-item {{Request::is('admin/banner*') ? 'active' : ''}}">
                    <a href="/admin/banner" class='sidebar-link'>
                        <i class="fa fa-image"></i>
                        <span>Banner</span>
                    </a>
                </li>

                  <li class="sidebar-item">
                    <a href="/logout" class='sidebar-link'>
                        <i class="fa fa-building"></i>
                        <span>Logout</span>
                    </a>
                </li>

              
                

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<div id="main">