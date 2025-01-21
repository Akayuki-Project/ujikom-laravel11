@php
  $menus = [
    (object) [
      "title" => "dashboard",
      "path" => "/",
      "icon" => "fas fa-th",
    ],
    (object) [
      "title" => "Product",
      "path" => "products",
      "icon" => "fas fa-th",
    ],
];

@endphp

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        
      </div>
      <div class="info">
        <a href="#" class="d-block">Adit Kurniawan</a>
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
        
             @foreach ($menus as $menu)
             <li class="nav-item">
               <a href="{{ $menu->path[0] !== '/' ? '/' .$menu->path : $menu->path }}"
                 class="nav-link {{ request()->path === $menu->path ? 'active' : ''}}">
                 <i class="nav-icon {{ $menu->icon }}"></i>
                 <p>
                   {{ $menu -> title }}
                 </p>
               </a>
             </li>
             @endforeach

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>