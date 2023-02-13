<?php

require_once __DIR__ . './../models/class/patient.class.php';
// require_once __DIR__ . './../../templates/add-patients.php';
var_dump($_POST);

if($_SERVER['REQUEST_METHOD'] === "POST"){

  $input = filter_input_array(INPUT_POST, [
    'lastname' => FILTER_SANITIZE_SPECIAL_CHARS,
    'firstname' => FILTER_SANITIZE_SPECIAL_CHARS,
    'birthdate' => FILTER_SANITIZE_NUMBER_INT,
    'phone' => FILTER_SANITIZE_NUMBER_INT,
    'mail' => FILTER_SANITIZE_EMAIL
  ]);

  if (empty(array_filter($input, function ($e) {
    // Si différent de '', affiche les erreurs. Si tout est vide, alors le form est validé
    // return $e !== '';
  }))) {


  }

}


function addPatient(){

  $patient = new Patient();
  

    require('./templates/add-patients.php');
    echo $content;
  
}