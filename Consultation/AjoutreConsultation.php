<div id="orientation-part" class="content" role="tabpanel" aria-labelledby="orientation-part-trigger">
<div class="d-flex">

                <div class="form-group col-6">
                  <label> DateEnregistrement </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-6">
                  <label> DateConsultation </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                <div class="d-flex">
               
                <div class="form-group">
                  <label>Observation</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="Observation" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                <div class="d-flex">
                <div class="form-group">
                  <label>Remarque</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="Remarque" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                <div class="d-flex">
                
                <div class="form-group">
                  <label>Diagnostic</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="Diagnostic" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                     
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary"   onclick="stepper1.next()">Next</button>
</div>