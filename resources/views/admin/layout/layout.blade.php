@include('admin.layout.header')
<body class="skin-green sidebar-mini">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-user"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  @php
                  $user = auth()->user();
                  @endphp
                  <a href="#" class="dropdown-item">
                     <div class="media">
                        <img src="{{ URL('/assets/admin/images/adminuser/user.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              @php echo $user->name; @endphp
                           </h3>
                           <p class="text-sm">Admin</p>
                        </div>
                     </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ URL::to('/change-password')}}" class="dropdown-item text-sm">
                     <i class="fas fa-lock mr-2"></i>Change Password
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ URL::to('/logout')}}" class="dropdown-item text-sm">
                     <i class="fas fa-sign-out-alt mr-2"></i>Logout
                  </a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>

         </ul>
      </nav>
      @include('admin.layout.sidebar')
      <div class="content-wrapper">
         @yield('content')
      </div>
      @include('admin.layout.footer')