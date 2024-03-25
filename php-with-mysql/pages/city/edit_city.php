<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../../db/db_connection.php';

    if (isset($_POST['cityId'], $_POST['cityName'], $_POST['stateName'], $_POST['imageUrl'])) {
        $cityId = $_POST['cityId'];
        $cityName = $_POST['cityName'];
        $stateName = $_POST['stateName'];
        $imageUrl = $_POST['imageUrl'];

        $sql = "UPDATE city SET city_name=?, state_name=?, image_url=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $cityName, $stateName, $imageUrl, $cityId);
        if ($stmt->execute()) {
            error_log("City updated successfully. City ID: $cityId");
            header("Location:/pages/city/cities.php?success=City updated successfully");
            exit();
        } else {
            error_log("Error updating city: " . $conn->error);
            header("Location:/pages/cities.php?error=Error updating city: " . $conn->error);
            exit();
        }
    } else {
        error_log("Missing parameters for city update");
        header("Location:/pages/cities.php?error=Missing parameters");
        exit();
    }
} else {
    error_log("Invalid request method");
    header("Location:/pages/cities.php");
    exit();
}
