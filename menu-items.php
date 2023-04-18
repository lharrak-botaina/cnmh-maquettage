<?php 
 $adminRole = "Admin";
 $dirirectriceRole = "Directrice";
 $ServiceSocialeRole = "Service social";
 $InfirMièreMédecinGénéraleeRole = "Infirmière médecin générale";
 $InfirmièreNeurologueRole = "Infirmière neurologue";
 $InfirmièreDentisteRole = "Infirmière-dentiste";
 $PsychomotricitéRole = "Psychomotricité";
 $KinésithérapeuteRole = "Kinésithérapeute";
 $OrthophonisteRole = "Orthophoniste";
 $OrthoptisteRole = "Orthoptiste";
 $ErgothérapieRole = "Ergothérapie";
 // ajoutes les autres rôles
 $currentURL = $_SERVER["SCRIPT_NAME"];

?>
  
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    

    <?php if ($role == $adminRole || $role == $dirirectriceRole || $role == $ServiceSocialeRole || $role == $InfirMièreMédecinGénéraleeRole) : ?>
      <li class="nav-item">
      <a href="/DossierBeneficiaires/DossierBeneficiairesManager.php" class="nav-link <?php if($currentURL == "/DossierBeneficiaires/DossierBeneficiairesManager.php") { echo("active"); } ?>">
        <i class="fa-solid fa-hospital-user"></i>
        <p class="pl-2">
          Gestion des patients
        </p>
      </a>
      </li>
    <?php endif; ?>

    <?php if ($role == $adminRole || $role == $dirirectriceRole  || $role == $InfirMièreMédecinGénéraleeRole) : ?>
      <li class="nav-item">
      <a href="/Consultation/consultation.php" class="nav-link <?php if($currentURL == "/Consultation/consultation.php") { echo("active"); } ?>">
        <i class="fa-solid fa-hospital-user"></i>
        <p class="pl-2">
          Consultation
        </p>
      </a>
      </li>
    <?php endif; ?>
      
    <?php if ($role == $adminRole || $role == $dirirectriceRole || $role == $ServiceSocialeRole || $role == $InfirMièreMédecinGénéraleeRole || $role ==  $InfirmièreNeurologueRole || $role ==  $InfirmièreDentisteRole || $role ==  $PsychomotricitéRole || $role ==  $KinésithérapeuteRole || $role ==  $OrthophonisteRole || $role ==  $OrthoptisteRole || $role ==  $ErgothérapieRole) : ?>
    <li class="nav-item">
      <a href="/Rendez-vous/Rendez-vousManager.php" class="nav-link <?php if($currentURL == "/Rendez-vous/Rendez-vousManager.php") { echo("active"); } ?>">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == $adminRole || $role == $dirirectriceRole || $role == $ServiceSocialeRole) : ?>
      <li class="nav-item">
        <a href="/OrientationExterne/OrientationExterne/OrientationExterneManager.php" class="nav-link <?php if($currentURL == "/OrientationExterne/OrientationExterne/OrientationExterneManager.php") { echo("active"); } ?>">
          <i class="fa-solid fa-arrow-up-right-from-square"></i>
          <p class="pl-2">
            Orientations externes
          </p>
        </a>
      </li>
    <?php endif; ?>

    <?php if ($role == $adminRole || $role == $dirirectriceRole || $role == $ServiceSocialeRole) : ?>
    <li class="nav-item">
      <a href="/Reclamation/ReclamationManager.php" class="nav-link <?php if($currentURL == "/Reclamation/ReclamationManager.php") { echo("active"); } ?>  ">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Réclamations
        </p>
      </a>
    </li>
    <?php endif; ?>



    <?php if ($role ==  $adminRole || $role ==  $dirirectriceRole  ) : ?>
    <li class="nav-item" id="">

      <a href="/Statistique/StatistiqueManager.php"  class="nav-link <?php if($currentURL == "/Statistique/StatistiqueManager.php") { echo("active"); } ?>  ">
        <i class="fa-solid fa-circle-exclamation"></i>
        <p class="pl-2">
          Statistique
        </p>
      </a>
    </li>
    <?php endif; ?>

    <?php if ($role == $adminRole || $role == $dirirectriceRole) : ?>
    <!-- the <li> element for the "Parameters" dropdown menu has a conditional "menu-open"
     class added based on whether any of its child elements are active -->
    <li class="nav-item <?php if($currentURL == "/TypeService/TypeServiceManager.php" || $currentURL == "/TypeHandicap/TypeHandicapManager.php" || $currentURL == "/CouvertureMedicale/CouvertureMedicaleManager.php" || $currentURL == "/Employe/EmployeManager.php") { echo("menu-open"); } ?>">
      <a href="#" class="nav-link">
        <i class="fa-solid fa-gears"></i>
        <p class="pl-2">
          Paramètres
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <!-- "display: block;" style added based on whether any of the child elements are active.
     This will ensure that the active page is visible when clicked, even if it's under the "Parameters" dropdown menu -->
      <ul class="nav nav-treeview" style="<?php if($currentURL == "/TypeService/TypeServiceManager.php" || $currentURL == "/TypeHandicap/TypeHandicapManager.php" || $currentURL == "/CouvertureMedicale/CouvertureMedicaleManager.php" || $currentURL == "/Employe/EmployeManager.php") { echo("display: block;"); } ?>">
      <li class="nav-item">
        <a href="/TypeService/TypeServiceManager.php" class="nav-link <?php if($currentURL == "/TypeService/TypeServiceManager.php") { echo("active"); } ?>">
          <p>Gestion des Services</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/TypeHandicap/TypeHandicapManager.php" class="nav-link <?php if($currentURL == "/TypeHandicap/TypeHandicapManager.php") { echo("active"); } ?>">
          <p>Gestion du type d'handicap</p>
        </a>
      </li>
        <li class="nav-item">
          <a href="/CouvertureMedicale/CouvertureMedicaleManager.php" class="nav-link <?php if($currentURL == "/CouvertureMedicale/CouvertureMedicaleManager.php") { echo("active"); } ?>">
            <p>Gestion de Couverture Médicale</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Employe/EmployeManager.php" class="nav-link <?php if($currentURL == "/Employe/EmployeManager.php") { echo("active"); } ?>">
            <p>Gestion des Employés</p>
          </a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
            
  </ul>
  
