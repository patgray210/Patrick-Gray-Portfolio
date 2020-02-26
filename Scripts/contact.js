let button = document.getElementById("contactButton");
button.addEventListener("click",buttonEvent);
function buttonEvent(){
    $('#contactForm').fadeToggle();
}