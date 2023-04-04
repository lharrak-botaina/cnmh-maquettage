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

            <!-- Button trigger modal à coupier dans l'index-->
            <a type="button" class="btn btn-primary" href="AfficherDossierPatient/AfficherDossier.php">
                <i class="fas fa-folder">
                </i>
                Afficher
            </a>
            <!-- Button trigger modal à coupier dans l'index-->


            <!-- /.content -->
        </div>
        <!-- /.control-sidebar -->


        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>


</html>