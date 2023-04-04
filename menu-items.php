<?php 
 $adminRole = "Admin";
 $dirirectriceRole = "Derictrice";
 // ajoutes les autres rôles


?>

  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <?php if ($role ==  $adminRole || $role ==  $dirirectriceRole) : ?>
    <li class="nav-item">
      <a href="/Reclamation/ReclamationManager.php" class="nav-link">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Statistique
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
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
            <p>Gestion des Services</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/TypeHandicap/TypeHandicapManager.php" class="nav-link">
            <p>Gestion du type d'handicap</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/CouvertureMedicale/CouvertureMedicaleManager.php" class="nav-link">
            <p>Gestion de Couverture Médicale</p>
          </a>
        </li>
      </ul>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
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
            <p>Gestion des Employés</p>
          </a>
        </li>
      </ul>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
    <li class="nav-item">
      <a href="/OrientationExterne/OrientationExterne/OrientationExterneManager.php" class="nav-link">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        <p class="pl-2">
          Orientations externes
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
    <li class="nav-item">
      <a href="/Reclamation/ReclamationManager.php" class="nav-link">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Réclamations
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
    <li class="nav-item">
      <a href="/DossierBeneficiaires/DossierBeneficiairesManager.php" class="nav-link">
        <i class="fa-solid fa-hospital-user"></i>
        <p class="pl-2">
          Dossier bénéficiaires
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin') : ?>
    <li class="nav-item">
      <a href="/Rendez-vous/Rendez-vousManager.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>


    
    <li class="nav-item">
      <a href="/OrientationExterne/OrientationExterne/OrientationExterneManager.php" class="nav-link">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        <p class="pl-2">
          Orientations externes
        </p>
      </a>
    </li>

        <li class="nav-item">
      <a href="/Reclamation/ReclamationManager.php" class="nav-link">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Réclamations
        </p>
      </a>
    </li>
        <li class="nav-item">
      <a href="/DossierBeneficiaires/DossierBeneficiairesManager.php" class="nav-link">
        <i class="fa-solid fa-hospital-user"></i>
        <p class="pl-2">
          Dossier bénéficiaires
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/Rendez-vous/Rendez-vousManager.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>


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


        <li class="nav-item">
      <a href="/Rendez-vous/Rendez-vousManager.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>

    
    <?php endif; ?>
            
  </ul>
  
