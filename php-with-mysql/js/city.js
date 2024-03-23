document.addEventListener("DOMContentLoaded", function () {
    // add
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function () {
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //edit 
    var editModal = document.getElementById("editModal");
    var editBtn = document.getElementById("editBtn");
    var editSpan = document.getElementsByClassName("close")[1];

    editBtn.onclick = function () {
        editModal.style.display = "block";
    }

    editSpan.onclick = function () {
        editModal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == editModal) {
            editModal.style.display = "none";
        }
    }

});
