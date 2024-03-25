<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['companyId'], $_POST['companyName'])) {
        $companyId = $_POST['companyId'];
        $companyName = $_POST['companyName'];

        $sql = "UPDATE company SET companyName=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $companyName, $companyId);

        if ($stmt->execute()) {
            error_log("Company updated successfully. Company ID: $companyId");
            header("Location:/pages/company/company.php?success=Company updated successfully");
            exit();
        } else {
            error_log("Error updating company: " . $conn->error);
            header("Location:/pages/error.php?error=Error updating company: " . $conn->error);
            exit();
        }
    } else {
        error_log("Missing parameters for company update");
        header("Location:/pages/error.php?error=Missing parameters");
        exit();
    }
} else {
    error_log("Invalid request method");
    header("Location:/pages/error.php");
    exit();
}
