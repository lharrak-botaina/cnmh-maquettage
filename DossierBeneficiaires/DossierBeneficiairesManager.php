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
                            <h1 class="m-0">Gestion des dossiers bénéficiaires </h1>
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
                                    <div class="d-flex justify-content-between">
                                        <a href="./DossierBeneficiairesForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                  
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Rechercher">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 10%"> Numéro dossier </th>
                                        <th style="width: 10%"> Parent </th>
                                        <th style="width: 10%"> Etat </th>
                                        
                                        <th style="width: 10%" class="text-center"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td> 123 </td>
                                        <td class="text-capitalize">  lharrak botaina </td>
                                        <td> <span class="badge bg-primary">En attente</span> </td>
                                       
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>234</td>
                                        <td class="text-capitalize"> Nada stito </td>
                                        <td> <span class="badge bg-primary">En attente</span> </td>
                                       
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>1113 </td>
                                        <td class="text-capitalize"> Hicham </td>
                                        <td>  <span class="badge bg-success">Approuvé</span> </td>
                                       
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> 645 </td>
                                        <td class="text-capitalize"> yahya </td>
                                        <td> <span class="badge bg-primary">En attente</span> </td>
                                       
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
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
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="float-left col-md-6 d-flex justify-content-end" style="align-items: center; ">
                          
                            <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                <i class="fas fa-download"></i> export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> import
                            </button>
                        </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>