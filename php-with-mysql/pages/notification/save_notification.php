<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['messages']) && isset($_POST['cityName'])) {
    include '../../db/db_connection.php';
    $messages = $_POST['messages'];
    $cityName = $_POST['cityName'];
    $sql = "INSERT INTO notifications (cityName, messages) VALUES ('$cityName', '$messages')"; // Using variables directly
    if ($conn->query($sql) === TRUE) {
        header("Location: /pages/notification/notification.php?success=Notification added successfully");
        exit();
    } else {
        header("Location: /pages/error.php?error=Error adding Notification: " . $conn->error);
        exit();
    }
} else {
    echo json_encode(array("error" => "Invalid request"));
    exit();
}
