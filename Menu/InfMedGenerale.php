<?php if ($role == 'Infirmière médecin générale'): ?>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
      <a href="/Rendez-vouz/Rendez-vousManager.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Rendez-vous
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/Consultation/consultation.php" class="nav-link">
        <i class="fa-regular fa-calendar-check"></i>
        <p class="pl-2">
          Gestion des consultations
        </p>
      </a>
    </li>


      </ul>
    <?php endif; ?>