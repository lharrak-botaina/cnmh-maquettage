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
             <h2>Index</h2>
              <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                      
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                                <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                            </ol>
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
                                Couverture
                            </h3>

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-primary"> Ajouter Couverture </a>
                                    <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                                        <option value="">test1</option>
                                        <option value="">test2</option>
                                        <option value="">test3</option>
                                    </select>
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
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
                                        <th style="width: 1%">
                                            Couverture
                                        </th>
                                        <th style="width: 20%">
                                            Nom Couverture
                                        </th>
                                        <!-- <th style="width: 30%">
                                        </th> -->
                                        <th style="width: 9%">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            couverture 1
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                Afficher
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Modifier
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
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
                                <a href="" class="btn btn-outline-secondary">exporter pdf </a>
                                <a href="" class="btn btn-outline-secondary">exporter excel</a>
                                <a href="" class="btn btn-outline-secondary">importer excel</a>
                            </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        </div>
    </div>

    </div>
   
</section>


</div>

<?php include("../footer.php") ?>
</div>
<?php include("../scripts.php") ?>
</body>
</html>