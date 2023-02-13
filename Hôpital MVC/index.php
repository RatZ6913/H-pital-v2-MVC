<?php
$title = "Page d'accueil";

require_once __DIR__ . './src/models/autoload.php';

include_once __DIR__ . './src/includes/head.php';
include_once __DIR__ . './src/includes/header.php';
include_once __DIR__ . './templates/list-patients.php';
include_once __DIR__ . './templates/list-appointments.php';
include_once __DIR__ . './templates/add-patients.php';

try {
  if (isset($_GET['action']) && !empty($_GET['action'])) {

    if ($_GET['action'] === "listPatients") {
      listPatients();
    } elseif ($_GET['action'] === "listAppointments") {
      listAppointments();
    } else if ($_GET['action'] === "addPatients") {
      formAddPatient();
    } else {
      throw new Exception('Page non disponible');
    }
  } else {
    require_once("./templates/homepage.php");
  }
} catch (Exception $e) {
  throw new Exception('Erreur : ' . $e->getMessage());
}
