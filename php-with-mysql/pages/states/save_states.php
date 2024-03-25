<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    include '../../db/db_connection.php';
    $name = $_POST['name'];
    $sql = "INSERT INTO states (stateName) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        header("Location: /pages/states/states.php?success=Company added successfully");
        exit();
    } else {
        header("Location: /pages/error.php?error=Error adding Company: " . $conn->error);
        exit();
    }
    exit();
} else {
    echo json_encode(array("error" => "Invalid request"));
    exit();
}
