<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['cityName'], $_POST['stateName'], $_POST['imageUrl'])) {
        $cityName = $_POST['cityName'];
        $stateName = $_POST['stateName'];
        $imageUrl = $_POST['imageUrl'];
        $sql = "INSERT INTO city (city_name, state_name, image_url) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $cityName, $stateName, $imageUrl);

        if ($stmt->execute()) {
            header("Location: /pages/city/city.php?success=City added successfully");
            exit();
        } else {
            header("Location: /pages/city/cities.php?error=Error adding city: " . $conn->error);
            exit();
        }
    } else {
        header("Location: /pages/city/cities.php?error=Missing parameters");
        exit();
    }
} else {
    header("Location: /error.php");
    exit();
}
