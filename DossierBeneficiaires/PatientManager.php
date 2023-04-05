<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    
<div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">
                            Pa
                            tients
                            </h3> -->

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <!-- <div class="d-flex justify-content-between">
                                        <a href="PatientForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div> -->
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Rechercher">
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
                                    <th style="width: 10%">  </th>
                                        <th style="width: 10%"> Image </th>
                                        <th style="width: 10%"> Nom </th>
                                        <th style="width: 10%"> Prenom </th>
                                        <th style="width: 10%"> Telephone </th>
                                        <th style="width: 20%" class="text-center"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="radio" name="patientRadio" aria-label="Radio button for following text input" checked>
                                        </td>
                                         <td> 
                                          <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset="">
                                        </td>
                                        <td> AHOUZI </td>
                                        <td> Hanan </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="patientRadio" aria-label="Radio button for following text input" >
                                        </td>
                                        <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td>
                                        <td> Mnari </td>
                                        <td> Karim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>
                                            
                                        </td>
                                    </tr>

                                   

                                   

                                  

                                   
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
              
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary" data-target="#orientation-part"   onclick="stepper1.next()">Next</button>
                      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</div>