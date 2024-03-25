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
                <h1 class="text-bold text-center">Company</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search Company" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Company</button>
                </div>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Company Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php include 'fetch_company.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New Company</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="save_company.php">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>
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
            <form id="editForm" method="POST" action="update_company.php">
                <input type="hidden" id="editCompanyId" name="companyId">
                <div class="mb-4">
                    <label for="editCompanyName" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>
                    <input type="text" id="editCompanyName" name="companyName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var addModal = document.getElementById("myModal");
            var addBtn = document.getElementById("openModal");
            var addSpan = document.querySelector("#myModal .close");

            addBtn.onclick = function() {
                addModal.style.display = "block";
            }

            addSpan.onclick = function() {
                addModal.style.display = "none";
            }
            editBtns.forEach(function(editBtn) {
                editBtn.onclick = function() {
                    var companyId = editBtn.getAttribute("data-company-id");
                    var companyName = editBtn.getAttribute("data-company-name");
                    document.getElementById("editCompanyId").value = companyId;
                    document.getElementById("editCompanyName").value = companyName;
                    editModal.style.display = "block";
                }
            });
            editSpan.onclick = function() {
                editModal.style.display = "none";
            }
        });
    </script>

</body>

</html>