<?php

require_once __DIR__ . './database.class.php';

class Appointment extends Database {

  private int $id;
  private string $dateHour;
  private int $idPatients;

  public function __construct()
  {
    parent::__construct();
  }

  public function getListAppointments(){
    $getListAppointments = $this->pdo->prepare("SELECT *, DATE(dateHour) as date, TIME(dateHour) as time
    FROM appointments");
    $getListAppointments->execute();
    return $showListAppointments = $getListAppointments->fetchAll();
  }


}

