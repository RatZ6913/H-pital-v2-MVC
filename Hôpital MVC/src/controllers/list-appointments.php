<?php

require_once __DIR__ . './../models/class/appointment.class.php';

function listAppointments(){

  $appointment = new Appointment();
  $appointment->getListAppointments();

  require('templates/list-appointments.php');
  echo $content;
}

