let button = document.getElementById("contactButton");
button.addEventListener("click",buttonEvent);
function buttonEvent(){
    $('#contactForm').fadeToggle();
}

let button1  = document.getElementById("sumButton");
button1.addEventListener("click",buttonEvent1);
function buttonEvent1(){
    $('#p1-sum').fadeToggle();
    $('#p1').fadeToggle();
}
let button2  = document.getElementById("sumButton1");
button2.addEventListener("click",buttonEvent1);

let button3  = document.getElementById("sumButton2");
button3.addEventListener("click",buttonEvent2);
function buttonEvent2(){
    $('#p2-sum').fadeToggle();
    $('#p2').fadeToggle();
}
let button4  = document.getElementById("sumButton3");
button4.addEventListener("click",buttonEvent2);

let button5  = document.getElementById("sumButton4");
button5.addEventListener("click",buttonEvent3);
function buttonEvent3(){
    $('#p3-sum').fadeToggle();
    $('#p3').fadeToggle();
}
let button6  = document.getElementById("sumButton5");
button6.addEventListener("click",buttonEvent3);

let button7 = document.getElementById("whatsNewb");
button7.addEventListener("click",buttonEvent4);
function buttonEvent4(){
    $('#whatsNew').fadeToggle();
}