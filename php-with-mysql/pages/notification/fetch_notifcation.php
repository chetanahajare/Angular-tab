<?php
include '../../shared/paginator.php';
include '../../db/db_connection.php';

$default_limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = isset($_GET['limit']) ? $_GET['limit'] : $default_limit;
$start = ($page - 1) * $limit;

if ($conn) {
    $sql_count = "SELECT COUNT(*) AS total FROM notifications";
    $result_count = mysqli_query($conn, $sql_count);
    $data = mysqli_fetch_assoc($result_count);
    $total_pages = ceil($data['total'] / $limit);
    $sql = "SELECT * FROM notifications LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);
    echo '<table class="min-w-full divide-y divide-gray-200">';
    echo '<thead class="bg-gray-50">';
    echo '<tr>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Text</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>';
    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody class="bg-white divide-y divide-gray-200">';

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['messages'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['cityName'] . "</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>";
            echo "<button class='bg-red-500 text-white px-4 py-2 rounded-md deleteBtn' data-delete-id='{$row['id']}'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3' class='text-center'>No notifications found</td></tr>";
    }

    echo '</tbody> </table>';
    echo generatePagination($total_pages, $page, $limit);
    mysqli_close($conn);
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<script src="../../assets/js/pagination.js"></script>