<?php
$title = "Page d'accueil";
require_once __DIR__ . './src/models/autoload.php';

include_once __DIR__ . './templates/list-patients.php';

try {

  if (isset($_GET['action']) == "listPatients" && !empty($_GET['action'])) {
    if (!empty($_GET['action'] === "listPatients")) {
      listPatients();
    } else {
      throw new Exception('Page non disponible');
    }
  } else {
    require_once("./templates/homepage.php");
  }
} catch (Exception $e) {
  throw new Exception('Erreur :' . $e->getMessage());
}

