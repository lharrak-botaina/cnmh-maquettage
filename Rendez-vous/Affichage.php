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
                            <h1 class="m-0">Détail du rendez vous</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">

                           
                        </div>
                        <table class="table table-striped projects">
                                <thead>
                                <tr>
                                      
                                      <th style="width: 1%">
                                       N°Dossier
                                      </th>
                                      <th style="width: 5%">
                                        Etat 
                                      </th>
                                      <th style="width: 20%">
                                      Date du Rendez-Vous
                                      </th>
                                      <th style="width: 15%">
                                      Heure 
                                      </th>
                                      <th style="width: 5%">
                                      Médecin
                                      </th>
                                      <th style="width: 30%">
                                      Adresse
                                      </th>
                                      <th style="width: 5%">
                                      Téléphone
                                      </th>
                                      
                                      <th style="width: 30%">
                                      Le prochain rendez-vous
                                      </th>

                                      <th style="width: 30%">
                                      Remarques
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <tr>
                                     
                                      <td>
                                       A31
                                      </td>
                                      <td>
                                      <span class="badge bg-primary">En Attende</span>
                                      </td>
                                      <td>
                                      10/04/2023 
                                      </td>

                                      <td>
                                      10:00 AM 
                                      </td>
                                      <td>
                                         Kamal 
                                      </td>
                                      <td>
                                      TANGER MAROC 
                                      </td>
                                      <td>
                                       0600000000
                                      </td>
                                      <td>
                                      17/04/2023
                                      </td>
                                      <td>
                                      ceci est une remarque 
                                      </td>
                                     
                                     

                                    
                                    


                                 
                                  </tr>
                                   
                                         <!-- Button trigger modal -->
                                            <!-- Button trigger modal -->
                                            <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                RendezVous
                                            </button> -->
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  


                        <div class="text-right">
                  

                  <a href="../Rendez-vous/Rendez-vousManager.php" class="btn btn-secondary">Annuler</a>

                          
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>