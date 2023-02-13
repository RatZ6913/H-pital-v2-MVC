<?php

require_once __DIR__ . './database.class.php';

class Patient extends Database {

  public int $id;
  public string $lastName;
  public string $firstName;
  public string $birthDate;
  public int $phone;
  public string $mail;

  public function __construct()
  {
    parent::__construct();
  }

  public function getListPatients() : array {
    $getListsPatients = $this->pdo->prepare("SELECT * FROM patients");
    $getListsPatients->execute();
    return $showListPatients = $getListsPatients->fetchAll();
  }

  public function addNewPatient() : array {
    $addNewPatient = $this->pdo->prepare("INSERT INTO patients (lastname, firstname, birthdate, phone, mail ) VALUES(:lastname, :firstname, :birthdate, :phone, :mail)
    ");
    $addNewPatient->bindParam('lastname', $this->lastName);
    $addNewPatient->bindParam('firstname', $this->firstName);
    $addNewPatient->bindParam('birthdate', $this->birthDate);
    $addNewPatient->bindParam('phone', $this->phone);
    $addNewPatient->bindParam('mail', $this->mail);
    return $addNewPatient;
  }

}
