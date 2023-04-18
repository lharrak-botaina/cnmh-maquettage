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
                 <!-- /.enite -->
                    <div class="form-group" data-select2-id="98">
                        <label>Enité</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">Patient</option>
                            <option data-select2-id="101">Parent</option>
                            <option data-select2-id="102">Consultation medesing géneral</option>
                            <option data-select2-id="103">Accueil</option>
                        </select>

                        </div>
                         <!-- /.donnes -->
                    <div class="form-group" data-select2-id="98">
                        <label>Données</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option  data-select2-id="99">Date</option>
                            <option data-select2-id="101">Parent</option>
                            <option data-select2-id="102">Patient</option>
                           
                        </select>
                        </div>
                         <!-- /.patient -->
                    <div class="form-group" data-select2-id="98">
                        <label>Patient</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">Nom</option>
                            <option data-select2-id="101">Date Naissance</option>
                            <option data-select2-id="102">Type handicape</option>
                        </select>
                    </div>
               
               
              </div>
              <!-- /.col -->
              <div class="col-md-6" data-select2-id="78">
                
                        <!-- /.type handicape -->
                        <div class="form-group" data-select2-id="98">
                        <label>Type Handicape</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">RETARD MENTAL</option>
                            <option data-select2-id="101">TSA</option>
                            <option data-select2-id="102">TRISOMIE 21</option>
                            <option data-select2-id="103">IMC</option>
                            <option data-select2-id="104">RPM</option>
                            <option data-select2-id="105">RETARD DE LANGUAGE</option>
                            <option data-select2-id="106">HANDICAP MOTEUR</option> 
                        </select>                           
                        </div>
                         <!-- /.fstatistique -->
                        <div class="form-group" data-select2-id="99">
                        <label>Statistique</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="99">MOY</option>
                            <option data-select2-id="101">AVG</option>
                            <option data-select2-id="102">MAX</option>
                            <option data-select2-id="103">MIN</option>
                            <option data-select2-id="104">COUNT</option>
                           
                        </select>                           
                        </div>
                        
                <!-- /.form-group -->
              </div>
              
              
                                    <!-- <div class="d-flex justify-content-between">
                                        <a href="" class="btn btn-primary">Enregistrer</a>
                                        <a href="./StatistiqueManager.php" class="btn btn-outline-secondary">Annuler</a>
                                    </div>
                                 -->
              <!-- /.col -->
            </div>
            <!-- btn -->
            <div class="d-flex">
                        <div class="p-2">
                        <a href="./StatistiqueManager.php" class="btn btn-primary">Enregistrer</a>
                        </div>
                        <div class="ml-auto p-2">
                        <a href="./StatistiqueManager.php" class="btn btn-outline-secondary">Annuler</a>
                        </div>
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