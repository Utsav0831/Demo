function close_form() {
    document.querySelector(".myForm").style.display = "none";
}

function open_form() {
    document.querySelector(".myForm").style.display = "flex";
}

function allInput() {
    var fields = document.querySelectorAll(".myForm div input");
    var button = document.querySelector(".myForm button");
    
        if (fields[0].value !== "" && fields[1].value !== "" && fields[2].value !== "") {
            button.style.transition = "0.3s ease-in";
            button.style.backgroundColor = "green";
            button.disabled = false;
        } else {
            button.style.backgroundColor = "";
            button.disabled = true;
        }
}

document.querySelectorAll(".myForm input").forEach(function(input) {
    input.addEventListener("input", allInput);
});
