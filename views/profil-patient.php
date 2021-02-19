<div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="/assets/img/profil.webp" alt="Profil du patient séléctionné">
            <div class="card-body">
            <h2>Informations Patient</h2>
                
                <!-- Convertit tous les caractères éligibles en entités HTML -->
                <p class="card-text">Nom du patient : <em> <?= htmlentities($patient->lastname); ?> </em></p>

                <p class="card-text">Prénom du patient : <em> <?= htmlentities($patient->firstname); ?> </em> </p>               

                <p class="card-text">Date de naissance du patient : <em> <?= htmlentities($patient->birthdate); ?> </em></p>
                
                <p class="card-text">Téléphone du patient : <em> <?= htmlentities($patient->phone); ?> </em></p>
               
                <p class="card-text">Mail du patient : <em> <?= htmlentities($patient->mail); ?> </em></p>
                
            </div>
        </div>


        <div class="text-center">

        <button onclick="window.location.href = '/controllers/updatePatientCtrl.php?id=<?=$patient->id?>';" 
                type="button" 
                class="w-50 mt-4 btn btn-info">Modifier le patient</button>

            <button type="reset" class="w-50 mt-2 btn btn-danger">Supprimer le patient</button>
        </div>


