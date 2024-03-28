<?php
include '../../shared/paginator.php';
include '../../db/db_connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

$default_limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = isset($_GET['limit']) ? $_GET['limit'] : $default_limit;
$start = ($page - 1) * $limit;

if ($conn) {
    $count_sql = "SELECT COUNT(*) AS total FROM distributors";
    $count_result = mysqli_query($conn, $count_sql);
    $count_data = mysqli_fetch_assoc($count_result);
    $total_records = $count_data['total'];
    $total_pages = ceil($total_records / $limit);
    $sql = "SELECT * FROM distributors LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);
    echo '<table class="min-w-full divide-y divide-gray-200">';
    echo '<thead class="bg-gray-50">';
    echo '<tr>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone No 1.</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone No 2.</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Province</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody class="bg-white divide-y divide-gray-200">';

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['distributorsName'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['company'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['email'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['phone_no_1'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['phone_no_2'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['city'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['province'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['distributorsAddress'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>";
            echo "<button class='bg-blue-500 text-white px-4 py-2 rounded-md editBtn' data-id='{$row['id']}' data-name='{$row['distributorsName']}' data-company='{$row['company']}' data-email='{$row['email']}' data-phone1='{$row['phone_no_1']}' data-phone2='{$row['phone_no_2']}' data-city='{$row['city']}' data-province='{$row['province']}' data-address='{$row['distributorsAddress']}'>Edit</button> ";
            echo "<button class='bg-red-500 text-white px-4 py-2 rounded-md deleteBtn' data-delete-id='{$row['id']}'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9' class='text-center'>No records found</td></tr>";
    }
    echo '</tbody>';
    echo '</table>';
    echo generatePagination($total_pages, $page, $limit);

    mysqli_close($conn);
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<script src="../../assets/js/pagination.js"></script>