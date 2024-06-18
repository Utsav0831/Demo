function close_token(){
    document.querySelector(".booked").style.display = "none";
}

function open_token(event){
    document.querySelector(".booked").style.display = "flex";
    document.querySelector(".booked h3").textContent = "Time: " + event.target.textContent;
}