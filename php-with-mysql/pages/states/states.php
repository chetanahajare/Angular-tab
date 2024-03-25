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
                <h1 class="text-bold text-center">State</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search State" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add State</button>
                </div>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            State Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php include 'fetch_states.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New States</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="save_states.php">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">States Name:</label>
                    <input type="text" id="name" name="name" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                </div>
                <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="editModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Edit Company</h2>
                <span class="close" onclick="closeEditModal()">&times;</span>
            </div>
            <form id="editForm" method="POST" action="update_states .php">
                <input type="hidden" id="editStateId" name="stateId">
                <div class="mb-4">
                    <label for="editStateName" class="block text-gray-700 text-sm font-bold mb-2">State Name:</label>
                    <input type="text" id="editStateName" name="stateName" class="border-gray-300 border rounded-md px-4 py-2">
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
            <form id="deleteForm" method="POST" action="delete_states.php">
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
            var editModal = document.getElementById("editModal");
            var editBtns = document.querySelectorAll(".editBtn");
            var editSpan = document.querySelector("#editModal .close");
            var deleteBtns = document.querySelectorAll(".deleteBtn");
            var deleteModal = document.getElementById("deleteModal");
            var deleteSpan = document.querySelector("#deleteModal .close");

            addBtn.onclick = function() {
                addModal.style.display = "block";
            }

            addSpan.onclick = function() {
                addModal.style.display = "none";
            }
            editBtns.forEach(function(editBtn) {
                editBtn.onclick = function() {
                    var companyId = editBtn.getAttribute("data-state-id");
                    var companyName = editBtn.getAttribute("data-state-name");
                    document.getElementById("editStateId").value = companyId;
                    document.getElementById("editStateName").value = companyName;
                    editModal.style.display = "block";
                }
            });
            editSpan.onclick = function() {
                editModal.style.display = "none";
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