<?php
ob_start();

require_once('./src/controllers/list-patients.php');
include_once __DIR__ . './../src/includes/head.php';
include_once __DIR__ . './../src/includes/header.php';

$title = "Liste des patients";

?>

<body>
  <section>
    <div>
      <!-- <a href="./">Retour page d'accueil</a> -->
    </div>
    <h1>Voici la liste de tous les patients</h1>
  </section>

  <section class="container">
    <?php
    foreach ($patient->getListPatients() as $patients) {
    ?>
      <div class="patients">
        <p><?= $patients['lastname']; ?></p>
        <p><?= $patients['firstname']; ?></p>
        <p><?= $patients['birthdate']; ?></p>
        <p><?= $patients['phone']; ?></p>
        <p><?= $patients['mail']; ?></p>
        <a href="./?action=addPatients">Ajouter un patient</a>
        <input type="submit" name="delete" value="Supprimer">
      </div>
    <?php
    }
    ?>
  </section>
</body>

<?php
$content = ob_get_clean();
