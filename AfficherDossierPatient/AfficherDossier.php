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
                            <h1 class="m-0">Dossier patient n°:  A5692 <h5>Etat de dossier: Dossier médical</h5>
                            </h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <div class="card-header p-0 pt-0">
                                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Patient et Parent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Entretien social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-settings2-tab" data-toggle="pill" href="#custom-tabs-two-settings2" role="tab" aria-controls="custom-tabs-two-settings2" aria-selected="false">Rendez-vous</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-settings3-tab" data-toggle="pill" href="#custom-tabs-two-settings3" role="tab" aria-controls="custom-tabs-two-settings3" aria-selected="false">Liste d’attente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-settings1-tab" data-toggle="pill" href="#custom-tabs-two-settings1" role="tab" aria-controls="custom-tabs-two-settings1" aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Orientations externes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Réclamations</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-two-tabContent">

                                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                        <!-- /.col -->
                                        <br>
                                        <div class="col-md-12">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title">Patient/Bénéficiaire</h4>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                                            <i class="fas fa-sync-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                            <i class="fas fa-expand"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table class="table table-striped projects">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img  width="99" height="99" src="../assets/dist/img/User-avatar.svg.png">
                                                                    </td>
                                                                 <td> 
                                                                 </td>
                                                            <tr>
                                                                 <td>
                                                                         Numero:
                                                                 </td>
                                                                 <td>
                                                                         101
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                         Nom:
                                                                 </td>
                                                                 <td>
                                                                         AHOUZI
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                         Prénom:
                                                                 </td>
                                                                 <td>
                                                                         Hasnae
                                                                </td>
                                                             </tr>

                                                            <tr>
                                                                <td>
                                                                    Sexe:
                                                                </td>
                                                                <td>
                                                                    Femme
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                Date de naissance:
                                                                </td>
                                                                <td>
                                                                   03 .09 .2011
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Telephone:
                                                                </td>
                                                                <td>
                                                                    06 70 33 08 45
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    CIN/Numéro d'état civil:
                                                                </td>
                                                                <td>
                                                                    JE250344
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Adresse:
                                                                </td>
                                                                <td>
                                                                    RUE SEDAM BIR CHIFA TANGER MAROC
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Date d'enregistrement:
                                                                </td>
                                                                <td>
                                                                    03 .09 .2011 / 2:45PM
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td>
                                                                    Services demandés:
                                                                </td>
                                                                <td>
                                                                    <ol>
                                                                        <li>service social</li>
                                                                        <li>service médical</li>
                                                                        <li>service éducatif</li>
                                                                    </ol>
                                                                </td>
                                                            </tr> -->
                                                            <tr>
                                                                <td>
                                                                    Remarques:
                                                                </td>
                                                                <td>
                                                                    ceci est une remarque concernant le patient
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->
                                        <div class="col-md-12">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title">Parent/Tuteur</h4>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                                            <i class="fas fa-sync-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                            <i class="fas fa-expand"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table class="table table-striped projects">
                                                        <tbody>
                                                            <!-- <tr>
                                                                <td>
                                                                    Numero:
                                                                </td>
                                                                <td>
                                                                    207
                                                                </td>
                                                            </tr> -->
                                                            <tr>
                                                                <td>
                                                                    Nom:
                                                                </td>
                                                                <td>
                                                                    AHOUZI
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Prénom:
                                                                </td>
                                                                <td>
                                                                    Fahd
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Sexe:
                                                                </td>
                                                                <td>
                                                                    Homme
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td>
                                                                    Situation familial:
                                                                </td>
                                                                <td>
                                                                    Marié
                                                                </td>
                                                            </tr> -->
                                                            <tr>
                                                                <td>
                                                                    Telephone:
                                                                </td>
                                                                <td>
                                                                    06 70 33 08 45
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Email:
                                                                </td>
                                                                <td>
                                                                    ahouzifahd@gmail.com
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    CIN:
                                                                </td>
                                                                <td>
                                                                    K456763
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Adresse:
                                                                </td>
                                                                <td>
                                                                    RUE SEDAM BIR CHIFA TANGER MAROC
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Remarques:
                                                                </td>
                                                                <td>
                                                                    ceci est une remarque dit par le parent
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                                        <br>
                                        <table class="table table-striped projects">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                Responsable d'entretien:
                                                                </td>
                                                                <td>
                                                                    AHOUZI Rania
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Date et heur d'entretien:
                                                                </td>
                                                                <td>
                                                                2023-04-04  / 8:30AM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Couverture médicale:
                                                                </td>
                                                                <td>
                                                                    CNOPS
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Situation familial:
                                                                </td>
                                                                <td>
                                                                    Célibataire
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Types d'handicapes:
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>RETARD DE LANGUAGE</li>
                                                                        <li>RETARD Mental</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Niveau scolaire:
                                                                </td>
                                                                <td>
                                                                    4ème année primaire
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td>
                                                                    Services demandés:
                                                                </td>
                                                                <td>
                                                                    <ol>
                                                                        <li>service social</li>
                                                                        <li>service médical</li>
                                                                        <li>service éducatif</li>
                                                                    </ol>
                                                                </td>
                                                            </tr> 
                                                            <tr>
                                                                <td>
                                                                    Remarques:
                                                                </td>
                                                                <td>
                                                                    remarques dites durant l'entretien social
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-settings2" role="tabpanel" aria-labelledby="custom-tabs-two-settings2-tab">
                                            <h3> Liste des rendez-vous </h3>                                      
                                            <br> 
                                        <table class="table table-striped projects">
                                            <thead>
                                                <tr>
                                                    <th style="width: 15%">
                                                    Rendez-vous  N°
                                                    </th>
                                                    <th>
                                                    N°d'Ordre
                                                    </th>
                                                    <!-- <th>
                                                    Téléphone
                                                    </th> -->
                                                    <th>
                                                    Date 
                                                    </th>
                                                    <th>
                                                    Heur 
                                                    </th>
                                                    <th>
                                                    Sujet 
                                                    </th>
                                                    <th>
                                                    Etat 
                                                    </th>
                                                    <th>
                                                    Remarque
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    1
                                                    </td>
                                                    <td>
                                                    32
                                                    </td>
                                                    <td>
                                                        3.3.2022
                                                    </td>
                                                    <td>
                                                        2:00 PM
                                                    </td>
                                                    <td>
                                                        orientation exterieur
                                                    </td>
                                                    <td>
                                                    <span class="badge bg-danger">Non Approuvé</span>
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    2
                                                    </td>
                                                    <td>
                                                    18
                                                    </td>
                                                    <td>
                                                        3.2.2023
                                                    </td>
                                                    <td>
                                                        10:00 AM
                                                    </td>
                                                    <td>
                                                        seance
                                                    </td>
                                                    <td>
                                                    <span class="badge bg-success">Approuvé</span>
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    3
                                                    </td>
                                                    <td>
                                                    5
                                                    </td>
                                                    <td>
                                                        3.4.2023
                                                    </td>
                                                    <td>
                                                        9:00 AM
                                                    </td>
                                                    <td>
                                                        consultation 
                                                    </td>
                                                    <td>
                                                    <span class="badge bg-success">Approuvé</span>
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    4
                                                    </td>
                                                    <td>
                                                    14
                                                    </td>
                                                    <td>
                                                        3.2.2023
                                                    </td>
                                                    <td>
                                                        10:00 AM
                                                    </td>
                                                    <td>
                                                        seance
                                                    </td>
                                                    <td> <span class="badge bg-primary">En attente</span>
                                                </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5                                        
                                                    </td>
                                                    <td>
                                                    33
                                                    </td>
                                                    <td>
                                                        3.4.2024
                                                    </td>
                                                    <td>
                                                        9:00 AM
                                                    </td>
                                                    <td>
                                                        consultation 
                                                    </td>
                                                    <td>
                                                <span class="badge bg-danger">Annuler</span> 
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                    6                                        
                                                </td>
                                                    <td>
                                                    65
                                                    </td>
                                                    <td>
                                                        3.2.2023
                                                    </td>
                                                    <td>
                                                        10:00 AM
                                                    </td>
                                                    <td>
                                                        seance
                                                    </td>
                                                    <td>
                                                    <span class="badge bg-danger">Annuler</span>
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        7                                        
                                                    </td>
                                                        <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        3.4.2024
                                                    </td>
                                                    <td>
                                                        9:00 AM
                                                    </td>
                                                    <td>
                                                        consultation 
                                                    </td>
                                                    <td>
                                                    <span class="badge bg-primary">En attente</span>
                                                    </td>
                                                    <td>
                                                        rendez-vous remarque.......
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-settings3" role="tabpanel" aria-labelledby="custom-tabs-two-settings3-tab">
                                       Ce dossier ne se touve dans aucun list d'attente
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-settings1" role="tabpanel" aria-labelledby="custom-tabs-two-settings1-tab">
                                        <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Servce 1:  </h4>

                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                                                <i class="fas fa-sync-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                                <i class="fas fa-expand"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">      
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Servce 2:  </h4>

                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                                                <i class="fas fa-sync-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                                <i class="fas fa-expand"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">      
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Servce 3:  </h4>

                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                                                <i class="fas fa-sync-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                                <i class="fas fa-expand"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">      
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                        ..
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                                        ...
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
            <br>
        </div>
        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>