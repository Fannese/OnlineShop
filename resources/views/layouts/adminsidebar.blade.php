
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('Geschirr-index') }}" class="brand-link">
      <img src="{{ asset('/assets/images/happy-shop.webp') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/photo.jpg') }}" class="img-circle elevation-2" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block">Fanny</a>
        </div>
      </div>

      <!-- Sidebar Menu -->

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
