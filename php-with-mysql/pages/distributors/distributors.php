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
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone No 1.
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone No 2.
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            City
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Province
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php include './fetch_distributors.php'; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New Distributor</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="save_distributors.php" style="overflow-y: scroll; height:300px;">
                <div class="mb-4">
                    <label for="distributorName" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="distributorName" name="distributorName" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['distributorName']) ? $_POST['distributorName'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="companyName" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                    <input type="text" id="companyName" name="company" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['companyName']) ? $_POST['companyName'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="phone1" class="block text-gray-700 text-sm font-bold mb-2">Phone No 1.:</label>
                    <input type="text" id="phone1" name="phone1" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['phone1']) ? $_POST['phone1'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="phone2" class="block text-gray-700 text-sm font-bold mb-2">Phone No 2.:</label>
                    <input type="text" id="phone2" name="phone2" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['phone2']) ? $_POST['phone2'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                    <input type="text" id="city" name="city" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="province" class="block text-gray-700 text-sm font-bold mb-2">Province:</label>
                    <input type="text" id="province" name="province" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['province']) ? $_POST['province'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                    <input type="text" id="address" name="address" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
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
        <form method="POST" action="edit_distributors.php" style="overflow-y: scroll; height:300px;">
            <input type="hidden" id="editDistributorId" name="distributorId">
            <div class="mb-4">
                <label for="editDistributorName" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="editDistributorName" name="distributorName" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editCompanyName" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                <input type="text" id="editCompanyName" name="companyName" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editEmail" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="editEmail" name="email" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editPhone1" class="block text-gray-700 text-sm font-bold mb-2">Phone No 1.:</label>
                <input type="text" id="editPhone1" name="phone1" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editPhone2" class="block text-gray-700 text-sm font-bold mb-2">Phone No 2.:</label>
                <input type="text" id="editPhone2" name="phone2" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editCity" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                <input type="text" id="editCity" name="city" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editProvince" class="block text-gray-700 text-sm font-bold mb-2">Province:</label>
                <input type="text" id="editProvince" name="province" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <div class="mb-4">
                <label for="editAddress" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                <input type="text" id="editAddress" name="address" class="border-gray-300 border rounded-md px-4 py-2" >
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
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

            addBtn.onclick = function() {
                addModal.style.display = "block";
            }

            addSpan.onclick = function() {
                addModal.style.display = "none";
            }

        editBtns.forEach(function(editBtn) {
        editBtn.onclick = function() {
        var distributorId = editBtn.getAttribute("data-distributors-id");
        var distributorName = editBtn.getAttribute("data-distributors-name");
        var companyName = editBtn.getAttribute("data-company-name");
        var email = editBtn.getAttribute("data-distributors-email");
        var phone1 = editBtn.getAttribute("data-phone1-url");
        var phone2 = editBtn.getAttribute("data-phone2-url");
        var city = editBtn.getAttribute("data-distributorsCity");
        var province = editBtn.getAttribute("data-distributorsProvince");
        var address = editBtn.getAttribute("data-distributorsAddress");

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
    }
});

            editSpan.onclick = function() {
                editModal.style.display = "none";
            }
        });
    </script>
</body>

</html>
