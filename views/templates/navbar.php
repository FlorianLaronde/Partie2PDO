<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="/controllers/homeCtrl.php">Home</a>

    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/controllers/ajout-patientCtrl.php">Ajouter patient</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/controllers/patientListCtrl.php">Liste des patients</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/controllers/appointmentListCtrl.php">Liste des rendez-vous</a>
        </li>

      </ul>
    </div>
  </div>
</nav>