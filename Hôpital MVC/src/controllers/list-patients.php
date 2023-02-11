<?php

require_once __DIR__ . './../models/class/patient.class.php';


function listPatients(){

  $patient = new Patient();
  $patient->getListPatients();

  require('templates/list-patients.php');
  echo $content;
}

