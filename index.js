const slides = document.querySelectorAll('.pic');
const btnRight = document.querySelector('.btn-right');
const btnLeft = document.querySelector('.btn-left');

let slideAtual = 0;
const totalSlides = slides.length;

const irParaSlide = function (slide) {
    slides.forEach(function (s, i) {
        const translateXNum = 80 * (i - slide);
        let translateYNum, rotateDeg, grayscaleNum, zIndexNum, opacityNum;
        if (translateXNum === 0){
            translateYNum = 0; 
            rotateDeg = 0;
            grayscaleNum = 0;
            zIndexNum = 1;
            opacityNum = 100;
        } else if (translateXNum < 0) {
            translateYNum = 5;
            rotateDeg = -5;
            grayscaleNum = 1;
            zIndexNum = 0;
            opacityNum = 20;
        } else {
            translateYNum = 5;
            rotateDeg = 5;
            grayscaleNum = 1;
            zIndexNum = 0;
            opacityNum = 20;
        }      
        s.style.transform = `translate(${translateXNum}%, ${translateYNum}%) rotate(${rotateDeg}deg)`;
        s.style.filter = `grayscale(${grayscaleNum})`;
        s.style.zIndex = zIndexNum;
        s.style.opacity = `${opacityNum}%`
    });
};
irParaSlide(0);

function proximoSlide() {
    if(slideAtual === totalSlides-1) {
        slideAtual = 0;
    } else {
        slideAtual++;
    }
    irParaSlide(slideAtual);
}

function slideAnterior(){
    if (slideAtual === 0){
        slideAtual = totalSlides-1
    } else {
        slideAtual--;
    }
    irParaSlide(slideAtual);
}
try {
    btnRight.addEventListener('click', proximoSlide);
    btnLeft.addEventListener('click', slideAnterior);
} catch(e) {}

function stoperror() {
    return true;
}

setInterval(function () {
    proximoSlide();
}, 3000);


try {
    document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
    });
} catch(e) {}


// ----- Artist page

// Catchphrase last word bolderization
$(document).ready(function() {
    $('.catchphrase h1').each(function(index, element) {
        const splited_word = element.innerText.split(" ");
        splited_word[splited_word.length-1] = "<span>" +
                                                splited_word[splited_word.length - 1] +
                                              "</span>";
        element.innerHTML = splited_word.join(" ");
    });
});
 // Auto adjust background image offset-x
$(document).ready(function() {
    $('main.artistpage').each(function(index, element) {
        let defaultOffsetWidth = 1600; // Default tested width px
        let defaultOffsetImg = 425; // Default tested img offset vw
        let newOffsetImg = window.innerWidth * ((defaultOffsetWidth/defaultOffsetImg));
        element.style.backgroundPositionX = "-" + newOffsetImg + "px";
        console.log(window.innerWidth);
    });
});

// Upload Image
$(".artist_form").submit(function(e) {
    e.preventDefault();
}); // Avoid auto refreshing


function setup_form() {
    let artist_name = document.querySelector("#input_text").value;
    artist_name = artist_name[0].toUpperCase() + artist_name.slice(1);
}

const artist_form = document.querySelector(".artist_form");
artist_form.addEventListener("submit", () => {
    setup_form();
})