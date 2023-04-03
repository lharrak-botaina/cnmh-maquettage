<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
<div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
<div class="d-flex">
<div class="card-body">
<div class="form-group">

                  <label>DateRendezVous</label>
                 
                  
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="date" id="meeting-time"
                  value="2023-07-22">

                      <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div> -->
                  </div>
                </div>
                <div class="form-group">

                  <label>HeureDebut</label>
                 
                  
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="date" id="meeting-time"
                  value="datetime-local">

                      <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div> -->
                  </div>
                </div>
                <div class="form-group">
                  <label>Description</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                </div>
                <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary"   onclick="stepper1.next()">Next</button>
</div>
</body>
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
</html>
