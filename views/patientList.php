<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-dark">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Date de naissance</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Adresse Mail</th>
                  </tr>
              </thead>
              <tbody>

                <?php foreach($patients as $value) { ?>

                  <tr>
                      <td> <?= $value->id; ?> </td>
                      <td> <?= $value->lastname; ?> </td>
                      <td> <?= $value->firstname; ?> </td>
                      <td> <?= $value->birthdate; ?> </td>
                      <td> <?= $value->phone; ?> </td>
                      <td> <?= $value->mail; ?> </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
        </div>
    </div>

</div>


