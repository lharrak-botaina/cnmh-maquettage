<?php if ($role == 'Derictrice'): ?>
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
              <a href="/Employe/EmployeManager.php" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Gestion des Employés</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    <?php endif; ?>