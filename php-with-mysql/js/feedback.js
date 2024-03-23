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

    function openDeleteModal(cityId) {
        var deleteModal = document.getElementById("deleteModal");
        deleteModal.style.display = "block";

        var confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
        var cancelDeleteBtn = document.getElementById("cancelDeleteBtn");

        confirmDeleteBtn.onclick = function () {
            console.log("Deleting city with ID: " + cityId);
            deleteModal.style.display = "none";
        }

        cancelDeleteBtn.onclick = function () {
            deleteModal.style.display = "none";
        }
    }

    var deleteModal = document.getElementById("deleteModal");
    var deleteBtns = document.querySelectorAll(".deleteBtn");

    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.onclick = function () {
            var cityId = this.getAttribute('data-id');
            openDeleteModal(cityId);
        }
    });

    window.onclick = function (event) {
        if (event.target == addModal) {
            addModal.style.display = "none";
        }
        if (event.target == deleteModal) {
            deleteModal.style.display = "none";
        }
    }
});
