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
