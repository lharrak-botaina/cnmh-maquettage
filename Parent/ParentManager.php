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
                            <h1 class="m-0">Gestion des Parents</h1>
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
                            <h3 class="card-title">
                              Type Parents
                            </h3>
                   

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <a href="../Parent/ParentForm.php" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Ajouter </a>
                                    <!-- <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                                        <option value="">Parents</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select> -->
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                <div class="search-box">

                                    <input type="text" class="form-control" id="search" placeholder="Rechercher&hellip;">
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 20%">
                                            Nom 
                                        </th>
                                        <th style="width: 20%">
                                            Prenom
                                        </th>
                                        <th style="width: 20%">
                                            Sexe
                                        </th>
                                        <th style="width: 20%">
                                            Cin
                                        </th>
                                        <th style="width: 20%">
                                            Telephone
                                        </th>
                                        <th style="width: 20%">
                                            Adress
                                        </th>
                                        <th style="width: 20%">
                                            Date 
                                        </th>
                                        <th class="d-flex justify-content-center" style="width: 100%">
                                            Action
                                        </th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                          Essarraj 
                                        </td>
                                        <td>
                                          Fouad
                                        </td>
                                        <td>
                                          Homme
                                        </td>
                                        <td>
                                          K3579B
                                        </td>
                                        <td>
                                          0600000000
                                        </td>
                                        <td>
                                          Tanger Rue 05
                                        </td>
                                        <td>
                                          29/03/2023
                                        </td>
                                        
                                        <td class="project-actions d-flex ">
                                            <a class="btn btn-primary mr-2 btn-sm" href="#">
                                                <i class="fas fa-folder ">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info mr-2 btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger mr-2 btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                          Tebaa
                                        </td>
                                        <td>
                                          Adnan
                                        </td>
                                        <td>
                                          Homme
                                        </td>
                                        <td>
                                          K3579B
                                        </td>
                                        <td>
                                          0600000000
                                        </td>
                                        <td>
                                          Tanger Rue 05
                                        </td>
                                        <td>
                                          29/03/2023
                                        </td>
                                        
                                        <td class="project-actions d-flex ">
                                            <a class="btn btn-primary mr-2 btn-sm" href="#">
                                                <i class="fas fa-folder ">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info mr-2 btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger mr-2 btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                          Stitou
                                        </td>
                                        <td>
                                          Nada
                                        </td>
                                        <td>
                                          Femme
                                        </td>
                                        <td>
                                          K3579B
                                        </td>
                                        <td>
                                          0600000000
                                        </td>
                                        <td>
                                          Tanger Rue 05
                                        </td>
                                        <td>
                                          29/03/2023
                                        </td>
                                        
                                        <td class="project-actions d-flex ">
                                            <a class="btn btn-primary mr-2 " href="#">
                                                <i class="fas fa-folder ">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info mr-2 btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger mr-2 btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                          Ajroudi
                                        </td>
                                        <td>
                                          Imane
                                        </td>
                                        <td>
                                          Femme
                                        </td>
                                        <td>
                                          K3579B
                                        </td>
                                        <td>
                                          0600000000
                                        </td>
                                        <td>
                                          Tanger Rue 05
                                        </td>
                                        <td>
                                          29/03/2023
                                        </td>
                                        
                                        <td class="project-actions d-flex ">
                                            <a class="btn btn-primary mr-2 " href="#">
                                                <i class="fas fa-folder ">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info mr-2 btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger mr-2 btn-sm" href="#">
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
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                            <div class="float-left col-md-6 d-flex justify-content-end">
                                <a href="" class="btn btn-outline-secondary"> export_pdf </a>
                                <a href="" class="btn btn-outline-secondary">export_excel</a>
                                <a href="" class="btn btn-outline-secondary">import_excel</a>
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