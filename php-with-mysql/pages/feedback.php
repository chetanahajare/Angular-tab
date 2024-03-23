<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include '../shared/header.php'; ?>
    <div class="flex">
        <?php include '../shared/side-menu.php'; ?>
        <div class="container mx-auto p-4">
            <div class="flex justify-center py-4">
                <h1 class="text-bold text-center">Feedback</h1>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Feedback
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
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
</body>

</html>