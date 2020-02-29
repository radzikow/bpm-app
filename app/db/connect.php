<?php

/* ======================================== */

//  NOTE: The purpose of this file is to connect application with the server/database.

/* ======================================== */


$servername = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'bpm_sys';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno) {
  die('Server connection error: ' . $conn->error);
} else {
  // echo "Server connection successful!";
  // echo "<br>";
}

// $conn->close();
