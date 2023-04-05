<?php 
  session_start();

  // Check if role is set in session
  if (isset($_SESSION["role"])) {
      $role = $_SESSION["role"];
  } else {
      $role = "";
} ?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" >
    <img src="/assets/dist/img/logo-cnmh.png" alt="CNMH Logo" class="" style="max-width: 100%;">
    <span class="brand-text font-weight-light"></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/dist/img/User-avatar.svg.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
        <?php if ($role == 'Directrice'): ?>
          Fatima zahrae serghini<br/>
          <span style="font-size: small;">Derictrice</span>
        <?php endif; ?>
        <?php if ($role == 'Admin'): ?>
          Fouad esseraj <br/>
          <span style="font-size: small;">Admin</span>
        <?php endif; ?>
        <?php if ($role == 'Service social'): ?>
          Khawla souan <br/>
          <span style="font-size: small;">Service social</span>
        <?php endif; ?>
        <?php if ($role == 'Infirmière médecin générale'): ?>
          Algamot asia <br/>
          <span style="font-size: small;">Infirmière médecin générale</span>
        <?php endif; ?>
        <?php if ($role == 'Infirmière neurologue'): ?>
          Algamot asia <br/>
          <span style="font-size: small;">Infirmière neurologue</span>
        <?php endif; ?>
        <?php if ($role == 'Infirmière-dentiste'): ?>
          Tallaoui sanae <br/>
          <span style="font-size: small;">Infirmière-dentiste</span>
        <?php endif; ?>
        <?php if ($role == 'Psychomotricité'): ?>
          Salma likram <br/>
          <span style="font-size: small;">Psychomotricité</span>
          
        <?php endif; ?>
        <?php if ($role == 'Kinésithérapeute'): ?>
          Nassima El Ouazzani <br/>
          <span style="font-size: small;">Kinésithérapeute</span>
        <?php endif; ?>
        <?php if ($role == 'Orthophoniste'): ?>
          Samia kabbaj <br/>
          <span style="font-size: small;">Orthophoniste</span>
        <?php endif; ?>
        <?php if ($role == 'Orthoptiste'): ?>
          Imane Errahmouni <br/>
          <span style="font-size: small;">Orthoptiste</span>
        <?php endif; ?>
        <?php if ($role == 'Ergothérapie'): ?>
          Alaoui Ghita <br/>
          <span style="font-size: small;">Ergothérapie</span>
        <?php endif; ?>
        </a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <?php include("menu-items.php"); ?>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>




