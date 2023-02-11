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
    <a href="./index.php/?action=listPatients">Liste des patients</a>
    <!-- <a href="./templates/list-appointments.php">Liste des rendez-vous</a> -->
  </div>

  <article>
    <h2>L'hôpital de Saint-Gilles</h2>
    <div>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, neque.
    </div>
  </article>
</body>

<?php
$content = ob_get_clean();
echo $content;