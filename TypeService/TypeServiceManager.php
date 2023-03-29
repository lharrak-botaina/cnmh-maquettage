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
                            <h1 class="m-0">Gestion de type service</h1>
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
                              Type service
                            </h3>

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <a href="../TypeService/TypeServiceForm.php" class="btn btn-primary"> Ajouter un service </a>
                                    <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                                        <option value="">service 1</option>
                                        <option value="">service 2</option>
                                        <option value="">service 3</option>
                                    </select>
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                <div class="search-box">

                                    <input type="text" class="form-control" id="search" placeholder="Rechercher&hellip;">
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 20%">
                                            Nom de service
                                        </th>
<!--                                        
                                        <th style="width: 20%">
                                            Actions
                                        </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                           Service medical
                                        </td>
                                       
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
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