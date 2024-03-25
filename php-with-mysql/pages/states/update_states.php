<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['stateId'], $_POST['stateName'])) {
        $stateId = $_POST['stateId'];
        $stateName = $_POST['stateName'];

        $sql = "UPDATE states SET stateName=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $stateName, $stateId);

        if ($stmt->execute()) {
            error_log("Company updated successfully. Company ID: $stateId");
            header("Location:/pages/states/states.php?success=States updated successfully");
            exit();
        } else {
            error_log("Error updating company: " . $conn->error);
            header("Location:/pages/error.php?error=Error updating states: " . $conn->error);
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
