<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['deleteId'])) {
        include '../../db/db_connection.php';
        $deleteId = intval($_POST['deleteId']);
        $sql = "DELETE FROM notifications WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $deleteId);

        if ($stmt->execute()) {
            header("Location: /pages/notification/notification.php?success=Notification deleted successfully");
            exit();
        } else {
            header("Location: error.php?error=" . urlencode("Error deleting company: " . $stmt->error));
            exit();
        }
        $stmt->close();
        $conn->close();
    } else {
        header("Location: error.php?error=Company ID is missing in the POST data");
        exit();
    }
} else {
    header("Location: error.php?error=Invalid request method");
    exit();
}
