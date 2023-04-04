<?php 
 $adminRole = "Admin : Fouad esseraj";
 $dirirectriceRole = "Derictrice : Fatima zahrae serghini";
 $ServiceSocialeRole = "Service social : Khawla souan";
 $InfirMièreMédecinGénéraleeRole = "Infirmière médecin générale : Algamot asia";
 // ajoutes les autres rôles
 $currentURL = $_SERVER["SCRIPT_NAME"];

?>
  
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    

    <?php if ($role == 'Admin : Fouad esseraj') : ?>
    <li class="nav-item">
      <a href="/DossierBeneficiaires/DossierBeneficiairesManager.php" class="nav-link">
        <i class="fa-solid fa-hospital-user"></i>
        <p class="pl-2">
          Gestion des patients
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin : Fouad esseraj') : ?>
    <li class="nav-item">
      <a href="/Rendez-vous/Rendez-vousManager.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin : Fouad esseraj') : ?>
    <li class="nav-item">
      <a href="/OrientationExterne/OrientationExterne/OrientationExterneManager.php" class="nav-link">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        <p class="pl-2">
          Orientations externes
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin : Fouad esseraj') : ?>
    <li class="nav-item">
      <a href="/Reclamation/ReclamationManager.php" class="nav-link">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Réclamations
        </p>
      </a>
    </li>
    <?php endif; ?>



    <?php if ($role ==  $adminRole || $role ==  $dirirectriceRole  ) : ?>
    <li class="nav-item" id="">

     


      <a href="/Reclamation/ReclamationManager.php"  class="nav-link <?php if($currentURL == "/Reclamation/ReclamationManager.php") { echo("active"); } ?>  ">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Statistique
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == 'Admin : Fouad esseraj') : ?>
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
        <li class="nav-item">
          <a href="/Employe/EmployeManager.php" class="nav-link">
            <p>Gestion des Employés</p>
          </a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
            
  </ul>
  
