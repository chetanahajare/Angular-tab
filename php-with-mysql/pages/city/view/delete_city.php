<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cityId'])) {
        include '../../../db/db_connection.php';
        $cityId = $_POST['cityId'];
        $sql = "DELETE FROM city WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $cityId);
        if ($stmt->execute()) {
            echo "City deleted successfully.";
            exit();
        } else {
            echo "Error deleting city: " . $stmt->error;
            exit();
        }
    } else {
        echo "City ID is missing in the POST data." . $cityId;
        exit();
    }
} else {
    // Request method is not POST
    echo "Invalid request method.";
    exit();
}
