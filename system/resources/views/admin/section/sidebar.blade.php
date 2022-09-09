 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Treasure Area</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                @if(Auth::check())
                 <a href="#" class="d-block">
                    {{request()->user()->nama}}
                @else
                    Silahkan Login
                @endif
                 </a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                 role="menu"data-accordion="false">
                 <li class="nav-item">
                     <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-home"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ url('admin/artikel') }}" class="nav-link {{ request()->is('admin/artikel') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Artikel
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ url('admin/komen') }}" class="nav-link {{ request()->is('admin/komen') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Comment
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ url('admin/user') }}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             User
                         </p>
                     </a>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Master Data
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href=" {{ url('pelanggan') }} "
                                 class="nav-link {{ request()->is('pelanggan') ? 'active' : '' }} ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pelanggan</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href=" {{ url('supplier') }}  "
                                 class="nav-link {{ request()->is('supplier') ? 'active' : '' }} ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Supplier</p>
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
