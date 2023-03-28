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


                            <!-- Content Wrapper. Contains page content -->
                            <div class="content-wrapper">
                                <!-- Content Header (Page header) -->
                                <div class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1 class="m-0">Stagiaire CRUD</h1>
                                            </div><!-- /.col -->
                                            <div class="col-sm-6">
                                                <ol class="breadcrumb float-sm-right">
                                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                                    Stagiaires
                                                </h3>

                                                <div class="col-sm-12 d-flex justify-content-between p-3">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="" class="btn btn-primary"> Add Stagiaire </a>
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
                                                                #
                                                            </th>
                                                            <th style="width: 20%">
                                                                Name Stagiaire
                                                            </th>
                                                            <th style="width: 30%">
                                                                Prenom Stagiaire
                                                            </th>
                                                            <th style="width: 20%">
                                                                Actions
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                #
                                                            </td>
                                                            <td>
                                                                AHOUZI
                                                            </td>
                                                            <td>
                                                                Hasnae
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
                                                                    Edit
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
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between ">
                                                <h3 class="card-title">
                                                    Links
                                                </h3>
                                                <div class="col-sm-12 d-flex justify-content-between p-3">
                                                    <a href="" class="btn btn-outline-secondary"> export_pdf </a>
                                                    <a href="" class="btn btn-outline-secondary">export_excel</a>
                                                    <a href="" class="btn btn-outline-secondary">import_excel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.container-fluid -->
                                </section>
                                <!-- /.content -->
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