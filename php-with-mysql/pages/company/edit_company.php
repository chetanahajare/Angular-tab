<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editCompanyId'], $_POST['editCompanyName'])) {
    // Include database connection
    include '../../../db/db_connection.php';

    // Get company ID and updated name from the form
    $companyId = $_POST['editCompanyId'];
    $newCompanyName = $_POST['editCompanyName'];

    // SQL query to update company name
    $sql = "UPDATE company SET name='$newCompanyName' WHERE id=$companyId";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the company listing page with success message
        header("Location: /pages/company/view/companies.php?success=Company updated successfully");
        exit();
    } else {
        // Redirect to the company listing page with error message
        header("Location: /pages/company/view/companies.php?error=Error updating company: " . $conn->error);
        exit();
    }
} else {
    // Redirect to error page if accessed directly without POST request or missing parameters
    header("Location: /error.php");
    exit();
}
