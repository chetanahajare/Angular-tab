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
                <h1 class="text-bold text-center">Distributors</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search State" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Distributors</button>
                </div>
            </div>
            <?php include 'fetch_distributors.php'; ?>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New Distributor</h2>
                <span class="close" onclick="closeAddModal()">&times;</span>
            </div>
            <form id="addForm" method="POST" action="save_distributors.php" style="overflow-y: scroll; height:300px;">
                <div class="mb-4">
                    <label for="addDistributorName" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="addDistributorName" name="distributorName" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['distributorName']) ? $_POST['distributorName'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addCompanyName" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                    <input type="text" id="addCompanyName" name="company" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['company   ']) ? $_POST['company  '] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addEmail" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="addEmail" name="email" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addPhone1" class="block text-gray-700 text-sm font-bold mb-2">Phone No 1.:</label>
                    <input type="text" id="addPhone1" name="phone_no_1" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['phone_no_1']) ? $_POST['phone_no_1'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addPhone2" class="block text-gray-700 text-sm font-bold mb-2">Phone No 2.:</label>
                    <input type="text" id="addPhone2" name="phone_no_2" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['phone_no_2']) ? $_POST['phone_no_2'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addCity" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                    <input type="text" id="addCity" name="city" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="addProvince" class="block text-gray-700 text-sm font-bold mb-2">Province:</label>
                    <input type="text" id="addProvince" name="province" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['province']) ? $_POST['province'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="distributorsAddress" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                    <input type="text" id="distributorsAddress" name="distributorsAddress" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['distirbutorsAddress']) ? $_POST['distirbutorsAddress'] : ''; ?>">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Edit Distributor</h2>
                <span class="close" onclick="closeEditModal()">&times;</span>
            </div>
            <form id="editForm" method="POST" action="update_distributors.php" style="overflow-y: scroll; height:300px;">
                <input type="hidden" id="editDistributorId" name="distributorId">
                <div class="mb-4">
                    <label for="editDistributorName" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="editDistributorName" name="distributorsName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editCompanyName" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                    <input type="text" id="editCompanyName" name="company" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editEmail" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="editEmail" name="email" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editPhone1" class="block text-gray-700 text-sm font-bold mb-2">Phone No 1.:</label>
                    <input type="text" id="editPhone1" name="phone1" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editPhone2" class="block text-gray-700 text-sm font-bold mb-2">Phone No 2.:</label>
                    <input type="text" id="editPhone2" name="phone2" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editCity" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                    <input type="text" id="editCity" name="city" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editProvince" class="block text-gray-700 text-sm font-bold mb-2">Province:</label>
                    <input type="text" id="editProvince" name="province" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="editAddress" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                    <input type="text" id="editAddress" name="distributorsAddress" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
            </form>
        </div>
    </div>



    <script>
        function closeEditModal() {
            var editModal = document.getElementById("editModal");
            editModal.style.display = "none";
        }

        document.addEventListener("DOMContentLoaded", function() {
            var editModal = document.getElementById("editModal");
            var editBtns = document.querySelectorAll(".editBtn");
            var editSpan = document.querySelector("#editModal .close");

            editBtns.forEach(function(editBtn) {
                editBtn.onclick = function() {
                    var distributorId = editBtn.dataset.id;
                    var distributorName = editBtn.dataset.name;
                    var companyName = editBtn.dataset.company;
                    var email = editBtn.dataset.email;
                    var phone1 = editBtn.dataset.phone1;
                    var phone2 = editBtn.dataset.phone2;
                    var city = editBtn.dataset.city;
                    var province = editBtn.dataset.province;
                    var address = editBtn.dataset.address;

                    document.getElementById("editDistributorId").value = distributorId;
                    document.getElementById("editDistributorName").value = distributorName;
                    document.getElementById("editCompanyName").value = companyName;
                    document.getElementById("editEmail").value = email;
                    document.getElementById("editPhone1").value = phone1;
                    document.getElementById("editPhone2").value = phone2;
                    document.getElementById("editCity").value = city;
                    document.getElementById("editProvince").value = province;
                    document.getElementById("editAddress").value = address;

                    editModal.style.display = "block";
                };
            });

            editSpan.onclick = function() {
                closeEditModal();
            };
        });
    </script>

    <script src='../../assets/js/addData.js'></script>
    <!-- <script src='../../assets/js/deleteData.js'></script> -->
</body>

</html>