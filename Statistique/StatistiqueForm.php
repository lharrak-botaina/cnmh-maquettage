<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("../menu.php") ?>
        <?php include("../navbar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">  

            <?php include("../content-header.php") ?>

          <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ajouter statistique</h1>
                    </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <section class="content">
            <div class="card card-default">
          <div class="card-header" style="background-color: #007bff">
            <h3 class="card-title"></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6" data-select2-id="77">
                    <div class="form-group" data-select2-id="98">
                        <label>Enité</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">Patient</option>
                            <option data-select2-id="101">Parent</option>
                            <option data-select2-id="102">Consultation medesing géneral</option>
                        </select>

                        </div>
                    <div class="form-group" data-select2-id="98">
                        <label>Données</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option  data-select2-id="99">Date</option>
                            <option data-select2-id="101">Parent</option>
                            <option data-select2-id="101">Type handicape</option>
                           
                        </select>
                        </div>
                    <div class="form-group" data-select2-id="98">
                        <label>Patient</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">Nom</option>
                            <option data-select2-id="101">Date Naissance</option>
                        </select>
                    </div>
               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6" data-select2-id="78">
                
                        <!-- /.form-group -->
                        <div class="form-group" data-select2-id="98">
                        <label>Type Handicape</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">Alaska</option>
                            <option data-select2-id="101">Delaware</option>
                            <option data-select2-id="102">Tennessee</option>
                            <option data-select2-id="103">Texas</option>
                            <option data-select2-id="104">Washington</option>
                            
                        </div>
                        
                <!-- /.form-group -->
              </div>
              
              <!-- /.col -->
            </div>
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          
        </div>
    
    </section>
</div>

          
        

        <?php include("../footer.php") ?>
    </div>
 
    <?php include("../scripts.php") ?>
</body>

</html>