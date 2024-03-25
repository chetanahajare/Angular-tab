<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $cityName = $_POST['cityName'];
    $stateName = $_POST['stateName'];
    $imageUrl = $_POST['imageUrl'];

    // Validate form data (you can add more validation as needed)
    if (empty($cityName) || empty($stateName) || empty($imageUrl)) {
        // Handle empty fields
        echo "All fields are required.";
    } else {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mysql";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare INSERT statement
        $sql = "INSERT INTO cities (cityname, statename, imgurl) VALUES (?, ?, ?)";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $cityName, $stateName, $imageUrl);

        // Execute the query
        if ($stmt->execute()) {
            echo "City added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $stmt->close();
        $conn->close();
    }
} else {
    // Redirect if accessed directly
    header("Location: ../index.php");
    exit();
}
?>
