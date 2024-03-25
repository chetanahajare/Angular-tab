<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['productId'])) {
        include '../../../db/db_connection.php';
        $productId = $_POST['productId'];
        $sql = "DELETE FROM products WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $productId);
        if ($stmt->execute()) {
            echo "Product deleted successfully.";
            exit();
        } else {
            echo "Error deleting product: " . $stmt->error;
            exit();
        }
    } else {
        echo "Product ID is missing in the POST data.";
        exit();
    }
} else {
    // Request method is not POST
    echo "Invalid request method.";
    exit();
}
?>
