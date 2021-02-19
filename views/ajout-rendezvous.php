<!-- Formulaire -->
<form method="POST" action="">

     <!-- Nom du patient -->
     <div class="mb-4">
        <div>

        <p class="h4 mb-4 text-center">Prendre un rendez-vous</p>

        <label class="form-label" for="idPatients"></label>
        <select class="form-control mb-4" name="idPatients" id="idPatients" required>
            <option selected>Choisissez un patient</option>
            <!-- patients est un tableau de tous mes patients -->
            <!-- patient est une variable qu'on créée  -->
            <?php foreach($patients as $patient) {?>

            <option value="<?=$patient->id?>">    <?=$patient->lastname?>   <?=$patient->firstname?>    </option>
            
            <?php } ?>

        </select>
            <div id="idPatients_error" class="form-text"><?= $errorsArray['idPatients_error'] ?? ''?></div>
        </div>
  

        <!-- Heure et date de rendez-vous -->
        <div class="mb-4">
            <div class="form-outline">   
                <label for="dateHour" class="form-label">Date et heure de votre rendez-vous :</label>
                <input type="datetime-local" value="<?= $_POST['dateHour'] ?? '' ?>" class="form-control" id="dateHour" name="dateHour" 
                required >
                <div id="dateHour_error" class="form-text"><?= $errorsArray['dateHour_error'] ?? ''?></div>
            </div>
        </div> 
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 mx-auto w-50">Enregistrer</button>