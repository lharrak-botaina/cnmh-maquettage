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
                            <h1 class="m-0">Gestion des services</h1>
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
                            

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <a href="../TypeService/TypeServiceForm.php" class="btn btn-primary "><i class="fa fa-plus-circle"></i> Ajouter </a>
                                    
                                </div>
                                <!-- SEARCH FORM -->
                                
                                <div class="input-group col-md-3">
                                    <input class="form-control py-2 border-right-0 border" type="search" placeholder="Rechercher..." value="" id="example-search-input">
                                    <span class="input-group-append">
                                    <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                            <i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <!-- <th style="width: 1%">
                                            #
                                        </th> -->
                                        <th style="width: 20%">
                                            Nom de service
                                        </th>
                                       
                                        <th style="width: 20%">
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <td>
                                           Service medical
                                        </td>
                                        <td class="text-truncate" style="max-width: 150px;">
                                            
                                        Le service médical de l'Assurance Maladie exerce une mission de service public.

                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                voir
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                       
                                       <td>
                                          Service social
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                           
                                       le service social applique à la fin de vie ce qu'il sait faire par ailleurs.
                                       </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               voir
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                          Service éducatif
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       Les Services éducatifs assurent un rôle de soutien, de coordination, de conseil et de développement pédagogique auprès des établissements d'enseignement
                                       </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               voir
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                          Service formation professionnelle
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       La formation professionnelle est une obligation pour les entreprises, pour maintenir les niveaux de compétences des salariés et les faire évoluer.                                       </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               voir
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                          Service sport
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       Établit le planning d'utilisation des gymnases et du stade en collaboration avec l'Office Municipal des Sports (OMS).                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               voir
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-header row">
                            <div class="float-right col-md-6">
                                <ul class="pagination pagination">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                            <div class="float-left col-md-6 d-flex justify-content-end  ">
                                <a href="" class="btn btn-outline-secondary h-75 mr-2"> Export PDF </a>
                                <a href="" class="btn btn-outline-secondary h-75 mr-2">Export excel</a>
                                <a href="" class="btn btn-outline-secondary h-75 mr-2">Import excel</a>
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