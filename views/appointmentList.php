<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-dark">
              <thead>
                  <tr > 
                      <th scope="col">#</th>
                      <th scope="col">Jour du rendez-vous</th>
                      <th scope="col">Date du rendez-vous</th>
                  </tr>
              </thead>

              <tbody>

                <?php foreach($appointments as $value) { ?>
                    
                  <tr style="cursor: zoom-in;" onclick="location.href='/controllers/appointmentListCtrl?id=<?= $value->id; ?>'">
                      <td> <?= $value->id; ?>   </td>
                      <td> <?= $value->dateHour; ?> </td>
                      <td> <?= $value->idPatients; ?> </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>

              <button onclick="window.location.href = '/controllers/homeCtrl.php';" 
                      type="button" 
                      class="w-25 mt-4 btn btn-info">Modifier le rendez-vous</button>
        </div>
    </div>

</div>