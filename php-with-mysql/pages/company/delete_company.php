<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteCompanyId'])) {
    // Include database connection
    include '../../../db/db_connection.php';

    // Get company ID from the form
    $companyId = $_POST['deleteCompanyId'];

    // SQL query to delete company
    $sql = "DELETE FROM company WHERE id=$companyId";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the company listing page with success message
        header("Location: /pages/company/view/companies.php?success=Company deleted successfully");
        exit();
    } else {
        // Redirect to the company listing page with error message
        header("Location: /pages/company/view/companies.php?error=Error deleting company: " . $conn->error);
        exit();
    }
} else {
    // Redirect to error page if accessed directly without POST request or missing parameters
    header("Location: /error.php");
    exit();
}
