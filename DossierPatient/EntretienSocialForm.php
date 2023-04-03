<div id="Entretien-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
   
            <div class="d-flex">
                
                <div class="form-group col-6">
                  <label> Responsable d'entretien </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-6">
                 
                   <div class="form-group">
                        <label> Type handicapé </label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>TSA</option>
                            <option>RETARD MENTAL</option>
                            <option>TRISOMIE 21</option>
                            <option>IMC</option>
                            <option>RPM</option>
                            <option>RETARD DE LANGUAGE</option>
                            <option>HANDICAP MOTEUR</option>
                            <option>AUTRES</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-6 ">
                    <div class="form-group">
                        <label>Couverture médicale </label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>CNOPS</option>
                            <option>CNSS</option>
                            <option>ramed</option>
                            <option>FAR</option>
                            <option>ASSURANCE</option>
                            <option>Ne sait pas</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <div class="form-group">
                        <label>Situation Familiale</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>Marié</option>
                            <option>Divorcé</option>
                            <option>Veuf</option>
                            <option>Célibataire</option>
                            
                        </select>
                    </div>
                </div>
               
                
            </div>
            <div class="d-flex">
             
                <div class="form-group col-6">
                    <label> Niveau Scolaire </label>
                        <div class="d-flex">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="checkbox" id="customCheckbox5" >
                                <label for="customCheckbox5" class="custom-control-label">Prescolaire </label>
                                
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="checkbox" id="customCheckbox5" >
                                <label for="customCheckbox5" class="custom-control-label">Primaire </label>
                            
                                
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="checkbox" id="customCheckbox5" >
                                <label for="customCheckbox5" class="custom-control-label">Collégial </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="checkbox" id="customCheckbox5" >
                                <label for="customCheckbox5" class="custom-control-label">Secondaire </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="checkbox" id="customCheckbox5" >
                                <label for="customCheckbox5" class="custom-control-label">Univairsitaire </label>
                            </div>
                            
                        </div>
                    
                    
                </div>
                
            </div>
                 
                <div class="d-flex">

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