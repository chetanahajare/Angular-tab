document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const successMessage = urlParams.get('success');

    if (successMessage) {
        alert(successMessage);
    }

    var addModal = document.getElementById("myModal");
    var addBtn = document.getElementById("openModal");
    var addSpan = document.getElementsByClassName("close")[0];

    addBtn.onclick = function () {
        addModal.style.display = "block";
    }

    addSpan.onclick = function () {
        addModal.style.display = "none";
    }

    var editModal = document.getElementById("editModal");
    var editBtns = document.querySelectorAll(".editBtn");
    var editSpan = document.getElementsByClassName("close")[1];

    editBtns.forEach(function (editBtn) {
        editBtn.onclick = function () {
            var cityId = this.getAttribute('data-city-id');
            var cityName = this.getAttribute('data-city-name');
            var stateName = this.getAttribute('data-state-name');
            var imageUrl = this.getAttribute('data-image-url');
            document.getElementById("editCityId").value = cityId;
            document.getElementById("editCityName").value = cityName;
            document.getElementById("editStateName").value = stateName;
            document.getElementById("editImageUrl").value = imageUrl;

            editModal.style.display = "block";
        }
    });

    editSpan.onclick = function () {
        editModal.style.display = "none";
    }
    var deleteHtml = `
        <div class="modal-content" style="width: 400px;">
            <div class="flex justify-between">
                <h2>Delete Confirmation</h2>
                <span class="close">&times;</span>
            </div>
            <p>Are you sure you want to delete this item?</p>
            <div class="flex justify-end mt-4">
                <form id="deleteForm" method="POST" action="./view/delete_city.php">
                    <input type="hidden" id="deleteCityId" value="">
                    <button id="confirmDeleteBtn" class="bg-red-500 text-white px-4 py-2 rounded-md mr-2">Confirm</button>
                    <button id="cancelDeleteBtn" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Cancel</button>
                </form>
            </div>
        </div>
    `;
    var deleteModal = document.getElementById("deleteModal");
    var deleteBtns = document.querySelectorAll(".deleteBtn");
    var deleteForm = document.getElementById("deleteForm");
    deleteModal.innerHTML = deleteHtml;

    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.onclick = function () {
            var cityId = this.getAttribute('data-city-id');
            console.log("City ID: " + cityId);
            document.getElementById("deleteCityId").value = cityId;
            openDeleteModal();
        }
    });

    function openDeleteModal() {
        deleteModal.style.display = "block";
        var confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
        var cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
        confirmDeleteBtn.onclick = function () {
            deleteForm.submit();
            deleteModal.style.display = "none";
        }
        cancelDeleteBtn.onclick = function () {
            deleteModal.style.display = "none";
        }
    }

    window.onclick = function (event) {
        if (event.target == addModal) {
            addModal.style.display = "none";
        }
        if (event.target == editModal) {
            editModal.style.display = "none";
        }
        if (event.target == deleteModal) {
            deleteModal.style.display = "none";
        }
    }
});
