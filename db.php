<?php
// Php est éxécuté dans le contexte du container docker.
// Pour accéder à un autre container, il faut utiliser son nom: "db"
const DB_HOST = "db";
const DB_USER = "user";
const DB_PWD = "pissicat";
const DB_NAME = "master";
const DB_PORT = "3306";

$conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);
if( $conn->connect_error ) {
    die("Impossible de se connecter à la base de données.");
}
?>