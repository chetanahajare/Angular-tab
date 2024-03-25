<?php
include '../../db/db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $distributorName = $_POST['distributorName'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone_no_1 = $_POST['phone_no_1'];
    $phone_no_2 = $_POST['phone_no_2'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $distributorsAddress = $_POST['distributorsAddress'];
    $sql = "INSERT INTO distributors (distributorsName, company, email, phone_no_1, phone_no_2, city, province, distributorsAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $distributorName, $company, $email, $phone_no_1, $phone_no_2, $city, $province, $distributorsAddress);

    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }
}
