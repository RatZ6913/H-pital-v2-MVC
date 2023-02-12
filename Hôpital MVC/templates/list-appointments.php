<?php
ob_start();

require_once('./src/controllers/list-appointments.php');

include_once __DIR__ . './../src/includes/head.php';
include_once __DIR__ . './../src/includes/header.php';

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
      <a href="./index.php?action=addAppointments">Ajouter un rendez-vous</a>
      <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ;?>?action=addAppointments" method="POST">
        <input type="submit" name="delete" value="Supprimer">
      </form>
    </div>
  <?php
  }
  ?>
</body>

<?php
$content = ob_get_clean();
