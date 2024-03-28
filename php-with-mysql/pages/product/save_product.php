<?php
include '../../db/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $company = $_POST['company'];
    $sideEffects = $_POST['side_effects'];
    $mrp = $_POST['mrp'];
    $composition = $_POST['composition'];
    $package = $_POST['package'];
    $substitute = $_POST['substitute'];

    $sql = "INSERT INTO products (ProductName, Company, SideEffects, MRP, Composition, Package, Substitute) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $productName, $company, $sideEffects, $mrp, $composition, $package, $substitute);
    if ($stmt->execute()) {
        header("Location: /pages/success.php");
        exit();
    } else {
        header("Location: /pages/error.php?error=" . urlencode($conn->error));
        exit();
    }
} else {
    header("Location: /pages/error.php?error=Invalid request method");
    exit();
}
