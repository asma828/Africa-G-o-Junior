<?php
 include '../src/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $population = $_POST['population'];
    $languages = $_POST['languages'];
    $continent_id = $_POST['continent_id'];


    $sql = "INSERT INTO Pays (nom, population, langue, id_continent) VALUES ('$name', $population, '$languages', $continent_id)";

    
    if ($conn->query($sql) === TRUE) {
        echo "New country added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();


header("Location: ../index.php");
exit();
?>

