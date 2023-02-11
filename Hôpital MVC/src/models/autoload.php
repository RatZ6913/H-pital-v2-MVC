<?php

spl_autoload_register(function ($class) {
  require_once './src/models/class/' . $class . '.class.php';
});

$pdo = new Database();
$patient = new Patient();

// $comment = new Comment();
// $post = new Post();