<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include '../shared/header.php'; ?>
    <div class="container mx-auto flex">
        <?php include '../shared/side-menu.php'; ?>
        <div class="p-4">
            <h1 class="text-3xl font-bold text-center">Welcome to My Website</h1>
        </div>
    </div>
</body>

</html>