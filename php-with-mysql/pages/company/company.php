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
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search Company" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button id="openAddCompanyModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Company</button>
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
                    <?php include './view/fetch_company.php'; ?>
                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <nav class="block">
                    <ul class="flex pl-0 rounded list-none flex-wrap">
                        <li><a href="#" class="block hover:text-blue-600 px-3 py-2">Previous</a></li>
                        <li><a href="#" class="block hover:text-blue-600 px-3 py-2">1</a></li>
                        <li><a href="#" class="block hover:text-blue-600 px-3 py-2">2</a></li>
                        <li><a href="#" class="block hover:text-blue-600 px-3 py-2">3</a></li>
                        <li><a href="#" class="block hover:text-blue-600 px-3 py-2">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New Company</h2>
                <span class="close">&times;</span>
            </div>
            <form id="addCompanyForm" method="POST" action="./view/save_compnay.php">
                <div class="mb-4">
                    <label for="companyName" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>
                    <input type="text" id="companyName" name="companyName" class="border-gray-300 border rounded-md px-4 py-2" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New Company</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="./view/save_compnay.php">
                <div class="mb-4">
                    <label for="cityName" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>
                    <input type="text" id="companyName" name="cityName" class="border-gray-300 border rounded-md px-4 py-2" value="<?php echo isset($_POST['cityName']) ? $_POST['cityName'] : ''; ?>">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="editCompanyModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Edit Company</h2>
                <span class="close">&times;</span>
            </div>
            <form id="editCompanyForm" method="POST" action="edit_company.php">
                <input type="hidden" id="editCompanyId" name="editCompanyId">
                <div class="mb-4">
                    <label for="editCompanyName" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>
                    <input type="text" id="editCompanyName" name="editCompanyName" class="border-gray-300 border rounded-md px-4 py-2" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save Changes</button>
            </form>
        </div>
    </div>
    <script src="../../js/company.js"></script>
</body>

</html>