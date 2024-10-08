var slide = document.getElementsByClassName("slide");
var indicator = document.getElementById("indicator");
var dots;
var autoplay = document.getElementsByClassName("container-h")[0].getAttribute("data-autoplay"); 
var l = slide.length;
var interval = 5000; 
var set;
var count = 0;

window.onload = function () {
    initialize();
    slide[0].style.opacity = "1";

   
    for (var j = 0; j < l; j++) {
        indicator.innerHTML += "<div class='dots' onclick='change(" + j + ")'></div>";
    }

    dots = document.getElementsByClassName("dots");
    dots[0].style.background = "#696969";
}

function initialize() {
    if (autoplay === "true") {
        set = setInterval(function () {
            next();
        }, interval);
    }
}


function change(index) {
    clearInterval(set); 
    count = index; 
    updateSlides(); 
    initialize(); 
}

function next() {
    clearInterval(set); 
    slide[count].style.opacity = "0"; 
    count++; 

    if (count == l) count = 0; 

    updateSlides(); 
    initialize(); 
}

function updateSlides() {
    for (var j = 0; j < l; j++) {
        slide[j].style.opacity = "0"; 
        dots[j].style.background = "#bdbdbd"; 
    }
    slide[count].style.opacity = "1"; 
    dots[count].style.background = "#696969"; 
}
