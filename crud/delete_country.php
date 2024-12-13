<?php
include '../src/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM Pays WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Country deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("Location: ../index.php");
    exit();
}
?>
