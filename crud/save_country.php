<?php
include '../src/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $population = $_POST['population'];
    $languages = $_POST['languages'];

    
    $sql = "UPDATE Pays SET nom = '$name', population = '$population', langue = '$languages' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Country updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();

    
    header("Location: ../index.php");
    exit();
}
?>
