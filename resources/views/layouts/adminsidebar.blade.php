
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
<hr>
                <a href="{{ route('Geschirr-index') }}" >

                  <p class="bg-primary"> <i class="fas fa-adjust nav-icon"></i> Haushalt Artikel</p>
                </a>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                <a href="#" class="nav-link active">

                  <p>
                   admin
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
          <li class="nav-item">

            <a href="{{ route('user') }}" class="nav-link">
                <i class="fas fa-user-circle"></i>
                <p> Userlist </p>
            </a>
          </li>

              <li class="nav-item">
                <a href="{{ route('Bestellungen.index') }}" class="nav-link">
                    <i class="fas fa-clipboard-list"></i>
                    <p> Orderlist </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">

                </a>
              </li>

               </li>

        </ul>
      </nav>


 <!--verwaltung-->

      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>
