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
            <div class="bs-stepper" id="stepper1">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Les parents</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Patient</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step"  id="step3" data-target="#orientation-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="orientation-part" id="orientation-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Orientation externe</span>
                      </button>
                    </div>
                    
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
               
                  
                  </div>
                </div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
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
                        <div class="card-header">
                            <!-- <h3 class="card-title">
                            Pa
                            tients
                            </h3> -->

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="ParentForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                    <!-- <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                                        <option value="">Nom</option>
                                        <option value="">Hamza</option>
                                        <option value="">Kamal</option>
                                    </select> -->
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Tapez vos mots-clés ici">
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
                                        <th style="width: 10%"> Nom </th>
                                        <th style="width: 10%"> Prenom </th>
                                        <th style="width: 10%"> Telephon </th>
                                        <th style="width: 10%" class="">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                   <td> AHOUZI </td>
                                        <td> Hanan </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="PatientManager.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                       <td> Mnari </td>
                                        <td> Karim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="PatientManager.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                       <td> alami </td>
                                        <td> Salma </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="PatientManager.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                       <td> Nwino </td>
                                        <td> Nabila </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="PatientManager.php"> <i class="fas fa-check"> </i> Suivre </a>
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
                            <ul class="pagination pagination my-0">
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
                        </div>
            </section>
            </form>
        
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
        $(document).ready(function() {
          $('#summernote').summernote({
        placeholder: 'Saisir une description du service.',
       
        height: 100
      });
            $('.dropdown-toggle').dropdown();
        });
    </script>


    <script src="../assets/plugins/bs-stepper/js/bs-stepper.js"></script>
    <script>
      var stepper1Node = document.querySelector('#stepper1')
      var stepper1 = new Stepper(document.querySelector('#stepper1'))
      stepper1Node.addEventListener('show.bs-stepper', function (event) {
  // You can call prevent to stop the rendering of your step
  // event.preventDefault()

  console.warn(event.detail.indexStep)
})

stepper1Node.addEventListener('shown.bs-stepper', function (event) {
  console.warn('step shown')
})
      
    </script>
</body>

</html>