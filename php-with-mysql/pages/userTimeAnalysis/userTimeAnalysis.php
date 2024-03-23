<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include '../../shared/header.php'; ?>
    <div class="flex">
        <?php include '../../shared/side-menu.php'; ?>
        <div class="container mx-auto p-4">
            <div class="flex justify-center py-4">
                <h1 class="text-bold text-center">User Timer Analysis</h1>
            </div>
            <div class="card">
                <div class="card-title">
                    <div class="flex justify-center py-4">
                        <h1 class="text-bold text-center">All Session</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    UserID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex flex-col text-center">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="text" id="email" name="email" class="border border-gray-300 rounded-md px-2 py-1">
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex flex-col text-center">
                                        <label for="name" class="mb-1">Name</label>
                                        <input type="text" id="name" name="name" class="border border-gray-300 rounded-md px-2 py-1">
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Device Info
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Version
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Session Date
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Session Records
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php include './view/fetchAllSessionUserTimeAnalysis.php'; ?>
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
            <div class="card">
                <div class="card-title">
                    <div class="flex justify-center py-4">
                        <h1 class="text-bold text-center">User Timer Analysis</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    UserID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    All Device
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Code
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total Time
                                    <p>(hh:mm:ss)</p>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php include './view/fetchUserTimeAnalysis.php'; ?>
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
        </div>
    </div>
</body>

</html>