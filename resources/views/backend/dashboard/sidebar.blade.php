<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ToDoList-App </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

    {{-- {{ dd($category) }} --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          <li class="nav-item">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @foreach ($menu as $men)
          <li class="nav-item">
            <a href="/{{ $men->name_menu }}" class="nav-link ">
              <i class="{{ $men->icon }}"></i>
              <p>
                {{ $men->name_menu }}
              </p>
            </a>
          </li>
          @endforeach
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>