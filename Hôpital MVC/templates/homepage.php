<?php

$title = "Page d'accueil";

ob_start();

?>

<body>
  <section>
    <h1>Bienvenue sur la page d'accueil</h1>
  </section>

  <div>
    <h2>Accéder à :</h2>
    <a href="./?action=listPatients">Liste des patients</a>
    <a href="./?action=listAppointments">Liste des rendez-vous</a>
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

