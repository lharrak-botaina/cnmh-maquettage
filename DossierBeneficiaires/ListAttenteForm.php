<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.css" />

    
</head>
<div id="ListAttente-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    
            <div class="d-flex justify-content-start">
                
              
               
                <div class="calendar">
                    <div class="month background text-capitalize">Avril</div>
                    <div class="day text-capitalize">Lundi</div>
                    <div class="date">3</div>
                    <div class="time background">10:00 EST  15:00 GMT</div>
                </div>
                <div class="form-group col-6 info mt-3">
                    <p class="mt-3 text-capitalize"> <span class="font-weight-bold text-capitalize">Parent :</span > lharrak botaina</p>
                 <p class="text-capitalize"> <span class="font-weight-bold text-capitalize">Patient :</span> nada stito</p>
                 <p class="text-capitalize"><span class="font-weight-bold text-capitalize">Type d'handycape :</span> <span class="text-primary">RETARD MENTAL</span> </p>
                </div>
             
           
               
           
                 
               
                
                
                
            </div>
            <!-- <div class="d-flex">
                <h1>hkhk</h1>
            </div> -->
              <div>
              <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary"   data-target="#orientation-part"  onclick="done()" >Enregistrer </button>
                      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              </div>
              
               
            <div>
                
            </div>
</div>
<script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    function done(){
    Swal.fire({
  title: '',
  text: "Le dossier a été ajouter à la liste d'attente",
  icon: 'success',
  confirmButtonText: 'OK',
  
  
}).then(function() {
    window.location = "./DossierPatientManager.php";
})}
</script>
