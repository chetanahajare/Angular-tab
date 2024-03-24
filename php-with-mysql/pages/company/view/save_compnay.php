<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../../db/db_connection.php';

    if (isset($_POST['name'])) {
        $cityName = $_POST['name'];
        $sql = "INSERT INTO company (name) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name,);

        if ($stmt->execute()) {
            header("Location: /pages/city/cities.php?success=City added successfully");
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
