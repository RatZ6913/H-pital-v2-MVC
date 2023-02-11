<?php

require_once('./src/controllers/list-appointments.php');

ob_start();

$title = "Liste des rendez-vous";
?>

<body>
  <section>
    <div>
      <a href="./">Retour page d'accueil</a>
    </div>
    <h1>Voici la liste de tous les rendez-vous</h1>
  </section>

  <?php
  foreach ($appointment->getListAppointments() as $appointments) {
  ?>
    <div>
      <p>Le : <?= $appointments['date']; ?></p>
      <p>À <?= $appointments['time']; ?></p>
    </div>
  <?php
  }
  ?>
</body>

<?php
$content = ob_get_clean();

