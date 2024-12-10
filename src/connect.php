<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "Africa");

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}