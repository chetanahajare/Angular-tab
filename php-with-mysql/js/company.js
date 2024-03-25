document.addEventListener("DOMContentLoaded", function () {
    var addModal = document.getElementById("myModal");
    var addBtn = document.getElementById("openAddCompanyModal");
    var addSpan = addModal.querySelector(".close");

    addBtn.onclick = function () {
        addModal.style.display = "block";
    }

    addSpan.onclick = function () {
        addModal.style.display = "none";
    }

    var editModal = document.getElementById("editCompanyModal");
    var editSpan = editModal.querySelector(".close");
    var editBtns = document.querySelectorAll(".editBtn");

    editBtns.forEach(function (editBtn) {
        editBtn.onclick = function () {
            var companyId = this.getAttribute('data-company-id');
            var companyName = this.getAttribute('data-company-name');
            document.getElementById("editCompanyId").value = companyId;
            document.getElementById("editCompanyName").value = companyName;
            editModal.style.display = "block";
        }
    });

    editSpan.onclick = function () {
        editModal.style.display = "none";
    }

    var deleteModal = document.getElementById("deleteModal");
    var deleteSpan = deleteModal.querySelector(".close");
    var deleteForm = document.getElementById("deleteForm");
    var deleteBtns = document.querySelectorAll(".deleteBtn");

    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.onclick = function () {
            var companyId = this.getAttribute('data-company-id');
            document.getElementById("deleteCompanyId").value = companyId;
            deleteModal.style.display = "block";
        }
    });

    deleteSpan.onclick = function () {
        deleteModal.style.display = "none";
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
