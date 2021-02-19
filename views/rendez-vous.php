<div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="/assets/img/rendezvous.jpg" alt="Profil du patient séléctionné">
            <div class="card-body">
            <h2>Informations Rendez-vous</h2>
                
                <!-- Convertit tous les caractères éligibles en entités HTML -->
                <p class="card-text">Date et heure  : <em> <?= htmlentities($patient->dateHour); ?> </em></p>

                <p class="card-text">ID du patient : <em> <?= htmlentities($patient->idPatients); ?> </em> </p>               
                
            </div>
        </div>


        <div class="text-center">
            <button type="button" class="w-50 mt-4 btn btn-info">Modifier le rendez-vous</button>

            <button type="reset" class="w-50 mt-2 btn btn-danger">Supprimer le rendez-vous</button>
        </div>



