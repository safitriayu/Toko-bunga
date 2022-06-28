<div class="sidebar">
     <!-- Sidebar Menu -->
     <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

               <li class="nav-item">
                    <a href="#" class="nav-link px-1 active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                              Dashboard
                         </p>
                    </a>
               </li>

               <li class="nav-item">
                    <a href="#" class="nav-link px-1">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                              Bunga
                              <i class="right fas fa-angle-left"></i>
                         </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                              <a href="<?= base_url('') . 'admin/bunga' ?>" class="nav-link active px-1">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>All</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="<?= base_url('') . 'admin/tambah-bunga' ?>" class="nav-link px-1">
                                   <i class="fa fa-plus nav-icon"></i>
                                   <p>Tambah Bunga</p>
                              </a>
                         </li>
                    </ul>
               </li>

               <li class="nav-item">
                    <a href="#" class="nav-link px-1">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                              User
                              <i class="right fas fa-angle-left"></i>
                         </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                              <a href="<?= base_url('') . 'admin/user' ?>" class="nav-link active px-1">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>All</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="<?= base_url('') . 'admin/tambah-user' ?>" class="nav-link px-1">
                                   <i class="fa fa-plus nav-icon"></i>
                                   <p>Tambah User</p>
                              </a>
                         </li>
                    </ul>
               </li>

               <li class="nav-item">
                    <a href="#" class="nav-link px-1">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                              Gallery
                              <i class="right fas fa-angle-left"></i>
                         </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                              <a href="./index.html" class="nav-link active px-1">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>All</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="./index2.html" class="nav-link px-1">
                                   <i class="fa fa-plus nav-icon"></i>
                                   <p>Tambah Photo</p>
                              </a>
                         </li>
                    </ul>
               </li>


          </ul>
     </nav>
     <!-- /.sidebar-menu -->
</div>