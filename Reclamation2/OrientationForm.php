<div id="orientation-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div id="stepper2" >
    <!-- <div class="card-body"> -->
                <!-- Date -->
                <!-- <div class="d-flex"> -->
                <div class="form-group ">
                  <label>Date Reclamation</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" value="Service medical" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>
                <div class="form-group">
                  <label>Description</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <!-- Date and time -->
                <!-- <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between">
                  <a href="ReclamationManager.php" class="btn btn-primary">Suivre</a></div>
              <div class="d-flex justify-content-between">
                  <a href="ReclamationManager.php" class="btn btn-secondary">Annuler</a>
                 </div>
                </div> -->


              <!-- /.card-body -->
            <!-- </div> -->
              
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <a href="DossierPatientManager.php" class="btn btn-primary">Enregestre</a>
                      <!-- <button href="DossierPatientManager.php" class="btn btn-primary" data-target="#orientation-part"   onclick="stepper1.next()">Next</button> -->
                      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>