<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.css" />


</head>
<div id="ListAttente-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div class="card ">
        <div class="card-header">

            <div class="col-sm-12 d-flex justify-content-between p-3">
                <p class="text-capitalize"> <span class="font-weight-bold text-capitalize">Patient :</span> Madani ali</p>
                <p class="text-capitalize"><span class="font-weight-bold text-capitalize">Type d'handycape :</span> <span class="text-primary">RETARD MENTAL</span> </p>
                <div class="d-flex justify-content-between " id="btnADD">
                    <a href="" class="btn btn-primary">Ajouter a la list d'attente </a>
                </div>

                <!-- SEARCH FORM -->

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>

                        <th style="width: 5%">
                            N°
                        </th>
                        <th style="width: 20%">
                            Numero  dossier
                        </th>
                        <th style="width: 20%">
                            Prénom
                        </th>
                        <th style="width: 30%">
                            Téléphone
                        </th>

                        <th class="text-center" style="width: 15%">
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
                            Radi
                        </td>

                        <td>
                            Said
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            2
                        </td>
                        <td>
                            Ben
                        </td>

                        <td>
                            Ahmed
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            3
                        </td>
                        <td>
                            Chair
                        </td>

                        <td>
                            Yassin
                        </td>
                        <td>
                            0600000000
                        </td>


                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            4
                        </td>
                        <td>
                            lani
                        </td>

                        <td>
                            Fatima
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            5
                        </td>
                        <td>
                            Riyad
                        </td>

                        <td>
                            Anissa
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            6
                        </td>
                        <td>
                            Yamin
                        </td>

                        <td>
                            Mohammed
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>


                        </td>
                    </tr>
                    <tr>

                        <td>
                            7
                        </td>
                        <td>
                            Abom
                        </td>

                        <td>
                            Adil
                        </td>
                        <td>
                            0600000000
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>


                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

        <!-- /.card-body -->
    </div>

    <!-- <div class="d-flex">
                <h1>hkhk</h1>
            </div> -->
    <div class="justify-content-between d-flex">
        <div>
            <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
            <button class="btn btn-primary" data-target="#orientation-part">Enregistrer</button>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <div class="mr-2">
            <label class="text-secondary" for="">Total : 7</label>
            <div class="line"></div>
        </div>

    </div>


    <div>

    </div>
</div>
<script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    function done() {
        Swal.fire({
            title: '',
            text: "Le dossier a été ajouter à la liste d'attente",
            icon: 'success',
            confirmButtonText: 'OK',


        }).then(function() {
            window.location = "./DossierBeneficiairesManager.php";
        })
    }
</script>