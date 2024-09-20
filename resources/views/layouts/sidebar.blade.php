  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('images/Synergie-Logoface-small-icn.png') }}" alt="Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
     
      <span class="brand-text font-weight-light">Laraven</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
        <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link {{ request()->is('products*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-cubes"></i>
                        <p>Products</p>
                    </a>
                </li>
     
        <!-- <li class="nav-item">
            <a href="#" class="nav-link
             {{ request()->is('specialities') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Specialities
              </p>
            </a>
        </li> -->

        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
            Roles and Right
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item ">
            <a href="pages/examples/invoice.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Role</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rights</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Module</p>
            </a>
            </li>
        </ul>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>