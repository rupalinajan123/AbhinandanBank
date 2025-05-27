<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="{{ URL::to('/dashboard')}}" class="brand-link">
      <img src="{{url('assets/admin/images/logo.png')}}" alt="Abhinandan Bank" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Abhinandan Bank</span><!---Abhinandan Urban Co. Op. Bank Ltd.-->
      </a>
      <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               <img src="{{asset('assets/admin/images/adminuser/user.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @php
                $user = auth()->user();
                @endphp
               <a href="#" class="d-block">@php echo $user->name; @endphp</a>
            </div>
         </div>
         <!--<div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
               <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
               <div class="input-group-append">
                  <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                  </button>
               </div>
            </div>
         </div>-->
         @php
         $action = request()->route()->getAction();
         $controller = class_basename($action['controller']);
         $controller = explode('@', $controller);
         $controller_name = $controller[0];
         $method_name = $controller[1];
         @endphp
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                  <a href="{{ URL::to('/dashboard')}}" class="nav-link {{ (isset($method_name) && $method_name=='dashboard')? 'active' : ''; }}">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                        Dashboard
                     </p>
                  </a>
               </li><!--menu-open-->
               <li class="nav-item {{ (isset($controller_name) && ($controller_name=='PageController' or $controller_name=='ContactUsController' or $controller_name=='ComplaintController'))? 'menu-open' : ''; }} ">
                  <a href="#" class="nav-link ">
                     <i class="nav-icon fas fa-home "></i><!---fas fa-tachometer-alt-->
                     <p>
                        Home
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{ URL::to('/pages')}}" class="nav-link {{ ($controller_name=='PageController')? 'active' : ''; }} ">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>Front Pages</p>
                        </a>
                     </li>

                     <li class="nav-item">
                        <a href="{{ URL::to('/contact-us')}}" class="nav-link {{ ($controller_name=='ContactUsController')? 'active' : ''; }} ">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>Contact Us</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ URL::to('/complaint')}}" class="nav-link {{ ($controller_name=='ComplaintController')? 'active' : ''; }} ">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>Complaints</p>
                        </a>
                     </li>
                       <li class="nav-item">
                        <a href="{{ URL::to('/advertisement')}}" class="nav-link {{ ($controller_name=='AdvertisementController')? 'active' : ''; }} ">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>Advertisement</p>
                        </a>
                     </li>
                     <!--<li class="nav-item">
                        <a href="{{ URL::to('/blog')}}" class="nav-link {{ ($controller_name=='BlogController')? 'active' : ''; }}">
                           <i class="nav-icon fas fa-question-circle"></i>
                           <p>Blogs</p>
                        </a>
                     </li>-->
                  </ul>
               </li>
               <!--<li class="nav-item">
                  <a href="{{ URL::to('/blog')}}" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                        My Blogs
                        <span class="right badge badge-danger">New</span>
                     </p>
                  </a>
               </li>-->
            </ul>
         </nav>
      </div>
   </aside>