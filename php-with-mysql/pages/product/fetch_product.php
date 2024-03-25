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
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['product_name'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['company'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['side_effects'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mrp'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['composition'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['package'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['substitute'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>";
            echo "<button class='bg-blue-500 text-white px-4 py-2 rounded-md deleteBtn' data-id='{$row['id']}' data-product-name='{$row['product_name']}' data-company='{$row['company']}' data-side-effects='{$row['side_effects']}' data-mrp='{$row['mrp']}' data-composition='{$row['composition']}' data-package='{$row['package']}' data-substitute='{$row['substitute']}'>Edit</button>";
            echo "<button class='bg-red-500 text-white px-4 py-2 rounded-md deleteBtn' data-id='{$row['id']}'>Delete</button>";
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
