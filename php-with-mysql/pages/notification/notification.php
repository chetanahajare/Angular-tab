<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="../../assets/style.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include '../../shared/header.php'; ?>
    <div class="flex">
        <?php include '../../shared/side-menu.php'; ?>
        <div class="container mx-auto p-4">
            <div class="flex justify-center py-4">
                <h1 class="text-bold text-center">Notification</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search State" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Notification</button>
                </div>
            </div>
            <?php include 'fetch_notifcation.php'; ?>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New City</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="save_notification.php">
                <div class="mb-4">
                    <label for="messages" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                    <input type="text" id="messages" name="messages" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['messages']) ? $_POST['messages'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="cityName" class="block text-gray-700 text-sm font-bold mb-2">City Name:</label>
                    <input type="text" id="cityName" name="cityName" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['cityName']) ? $_POST['cityName'] : ''; ?>">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="deleteModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Delete City</h2>
                <span class="close" onclick="closeDeleteModal()">&times;</span>
            </div>
            <form id="deleteForm" method="POST" action="delete_notification.php">
                <p>Are you sure you want to delete this Company?</p>
                <input type="hidden" id="deleteId" name="deleteId">
                <div class="flex justify-end">
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md mr-2">Yes</button>
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md" onclick="closeDeleteModal()">No</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var addModal = document.getElementById("myModal");
            var addBtn = document.getElementById("openModal");
            var addSpan = document.querySelector("#myModal .close");
            var deleteBtns = document.querySelectorAll(".deleteBtn");
            var deleteModal = document.getElementById("deleteModal");
            var deleteSpan = document.querySelector("#deleteModal .close");
            addBtn.onclick = function() {
                addModal.style.display = "block";
            }

            addSpan.onclick = function() {
                addModal.style.display = "none";
            }
            deleteBtns.forEach(function(deleteBtn) {
                deleteBtn.onclick = function() {
                    var cityId = deleteBtn.getAttribute("data-delete-id");
                    confirmDelete(cityId);
                }
            });

            function closeDeleteModal() {
                deleteModal.style.display = "none";
            }

            function confirmDelete(cityId) {
                document.getElementById("deleteId").value = cityId;
                deleteModal.style.display = "block";
            }

            deleteSpan.onclick = function() {
                closeDeleteModal();
            }
        });
    </script>
</body>

</html>