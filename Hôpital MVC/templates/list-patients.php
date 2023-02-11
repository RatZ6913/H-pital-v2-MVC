<?php

require_once('./src/controllers/list-patients.php');

ob_start();

$title = "Liste des patients";
?>

<body>
  <section>
    <h1>Voici la liste de tous les patients</h1>
  </section>

  <div>
    <?php
    foreach ($patient->getListPatients() as $patients) {
    ?>
    <p><?= $patients['lastname']; ?></p>
    <p><?= $patients['firstname']; ?></p>
    <p><?= $patients['birthdate']; ?></p>
    <p><?= $patients['phone']; ?></p>
    <p><?= $patients['mail']; ?></p>
    <?php
    }
    ?>
  </div>
</body>

<?php
$content = ob_get_clean();
