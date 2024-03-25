<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['distributorsId'])) {
        include '../../../db/db_connection.php';
        $cityId = $_POST['distributorsId'];
        $sql = "DELETE FROM distributors WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$distributorsId);
        if ($stmt->execute()) { 
            echo "distributors deleted successfully.";
            exit();
        } else {
            echo "Error deleting city: " . $stmt->error;
            exit();
        }
    } else {
        echo "City ID is missing in the POST data." . $distributorsId;
        exit();
    }
} else {
    // Request method is not POST
    echo "Invalid request method.";
    exit();
}
