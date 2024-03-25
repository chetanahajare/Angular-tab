<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../../db/db_connection.php';

    if (isset($_POST['distributorsId'], $_POST['distributorsName'], $_POST['distributorsEmail'], $_POST['distributorsPhone_1'],$_POST['distributorsPhone_2'],$_POST['distributorsCity'],$_POST['distributorsProvince'],$_POST['distributorsAddress'])) {
        $distributorsId = $_POST['distributorId'];
        $distributorsName = $_POST['distributorName'];
        $distributorsName = $_POST['companyName'];
        $distributorsEmail = $_POST['email'];
        $distributorsPhone_1 = $_POST['phone1'];
        $distributorsPhone_2 = $_POST['phone2'];
        $distributorsCity = $_POST['city'];
        $distributorsProvince = $_POST['province'];
        $distributorsAddress = $_POST['address'];

        $sql = "UPDATE distributors SET name=?, company=?, email=?, phone_no_1=?, phone_no_2=?, city=?,province=?, address=?, WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi",$distributorsId ,$distributorsName ,$distributorsEmail, $distributorsPhone_1,$distributorsPhone_2,$distributorsCity, $distributorsProvince, $distributorsAddress);
        if ($stmt->execute()) {
            error_log("City updated successfully. Distributors ID:$distributorsId");
            header("Location:/pages/distributors/distributors.php?success=Distributor updated successfully");
            exit();
        } else {
            error_log("Error updating city: " . $conn->error);
            header("Location:/pages/distributors.php?error=Error updating city: " . $conn->error);
            exit();
        }
    } else {
        error_log("Missing parameters for city update");
        header("Location:/pages/distributors.php?error=Missing parameters");
        exit();
    }
} else {
    error_log("Invalid request method");
    header("Location:/pages/distributors.php");
    exit();
}
