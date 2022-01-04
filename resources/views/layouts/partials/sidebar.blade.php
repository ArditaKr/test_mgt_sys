<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <!-- <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{Auth::user()->name}}</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @if(Auth::user()->type == 'admin')
          <li class="nav-item">
            <a href="{{route('admin.teams.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.teams.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Team Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.projects.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Projects Management
              </p>
            </a>
          </li>
         @endif 

         @if(Auth::user()->type == 'team_leader') 
         <li class="nav-item">
            <a href="{{route('team_leader.projects.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Project Management
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="{{route('team_leader.kanban')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Project Kanban
              </p>
            </a>
          </li>
         @endif 
         <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>