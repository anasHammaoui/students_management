<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students_management";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  } catch(PDOException $e) {
  die("connection");
  }

echo "<br>";