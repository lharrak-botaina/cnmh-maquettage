<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div id="stepper2" class="d-flex">
             <div class="form-group col-6">
                
                <label>Image</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="file" placeholder="" class="form-control datetimepicker-input" />
                  </div>
              
              </div>
    </div>
            <div class="d-flex">
                
                <div class="form-group col-6">
                  <label> Nom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-6">
                  <label> Prénom </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-6 ">
                    <div class="form-group">
                    <label>Date Naissance</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" placeholder="" class="form-control datetimepicker-input" />
                        </div>
                    </div>
                </div>
                <div class="form-group col-6 ">
                  <label> Sexe </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <!-- <input type="text" class="form-control datetimepicker-input" /> -->
                                    <select type="text"class="form-control datetimepicker-input" class="btn btn-white dropdown-toggle ml-2" name="Sexe" id="filter">
                                        <option value="">Homme</option>
                                        <option value="">Femme</option>
                                    </select>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                    </div>
            </div>
               
            <div class="d-flex">
             
                <div class="form-group col-6">
                  <label> CIN </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-6">
                  <label> Téléphone </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                    </div>


            </div>
                 
                <div class="d-flex">
                <div class="form-group col-6">
                  <label> Adresse </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-6" >
                    <div class="form-group">
                    <label>Date Enregistrement</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" placeholder="" class="form-control datetimepicker-input" />
                        </div>
                </div>
                </div>
                
                </div>
              
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary" data-target="#orientation-part"   onclick="stepper1.next()">Next</button>
                      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </div>