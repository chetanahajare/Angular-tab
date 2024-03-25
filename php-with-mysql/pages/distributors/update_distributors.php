<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['distributorId'], $_POST['distributorsName'], $_POST['company'], $_POST['email'], $_POST['phone1'], $_POST['phone2'], $_POST['city'], $_POST['province'], $_POST['distributorsAddress'])) {
        $distributorId = $_POST['distributorId'];
        $distributorsName = $_POST['distributorsName'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone1 = $_POST['phone1'];
        $phone2 = $_POST['phone2'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $distributorsAddress = $_POST['distributorsAddress'];

        // Update query
        $sql = "UPDATE distributors SET distributorsName=?, company=?, email=?, phone_no_1=?, phone_no_2=?, city=?, province=?, distributorsAddress=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssi", $distributorsName, $company, $email, $phone1, $phone2, $city, $province, $distributorsAddress, $distributorId);

        if ($stmt->execute()) {
            header("Location: /pages/distributors/distributors.php?success=Distributor updated successfully");
            exit();
        } else {
            header("Location: /pages/distributors/distributors.php?error=Error updating distributor: " . $conn->error);
            exit();
        }
    } else {
        header("Location: /pages/distributors/distributors.php?error=Missing parameters");
        exit();
    }
} else {
    header("Location: /pages/distributors/distributors.php");
    exit();
}
