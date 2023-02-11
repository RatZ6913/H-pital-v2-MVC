<?php
ob_start();
$title = "Page d'accueil";
include_once __DIR__ . './../src/includes/head.php';
include_once __DIR__ . './../src/includes/header.php';
?>

<body>
  <section>
    <h1>Bienvenue sur la page d'accueil</h1>
  </section>

  <div>
    <h2>Accéder à :</h2>
    <a href="./templates/list-patients.php">Liste des patients</a>
    <a href="./templates/list-appointments.php">Liste des rendez-vous</a>
  </div>
</body>

<?php
ob_end_flush();
