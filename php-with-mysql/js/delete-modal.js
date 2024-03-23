document.addEventListener("DOMContentLoaded", function () {
    var deleteModal = document.getElementById("deleteModal");
    var closeDeleteModalSpan = document.querySelector("#deleteModal .close");
    var confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
    var cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
    function openDeleteModal() {
        deleteModal.style.display = "block";
    }
    function closeDeleteModal() {
        deleteModal.style.display = "none";
    }

    closeDeleteModalSpan.onclick = closeDeleteModal;

    cancelDeleteBtn.onclick = closeDeleteModal;
    window.onclick = function (event) {
        if (event.target == deleteModal) {
            closeDeleteModal();
        }
    };

    var deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            openDeleteModal();
            var itemId = this.dataset.itemId;
            confirmDeleteBtn.onclick = function () {
                closeDeleteModal();
            };
        });
    });
});
