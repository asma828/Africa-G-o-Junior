<?php
include '../src/connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM Villes WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "City deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();


    header("Location: ../index.php");
    exit();
}
?>
