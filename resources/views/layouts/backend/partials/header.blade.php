       <div class="app-header header-shadow">
           <div class="app-header__logo">
               <div class="logo-src"></div>
               <div class="header__pane ms-auto">
                   <div>
                       <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                           <span class="hamburger-box">
                               <span class="hamburger-inner"></span>
                           </span>
                       </button>
                   </div>
               </div>
           </div>
           <div class="app-header__mobile-menu">
               <div>
                   <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                       <span class="hamburger-box">
                           <span class="hamburger-inner"></span>
                       </span>
                   </button>
               </div>
           </div>
           <div class="app-header__menu">
               <span>
                   <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                       <span class="btn-icon-wrapper">
                           <i class="fa fa-ellipsis-v fa-w-6"></i>
                       </span>
                   </button>
               </span>
           </div>
           <div class="app-header__content">
               <div class="app-header-left">
                   <ul class="header-menu nav">
                       <li class="dropdown nav-item">
                           <a href="javascript:void(0);" class="nav-link">
                               <i class="nav-link-icon fa fa-cog"></i>
                               Visit Site
                           </a>
                       </li>
                   </ul>
               </div>
               <div class="app-header-right">
                   <div class="header-btn-lg pe-0">
                       <div class="widget-content p-0">
                           <div class="widget-content-wrapper">
                               <div class="widget-content-left">
                                   <div class="btn-group">
                                       <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                           <img width="42" class="rounded-circle" src="/assets/images/avatars/1.jpg" alt="">
                                           <i class="fa fa-angle-down ms-2 opacity-8"></i>
                                       </a>
                                       <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                           <a href="" tabindex="0" class="dropdown-item">Profile</a>
                                           <a href="" tabindex="0" class="dropdown-item">Change Password</a>
                                           <a href="" tabindex="0" class="dropdown-item">Settings</a>
                                           <div tabindex="-1" class="dropdown-divider"></div>
                                           <button type="button" tabindex="0" class="dropdown-item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</button>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                            </form>
                                       </div>
                                   </div>
                               </div>
                               <div class="widget-content-left  ms-3 header-user-info">
                                   <div class="widget-heading">
                                       {{ auth()->user()->name }}
                                   </div>
                                   <div class="widget-subheading">
                                       {{ auth()->user()->role }}
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
