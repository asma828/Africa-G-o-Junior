<?php
include '../src/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $country_id = $_POST['country_id'];
    $city_name = $_POST['city_name'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    
    $sql = "INSERT INTO Villes (pays_id, nom, description, type) VALUES ('$country_id', '$city_name', '$description', '$type')";

    if ($conn->query($sql) === TRUE) {
        echo "New city added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();

    header("Location: ../index.php");
    exit();
}
?>



