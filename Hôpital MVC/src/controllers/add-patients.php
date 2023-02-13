<?php
require_once __DIR__ . './../models/class/patient.class.php';

function formAddPatient()
{
  require('./templates/add-patients.php');
  echo $content;
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $patient = new Patient();
  $patient->bindParam();

  $input = filter_input_array(INPUT_POST, [
    'lastname' => FILTER_SANITIZE_SPECIAL_CHARS,
    'firstname' => FILTER_SANITIZE_SPECIAL_CHARS,
    'birthdate' => FILTER_SANITIZE_NUMBER_INT,
    'phone' => FILTER_SANITIZE_NUMBER_INT,
    'mail' => FILTER_SANITIZE_EMAIL
  ]);

  $lastName = $input['lastname'] ?? '';
  $firstname = $input['firstname'] ?? '';
  $birthdate = $input['birthdate'] ?? '';
  $phone = $input['phone'] ?? '';
  $mail = $input['mail'] ?? '';

  if (
    empty($lastName) || empty($firstname)
    || empty($birthdate) || empty($phone)
    || empty($mail)
  ) {
    echo "Champ invalide ...";
  } else {
    // $patient = new Patient();

  }
}



