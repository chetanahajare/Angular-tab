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
                <h1 class="text-bold text-center">Cities</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search City" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add City</button>
                </div>
            </div>
            <?php include 'fetch_cities.php'; ?>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New City</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="save_city.php">
                <div class="mb-4">
                    <label for="cityName" class="block text-gray-700 text-sm font-bold mb-2">City Name:</label>
                    <input type="text" id="cityName" name="cityName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="stateName" class="block text-gray-700 text-sm font-bold mb-2">State Name:</label>
                    <input type="text" id="stateName" name="stateName" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['stateName']) ? $_POST['stateName'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="imageUrl" class="block text-gray-700 text-sm font-bold mb-2">Image Url:</label>
                    <input type="text" id="imageUrl" name="imageUrl" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['imageUrl']) ? $_POST['imageUrl'] : ''; ?>">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="editModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Edit City</h2>
                <span class="close" onclick="closeEditModal()">&times;</span>
            </div>
            <form id="editForm" method="POST" action="update_city.php">
                <input type="hidden" id="editCityId" name="cityId">
                <div class="mb-4">
                    <label for="editCityName" class="block text-gray-700 text-sm font-bold mb-2">City Name:</label>
                    <input type="text" id="editCityName" name="cityName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editStateName" class="block text-gray-700 text-sm font-bold mb-2">State Name:</label>
                    <input type="text" id="editStateName" name="stateName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editImageUrl" class="block text-gray-700 text-sm font-bold mb-2">Image Url:</label>
                    <input type="text" id="editImageUrl" name="imageUrl" class="border-gray-300 border rounded-md px-4 py-2">
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
            <form id="deleteForm" method="POST" action="delete_city.php">
                <p>Are you sure you want to delete this city?</p>
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
            var editModal = document.getElementById("editModal");
            var editBtns = document.querySelectorAll(".editBtn");
            var editSpan = document.querySelector("#editModal .close");

            editBtns.forEach(function(editBtn) {
                editBtn.onclick = function() {
                    var cityId = editBtn.getAttribute("data-city-id");
                    var cityName = editBtn.getAttribute("data-city-name");
                    var stateName = editBtn.getAttribute("data-state-name");
                    var imageUrl = editBtn.getAttribute("data-image-url");
                    document.getElementById("editCityId").value = cityId;
                    document.getElementById("editCityName").value = cityName;
                    document.getElementById("editStateName").value = stateName;
                    document.getElementById("editImageUrl").value = imageUrl;
                    editModal.style.display = "block";
                }
            });

            editSpan.onclick = function() {
                editModal.style.display = "none";
            }
        });
    </script>
    <script src='../../assets/js/addData.js'></script>
    <script src='../../assets/js/deleteData.js'></script>
</body>

</html>