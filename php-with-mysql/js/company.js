document.addEventListener("DOMContentLoaded", function () {
    var addCompanyModal = document.getElementById("addCompanyModal");
    var editCompanyModal = document.getElementById("editCompanyModal");
    var openAddCompanyModalBtn = document.getElementById("openAddCompanyModal");
    var closeAddCompanyModalSpan = document.querySelector("#addCompanyModal .close");
    var closeEditCompanyModalSpan = document.querySelector("#editCompanyModal .close");
    openAddCompanyModalBtn.onclick = function () {
        addCompanyModal.style.display = "block";
    };
    closeAddCompanyModalSpan.onclick = function () {
        addCompanyModal.style.display = "none";
    };
    window.onclick = function (event) {
        if (event.target == addCompanyModal) {
            addCompanyModal.style.display = "none";
        }
    };
    closeEditCompanyModalSpan.onclick = function () {
        editCompanyModal.style.display = "none";
    };
    window.onclick = function (event) {
        if (event.target == editCompanyModal) {
            editCompanyModal.style.display = "none";
        }
    };
    var editCompanyButtons = document.querySelectorAll(".edit-company-btn");
    editCompanyButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            editCompanyModal.style.display = "block";
            var companyName = this.dataset.companyName;
            var companyId = this.dataset.companyId;
            document.getElementById("editCompanyName").value = companyName;
            document.getElementById("editCompanyId").value = companyId;
        });
    });
});
