<?php
include '../src/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $country_id = $_POST['country_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    
    $sql = "UPDATE Villes SET pays_id = '$country_id', nom = '$name', description = '$description', type = '$type' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "City updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    
    header("Location: ../index.php");
    exit();
}
?>
