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
                    <button id="openAddStateModal" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add State</button>
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
                    <?php include './view/fetchStates.php'; ?>
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
    <div id="addStateModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Add New State</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="add_state.php">
                <div class="mb-4">
                    <label for="stateName" class="block text-gray-700 text-sm font-bold mb-2">State Name:</label>
                    <input type="text" id="stateName" name="stateName" class="border-gray-300 border rounded-md px-4 py-2" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>

    <div id="editStateModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Edit State</h2>
                <span class="close">&times;</span>
            </div>
            <form method="POST" action="edit_state.php">
                <div class="mb-4">
                    <label for="editStateName" class="block text-gray-700 text-sm font-bold mb-2">State Name:</label>
                    <input type="text" id="editStateName" name="editStateName" class="border-gray-300 border rounded-md px-4 py-2" value="">
                </div>
                <input type="hidden" id="editStateId" name="editStateId" value="">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save Changes</button>
            </form>
        </div>
    </div>
    <?php include '../shared/delete-model.php'; ?>
    <script src="../js/states.js"></script>
</body>

</html>