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
                <h1 class="text-bold text-center">Product</h1>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search State" class="border-gray-300 border rounded-md px-4 py-2 mr-2">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Add State</button>
                </div>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Side Effects
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            MRP
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Composition
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Package
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Substitute
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php include './fetch_product.php'; ?>
                </tbody>
            </table>
            
        </div>
    </div>
    <div id="productModal" class="modal">
        <div class="modal-content" style="width: 409px;">
            <div class="flex justify-between">
                <h2 id="productModalTitle">Add New Product</h2>
                <span class="close" id="closeProductModal()">&times;</span>
            </div>
            <form id="productForm" method="POST" action="save_product.php">
                <div class="mb-4">
                    <label for="productName" class="block text-gray-700 text-sm font-bold mb-2">Product Name:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="side_effects" class="block text-gray-700 text-sm font-bold mb-2">Side Effects:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="mrp" class="block text-gray-700 text-sm font-bold mb-2">MRP:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="composition" class="block text-gray-700 text-sm font-bold mb-2">Composition:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="package" class="block text-gray-700 text-sm font-bold mb-2">Package:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <div class="mb-4">
                    <label for="substitute" class="block text-gray-700 text-sm font-bold mb-2">Substitute:</label>
                    <input type="text" id="productName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
    <div id="editProductModal" class="modal">
    <div class="modal-content" style="width: 409px;">
        <div class="flex justify-between">
            <h2>Edit Product</h2>
            <span class="close" onclick="closeEditProductModalBtn()">&times;</span>
        </div>
        <form id="editProductForm" method="POST" action="edit_product.php">
            <input type="hidden" id="editProductId" name="productId">
            <div class="mb-4">
                <label for="editProductName" class="block text-gray-700 text-sm font-bold mb-2">Product Name:</label>
                <input type="text" id="editProductName" name="productName" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editCompany" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                <input type="text" id="editCompany" name="company" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editSideEffects" class="block text-gray-700 text-sm font-bold mb-2">Side Effects:</label>
                <input type="text" id="editSideEffects" name="sideEffects" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editMRP" class="block text-gray-700 text-sm font-bold mb-2">MRP:</label>
                <input type="text" id="editMRP" name="mrp" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editComposition" class="block text-gray-700 text-sm font-bold mb-2">Composition:</label>
                <input type="text" id="editComposition" name="composition" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editPackage" class="block text-gray-700 text-sm font-bold mb-2">Package:</label>
                <input type="text" id="editPackage" name="package" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="editSubstitute" class="block text-gray-700 text-sm font-bold mb-2">Substitute:</label>
                <input type="text" id="editSubstitute" name="substitute" class="border-gray-300 border rounded-md px-4 py-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var addProductModal = document.getElementById("productModal");
        var openProductModalBtn = document.getElementById("openProductModal");
        var closeProductModalBtn = document.querySelector("#productModal .close");
        var editProductModal = document.getElementById("editProductModal");
        var editProductBtns = document.querySelectorAll(".editProductBtn");
        var closeEditProductModalBtn = document.querySelector("#editProductModal .close");

        openProductModalBtn.onclick = function() {
            addProductModal.style.display = "block";
        }

        closeProductModalBtn.onclick = function() {
            addProductModal.style.display = "none";
        }

        editProductBtns.forEach(function(editProductBtn) {
            editProductBtn.onclick = function() {
                var productId = editProductBtn.getAttribute("data-product-id");
                var productName = editProductBtn.getAttribute("data-product-name");
                var company = editProductBtn.getAttribute("data-company");
                var sideEffects = editProductBtn.getAttribute("data-side-effects");
                var mrp = editProductBtn.getAttribute("data-mrp");
                var composition = editProductBtn.getAttribute("data-composition");
                var package = editProductBtn.getAttribute("data-package");
                var substitute = editProductBtn.getAttribute("data-substitute");

                document.getElementById("editProductId").value = productId;
                document.getElementById("editProductName").value = productName;
                document.getElementById("editCompany").value = company;
                document.getElementById("editSideEffects").value = sideEffects;
                document.getElementById("editMRP").value = mrp;
                document.getElementById("editComposition").value = composition;
                document.getElementById("editPackage").value = package;
                document.getElementById("editSubstitute").value = substitute;

                editProductModal.style.display = "block";
            }
        });

        closeEditProductModalBtn.onclick = function() {
            editProductModal.style.display = "none";
        }
    });
</script>

</body>

</html>