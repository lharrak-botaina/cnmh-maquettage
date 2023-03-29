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
 <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                {{-- <h3 class="card-title">Quick Example</h3> --}}
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('typeHandicap.store')}}" method="post"  enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">type handicap</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{old("type_handicap")}}" name="type_handicap">
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{old("description")}}" name="description" placeholder="Enter discription">
                     
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ajouter</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>


    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->

  
  <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>