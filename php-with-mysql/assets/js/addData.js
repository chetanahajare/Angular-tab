document.addEventListener("DOMContentLoaded", function () {
    var addModal = document.getElementById("myModal");
    var addBtn = document.getElementById("openModal");
    var addSpan = document.querySelector("#myModal .close");
    addBtn.onclick = function () {
        addModal.style.display = "block";
    }

    addSpan.onclick = function () {
        addModal.style.display = "none";
    }
});