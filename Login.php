<?php 
  // Start session
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $role = $_POST["role"];

      $_SESSION["role"] = $role;
   
      header("Location: index.php");
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CNMH | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box" style="width: 479px">
    <div class="login-logo">
      <a href="#"><b>CNMH</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Connectez-vous pour commencer votre session</p>

        <form method="post">
          <div class="input-group mb-3">
            <!-- <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> -->
          <div class="input-group mb-3">
            <select name="role" class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
              <option value="Admin" data-select2-id="1">Admin : Fouad esseraj</option>
              <option value="Directrice" data-select2-id="2">Directrice : Fatima zahrae serghini</option>
              <option value="Service social" data-select2-id="3">Service social : Khawla souan  </option>
              <option value="Infirmière médecin générale" data-select2-id="4">Infirmière médecin générale : Algamot asia </option>
              <option value="Infirmière neurologue" data-select2-id="5">Infirmière neurologue  </option>
              <option value="Infirmière-dentiste" data-select2-id="6">Infirmière-dentiste : Tallaoui sanae </option>
              <option value="Psychomotricité" data-select2-id="7">Psychomotricité : Salma likram  </option>
              <option value="Kinésithérapeute" data-select2-id="8">Kinésithérapeute : Nassima El Ouazzani </option>
              <option value="Orthophoniste" data-select2-id="9">Orthophoniste : Samia kabbaj </option>
              <option value="Orthoptiste" data-select2-id="10">Orthoptiste : Imane Errahmouni </option>
              <option value="Ergothérapie" data-select2-id="11">Ergothérapie : Alaoui Ghita </option>
            </select>
        </div>
         
          <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de Passe" value="123">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Rappelle-moi
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">connectez-vous</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.min.js"></script>
</body>

</html>