<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../db/db_connection.php';

    if (isset($_POST['productId'], $_POST['productName'], $_POST['company'], $_POST['sideEffects'], $_POST['mrp'], $_POST['composition'], $_POST['package'], $_POST['substitute'])) {
        $productId = $_POST['productId'];
        $productName = $_POST['productName'];
        $company = $_POST['company'];
        $sideEffects = $_POST['sideEffects'];
        $mrp = $_POST['mrp'];
        $composition = $_POST['composition'];
        $package = $_POST['package'];
        $substitute = $_POST['substitute']; 

        $sql = "UPDATE products SET product_name=?, company=?, side_effects=?, mrp=?, composition=?, package=?, substitute=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssi", $productName, $company, $sideEffects, $mrp, $composition, $package, $substitute, $productId);
        if ($stmt->execute()) {
            error_log("Product updated successfully. Product ID: $productId");
            header("Location:/pages/products.php?success=Product updated successfully");
            exit();
        } else {
            error_log("Error updating product: " . $conn->error);
            header("Location:/pages/products.php?error=Error updating product: " . $conn->error);
            exit();
        }
    } else {
        error_log("Missing parameters for product update");
        header("Location:/pages/products.php?error=Missing parameters");
        exit();
    }
} else {
    error_log("Invalid request method");
    header("Location:/pages/products.php");
    exit();
}
?>
