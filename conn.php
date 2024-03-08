<?php

// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);



$host = "localhost";

$user = "root";

$pass = "mysql";

$db = "mpatra";



$conn = mysqli_connect($host, $user, $pass, $db);



if (mysqli_connect_error()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  exit();

}

?>