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
    $sql = "SELECT * FROM distributors";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['name'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['company'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['email'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['phone_no_1'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['phone_no_2'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['city'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['province'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['address'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>";
            echo "<button class='bg-blue-500 text-white px-4 py-2 rounded-md editBtn' data-distributors-id='{$row['id']}' data-distributors-name='{$row['name']}' 
  data-company-name='{$row['company']}'
             data-distributors-email='{$row['email']}' data-phone1-url='{$row['phone_no_1']}' data-phone2-url='{$row['phone_no_2']}' data-distributorsCity='{$row['city']}' data-distributorsProvince='{$row['province']}' data-distributorsAddress='{$row['address']}' >Edit</button> ";
            echo "<button class='bg-red-500 text-white px-4 py-2 rounded-md deleteBtn' data-id='{$row['id']}' >Delete</button>";
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
