<!-- Formulaire -->
<form method="POST" action="">

    
    <h3 class="my-4">Modifier le Patient</h3>
    <!-- NOM -->
    <div class="mb-4">
        <div class="form-outline">   
            <input type="text" value="<?= $lastname ?? '' ;?>" class="form-control" id="name" name="name" 
            required  pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
            <label for="name" class="form-label">Name :</label>
            <div id="name_error" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
        </div>
    </div>


     <!-- PRENOM -->
     <div class="mb-4">
        <div class="form-outline">   
            <input type="text" value="<?= $firstname ?? '' ;?>" class="form-control" id="firstName" name="firstName" 
            required  pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
            <label for="firstName" class="form-label">FirstName :</label>
            <div id="firstName_error" class="form-text"><?= $errorsArray['firstName_error'] ?? ''?></div>
        </div>
    </div>


     <!-- Date d'anniversaire -->
     <div class="mb-4">
        <div class="form-outline">   
            <input type="date" value="<?= $birthdate ?? '' ;?>" class="form-control" id="birthDate" name="birthDate" 
            required  pattern="^\d{4}-\d{2}-\d{1,2}$">
            <label for="birthDate" class="form-label">BirthDate :</label>
            <div id="birthDate_error" class="form-text"><?= $errorsArray['birthDate_error'] ?? ''?></div>
        </div>
    </div>


     <!-- TELEPHONE -->
     <div class="mb-4">
        <div class="form-outline">   
            <input type="tel" value="<?= $phone ?? '' ;?>" class="form-control" id="phone" name="phone" 
            pattern="([+0-9]{1,3}[0-9]{8,12})|[0-9]{8,15}   ">
            <label for="phone" class="form-label">Phone :</label>
            <div id="phone_error" class="form-text"><?= $errorsArray['phone_error'] ?? ''?></div>
        </div>
    </div>


     <!-- MAIL -->
     <div class="mb-4">
        <div class="form-outline">   
            <input type="email" value="<?= $mail ?? '' ;?>" class="form-control" id="mail" name="mail" 
            required  pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
            <label for="mail" class="form-label">Mail :</label>
            <div id="mail_error" class="form-text"><?= $errorsArray['mail_error'] ?? ''?></div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 w-50 mx-auto">Enregistrer les nouvelles données</button>











       