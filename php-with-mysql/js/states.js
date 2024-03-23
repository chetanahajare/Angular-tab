// Add State Modal
document.addEventListener("DOMContentLoaded", function () {
    var addStateModal = document.getElementById("addStateModal");
    var openAddStateModalBtn = document.getElementById("openAddStateModal");
    var closeAddStateModalSpan = document.querySelector("#addStateModal .close");
    openAddStateModalBtn.onclick = function () {
        addStateModal.style.display = "block";
    }
    closeAddStateModalSpan.onclick = function () {
        addStateModal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == addStateModal) {
            addStateModal.style.display = "none";
        }
    }
    var editStateModal = document.getElementById("editStateModal");
    var closeEditStateModalSpan = document.querySelector("#editStateModal .close");
    var editStateButtons = document.querySelectorAll(".edit-state-btn");
    editStateButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            editStateModal.style.display = "block";
            var stateName = this.dataset.stateName;
            document.getElementById("editStateName").value = stateName;
            var stateId = this.dataset.stateId;
            document.getElementById("editStateId").value = stateId;
        });
    });
});