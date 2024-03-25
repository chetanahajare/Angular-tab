<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mediafind";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

if ($conn) {
    $sql = "SELECT * FROM feedback ";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['feedback'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['userName'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>";
            echo "<button class='bg-red-500 text-white px-4 py-2 rounded-md deleteBtn' data-delete-id='{$row['id']}'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4' class='text-center'>No cities found</td></tr>";
    }

    mysqli_close($conn);
} else {
    die("Connection failed: " . mysqli_connect_error());
}
