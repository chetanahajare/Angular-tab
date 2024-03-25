<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['distributors_name'], $_POST['distributors_email'], $_POST['phone1_url'], $_POST['phone2_url'], $_POST['city'], $_POST['province'], $_POST['address'])) {
        $distributors_name = $_POST['distributors_name'];
        $distributors_email = $_POST['distributors_email'];
        $phone1_url = $_POST['phone1_url'];
        $phone2_url = $_POST['phone2_url'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $address = $_POST['address'];

        $sql = "INSERT INTO distributors (distributors_name, distributors_email, distributorsPhone_1, distributorsPhone_2, distributorsCity, distributorsProvince, distributorsAddress) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $distributors_name, $distributors_email, $phone1_url, $phone2_url, $city, $province, $address);

        if ($stmt->execute()) {
            header("Location: /pages/distributors/distributors.php?success=Distributor added successfully");
            exit();
        } else {
            header("Location: /pages/distributors/distributors.php?error=Error adding distributor: " . $conn->error);
            exit();
        }
    } else {
        header("Location: /pages/distributors/distributors.php?error=Missing parameters");
        exit();
    }
} else {
    header("Location: /error.php");
    exit();
}
