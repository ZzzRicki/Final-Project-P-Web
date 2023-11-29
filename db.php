<?php
    $host="103.72.77.100";
    $port="3307";
    $user = "libreria_usr";
    $password = "LibreriaUsrr$&";
    $database = "dblibreria";

    try {
      $db = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  ?>