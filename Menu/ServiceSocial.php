<?php if ($role == 'Service Social'): ?>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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


      </ul>
    <?php endif; ?>