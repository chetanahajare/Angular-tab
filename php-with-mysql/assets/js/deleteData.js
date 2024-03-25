document.addEventListener("DOMContentLoaded", function () {
    var deleteBtns = document.querySelectorAll(".deleteBtn");
    var deleteModal = document.getElementById("deleteModal");
    var deleteSpan = document.querySelector("#deleteModal .close");
    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.onclick = function () {
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

    deleteSpan.onclick = function () {
        closeDeleteModal();
    }
});