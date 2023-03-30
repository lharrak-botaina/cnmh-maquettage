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
                            <h1 class="m-0">Affichage Dossier Medical</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div style="width:90%; margin:auto; padding:1% 0% 0%">

            
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="1-tab-pane" data-bs-toggle="tab" data-target="#1-tab-pane" type="button" role="tab" aria-controls="1-tab-pane" aria-selected="true">Parent et bénéficiaire</button>
                        <button class="nav-link" id="2-tab-pane" data-bs-toggle="tab" data-target="#2-tab-pane" type="button" role="tab" aria-controls="2-tab-pane" aria-selected="false">Orientations externes</button>
                        <button class="nav-link" id="3-tab-pane" data-bs-toggle="tab" data-target="#3-tab-pane" type="button" role="tab" aria-controls="3-tab-pane" aria-selected="false">Réclamations</button>
                        <button class="nav-link" id="4-tab-pane" data-bs-toggle="tab" data-target="#4-tab-pane" type="button" role="tab" aria-controls="4-tab-pane" aria-selected="false">services</button>
                        <button class="nav-link" id="5-tab-pane" data-bs-toggle="tab" data-target="#5-tab-pane" type="button" role="tab" aria-controls="5-tab-pane" aria-selected="false">Entretien socials</button>
                        <button class="nav-link" id="6-tab-pane" data-bs-toggle="tab" data-target="#6-tab-pane" type="button" role="tab" aria-controls="6-tab-pane" aria-selected="false">Rendez-vous et liste d’attente</button>
                        
                        <!-- 
                            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                            <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
                        </div>
                    </nav>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="1-tab-pane" role="tabpanel" tabindex="0">...</div>
                        <div class="tab-pane fade" id="2-tab-pane" role="tabpanel" tabindex="0">...</div>
                        <div class="tab-pane fade" id="3-tab-pane" role="tabpanel" tabindex="0">...</div>
                        <div class="tab-pane fade" id="4-tab-pane" role="tabpanel" tabindex="0">...</div>
                        <div class="tab-pane fade" id="5-tab-pane" role="tabpanel" tabindex="0">...</div>
                        <div class="tab-pane fade" id="6-tab-pane" role="tabpanel" tabindex="0">...</div>
                    </div>
            
            </div>

            <!-- /.content -->
        </div>
        <!-- /.control-sidebar -->


        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>


</html>