<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include("../menu.php") ?>
<?php include("../navbar.php") ?>

<div class="content-wrapper">
    <?php include("../content-header.php") ?>

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
             <h2>Formulaire</h2>
             <div class="col-md-12">
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Ajouter Patient</h3>
              </div> -->
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                  <label>Nom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>
                <div class="form-group">
                  <label>Prenom</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Adress</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Sexe</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <select name="" class="form-control "  id="">
                    <option  value="">Famme</option>
                    <option value="">Homme</option>
                  </select>
                    </div>
                </div>

                <!-- <div class="form-group">
                  <label>Sexe</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                     <form  class="">
                      <div>
                       <input type="radio" class=" " name = "ans" value="yes">
                       <label for="huey">Famme</label> 
                       </div>
                       <div>
                       <input type="radio" name = "ans" value="maybe" checked>
                       <label for="huey">Homme</label>
                       </div>
                     </form>
                    </div>
                </div> -->

                <div class="form-group">
                  <label>CIN</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Telephone</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="tel" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Email</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="email" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Image</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="file" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Date Naissance</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group">
                  <label>Date Enregistrement</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" placeholder="" class="form-control datetimepicker-input" />
                    </div>
                </div>
                <!-- Date and time -->
                
                <div class="d-flex justify-content-between">
                  <a href="PatientManager.php" class="btn btn-primary">Enregistrer</a>




              </div>
                <!-- /.form group -->
                <!-- Date range -->

                <!-- /.form group -->

                <!-- Date and time range -->

                <!-- /.form group -->

                <!-- Date and time range -->

                <!-- /.form group -->
              </div>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- iCheck -->

            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

</div>

<?php include("../footer.php") ?>
</div>
<?php include("../scripts.php") ?>
</body>
</html>