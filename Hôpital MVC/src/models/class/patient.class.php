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

  public function getListPatients() : array{
    $getListsPatients = $this->pdo->prepare("SELECT * FROM patients");
    $getListsPatients->execute();
    return $showListPatients = $getListsPatients->fetchAll();
  }
}
