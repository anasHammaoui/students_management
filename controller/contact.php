<?php

include("../model/contact.php");
include("../config/connection.php");

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$number = $_POST["number"];
$message = $_POST["message"];

if(addContactinfo($conn, $lastName, $firstName, $number, $message)) {
    header("Location: ../index.php?success=1");
} else {
    header("Location: ../index.php?error=1");
}