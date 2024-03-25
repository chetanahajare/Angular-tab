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
                <h1 class="text-bold text-center">Feedback</h1>
            </div>
            <?php include 'fetch_feedback.php'; ?>
        </div>
    </div>
    <div id="deleteModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2>Delete City</h2>
                <span class="close" onclick="closeDeleteModal()">&times;</span>
            </div>
            <form id="deleteForm" method="POST" action="delete_feedback.php">
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
            var deleteBtns = document.querySelectorAll(".deleteBtn");
            var deleteModal = document.getElementById("deleteModal");
            var deleteSpan = document.querySelector("#deleteModal .close");
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
        })
    </script>
</body>

</html>