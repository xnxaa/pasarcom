     <main class="main">
         <!-- Sidebar Nav -->
         <aside id="sidebar" class="js-custom-scroll side-nav">
             <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
                 <!-- Title -->
                 <li class="sidebar-heading h6">Dashboard</li>
                 <!-- End Title -->

                 <!-- Dashboard -->
                 <li id="link" class="side-nav-menu-item active">
                     <a id="link" class="side-nav-menu-link media align-items-center" href="<?= base_url(); ?>c_admin/index">
                         <span class="d-flex mr-3">
                             <i class="gd-dashboard"></i>
                         </span>
                         <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                     </a>
                 </li>
                 <!-- End Dashboard -->
                 <!-- Users -->
                 <li class="side-nav-menu-item side-nav-has-menu">
                     <a id="link" class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-right: 16px;" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                             <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                         </svg>
                         <!-- <span class="d-flex mr-3">
                             <i class="gd-user"></i>
                         </span> -->
                         <span class="side-nav-fadeout-on-closed media-body">Product</span>
                         <span class="side-nav-control-icon d-flex">
                             <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                         </span>
                         <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                     </a>

                     <!-- Users: subUsers -->
                     <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                         <li class="side-nav-menu-item">
                             <a id="link" class="side-nav-menu-link" href="<?= base_url(); ?>c_admin/product">All Product</a>
                         </li>
                         <li class="side-nav-menu-item">
                             <a id="link" class="side-nav-menu-link" href="<?= base_url(); ?>c_admin/add">Add New Product</a>
                         </li>
                     </ul>
                     <!-- End Users: subUsers -->
                 </li>

                 <!-- <li class="side-nav-menu-item">
                     <a id="link" class="side-nav-menu-link media align-items-center" href="documentation/" target="_blank">
                         <span class="d-flex mr-3">
                             <i class="gd-file"></i>
                         </span>
                         <span class="side-nav-fadeout-on-closed media-body">Report</span>
                     </a>
                 </li> -->


                 <!-- <li class="side-nav-menu-item side-nav-has-menu">
                     <a id="link" class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                         <span class="d-flex mr-3">
                             <i class="gd-user"></i>
                         </span>
                         <span class="side-nav-fadeout-on-closed media-body">Users</span>
                         <span class="side-nav-control-icon d-flex">
                             <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                         </span>
                         <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                     </a>


                     <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                         <li class="side-nav-menu-item">
                             <a id="link" class="side-nav-menu-link" href="users.html">All Users</a>
                         </li>
                         <li class="side-nav-menu-item">
                             <a id="link" class="side-nav-menu-link" href="user-edit.html">Add new</a>
                         </li>
                     </ul>
                 </li> -->
                 <!-- End Users -->
                 <!-- Settings -->
                 <!-- <li class="side-nav-menu-item">
                     <a id="link" class="side-nav-menu-link media align-items-center" href="settings.html">
                         <span class="d-flex mr-3">
                             <i class="gd-settings"></i>
                         </span>
                         <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                     </a>
                 </li> -->
                 <!-- End Settings -->
             </ul>
         </aside>
         <!-- End Sidebar Nav -->