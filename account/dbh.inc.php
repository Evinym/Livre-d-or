<?php

$servername = "localhost";
$dBUsername = "joris";
$dBPassword = "kms2580!";
$dBName = "livredor";

$conn = mysqli_connect( $servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connexion echouer: ".mysqli_connect_error());
}