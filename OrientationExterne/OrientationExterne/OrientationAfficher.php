<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../../head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("../../menu.php") ?>
        <?php include("../../navbar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php include("../../content-header.php") ?>
            <div class="bs-stepper">

                <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger"></div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger"></div>
                </div>
            </div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> L'orientation externe</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <!-- <form action="" id="wizard"> -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 10%"> Parent </th>
                                        <th style="width: 10%"> Patient </th>
                                        <th style="width: 10%"> Objet </th>
                                        <th style="width: 10%"> Description </th>
                                        <th style="width: 10%"> Remarque </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Nom parent </td>
                                        <td> Nom patient </td>
                                        <td> Orientation 1 </td>
                                        <td> Remarque </td>
                                        <td> Description </td>

                                    </tr>

                                    <tr>
                                        <td> Nom parent </td>
                                        <td> Nom patient </td>
                                        <td> Orientation 2 </td>
                                        <td> Description</td>
                                        <td> Remarque1 </td>

                                    </tr>

                                    <tr>
                                        <td> Nom parent </td>
                                        <td> Nom patient </td>
                                        <td> Orientation 3 </td>
                                        <td>Description </td>
                                        <td> Remarque2 </td>

                                    </tr>

                                    <tr>
                                        <td> Nom parent </td>
                                        <td> Nom patient </td>
                                        <td> Orientation 3 </td>
                                        <td> Description </td>
                                        <td> Remarque 3 </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex">
                            <div class="float-start">
                                <a href=" ../OrientationExterne/OrientationExterneManager.php" class="btn btn-primary">Retour</a>

                            </div>
                            <div class="float-end" style="align-items: center; ">
                                <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                    <i class="fas fa-download"></i> export
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> import
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card-header row">

<div class="d-flex justify-content-space-between">
    
</div>
<!-- /.container-fluid -->
</div>
</section>

<!-- /.content -->

        <?php include("../../footer.php") ?>
    </div>
    <?php include("../../scripts.php") ?>
</body>

</html>