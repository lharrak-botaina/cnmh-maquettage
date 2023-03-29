<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">CNMH</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/dist/img/User-avatar.svg.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-gears"></i>
            <p class="pl-2">
              Paramètres
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="/TypeService/TypeServiceManager.php" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Gestion des Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/TypeHandicap/TypeHandicapManager.php" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Gestion du type d'handicap</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/CouvertureMedicale/CouvertureMedicaleManager.php" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Gestion de Couverture Médicale</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="fa-solid fa-users-line"></i>
            <p class="pl-2">
              Ressource Humaines
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="/TypeHandicap/TypeHandicapManager.php" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Gestion des Employées</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/Parent/ParentManager.php" class="nav-link">
          <i class="fa-solid fa-restroom"></i>
            <p class="pl-2">
              Gestion des Parents
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/Patient/PatientManager.php" class="nav-link">
            <i class="fa-solid fa-hospital-user"></i>
            <p class="pl-2">
              Gestion des Patients
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>