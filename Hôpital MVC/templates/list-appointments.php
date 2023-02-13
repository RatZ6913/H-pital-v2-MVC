<?php
ob_start();

require_once('./src/controllers/list-appointments.php');

// include_once __DIR__ . './../src/includes/head.php';
// include_once __DIR__ . './../src/includes/header.php';

$title = "Liste des rendez-vous";
?>

<body>
  <section>
    <div>
      <!-- <a href="./">Retour page d'accueil</a> -->
    </div>
    <h1>Voici la liste de tous les rendez-vous</h1>
  </section>

  <section class="container">
    <?php
    $count = 1;
    foreach ($appointment->getListAppointments() as $appointments) {
    ?>
      <div class="appointments">
        <p>Rendez-vous numéro : <?= $count++ ; ?></p>
        <p>Le : <?= $appointments['date']; ?></p>
        <p>À <?= $appointments['time']; ?></p>
        <a href="./?action=addAppointments">Ajouter un rendez-vous</a>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>?action=addAppointments" method="POST">
          <input type="submit" name="delete" value="Supprimer">
        </form>
      </div>
    <?php
    }
    ?>
  </section>
</body>

<?php
$content = ob_get_clean();
