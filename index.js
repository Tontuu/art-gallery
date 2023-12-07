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

function get_firstname_form() {
    document.querySelector(".close-btn-wrapper").classList.toggle("swap");
    let artist_firstname = document.querySelector(".input_text").value;
    artist_firstname = artist_firstname.split(" ").map((x) => {return x[0].toUpperCase() + x.slice(1)}).join(" ");
    return artist_firstname;
}

function get_lastname_form() {
    document.querySelector(".close-btn-wrapper").classList.toggle("swap");
    let artist_lastname = document.querySelector(".input_text").value;
    artist_lastname = artist_lastname.split(" ").map((x) => {return x[0].toUpperCase() + x.slice(1)}).join(" ");
    return artist_lastname;
}

function get_description_form() {
    document.querySelector(".close-btn-wrapper").classList.toggle("swap");
    let description = document.querySelector(".input_text").value;
    return  description;
}

function get_genre_form() {
    document.querySelector(".close-btn-wrapper").classList.toggle("swap");
    let genre = document.querySelector(".input_text").value;
    return genre;
}

var imageObj;
function get_image() {
    return imageObj;
}

// -----------------
// upload image container
var file_select = document.querySelector("#file-drag");

function clearImageUploadArea() {
    document.querySelector(".drop-area span").style.display = "none";
    if (!document.querySelector(".img-demo").classList.contains("active")) {
        document.querySelector(".border.border-animation").classList.add("active")
        document.querySelector(".drop-area.active").classList.add("border-on");
        document.querySelector(".drop-area .drag-image").style.display = "none";
        document.querySelector(".drop-area span").style.display = "none";
    } else {
        document.querySelector(".border.border-animation").classList.remove("active")
        document.querySelector(".drop-area.active").classList.remove("border-on");
        document.querySelector(".drop-area .drag-image").style.display = "block";
        document.querySelector(".drop-area span").style.display = "block";
    }
    document.querySelector(".img-demo").classList.toggle("active");
}

if (file_select) {
    file_select.addEventListener("change", (e) => {
        e.preventDefault();
        clearImageUploadArea();
        imageObj = e.target.files[0];
        imageBlob = URL.createObjectURL(imageObj);
        document.querySelector(".img-demo").src = imageBlob;
        document.querySelector(".drop-area").removeEventListener("mouseover", toggleBorderThickness);
        document.querySelector(".drop-area").removeEventListener("mouseout", toggleBorderThickness);
    })
}

// ----------------

function closeDialog() {
    if (confirm("Você tem certeza que deseja cancelar o cadastro?")) {
        document.querySelector(".upload_card").classList.remove("active");
    }
}

var cur_page = 1;
const max_pages = 7;
function nextPage() {
    cur_page++;
    switch (cur_page) {
        case 2: {
            document.querySelector(".upload_card .card.bg img").src = "artes/upload_art/upload_card_img2.png";
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Qual o segundo nome do artista?";
            break;
        }
        case 3: {
            document.querySelector(".upload_card .card.bg img").src = "artes/upload_art/upload_card_img3.jpg"
            document.querySelector(".input_text").setAttribute("pattern", "^.{1,400}$");
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Qual a descrição ou biografia do artista?";
            break;
        }
        case 4: {
            document.querySelector(".upload_card .card.bg img").src = "artes/upload_art/upload_card_img4.jpg"
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Qual o estilo artístico do artista?";
            break;
        }
        case 5: {
            let bgGradient = document.createElement("div");
            bgGradient.classList.add("bgGradient");
            bgGradient.classList.add("active");
            document.querySelector(".card.info").appendChild(bgGradient);
            document.querySelector(".upload_card .card.bg").classList.toggle("hide");
            document.querySelector(".upload_card .card.info").classList.toggle("focus");
            document.querySelector(".input_text").disabled = true;
            document.querySelector(".input_text").style.display = "none";
            document.querySelector(".drop-area").classList.toggle("active");
            document.querySelector("#file-drag").classList.toggle("active");
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Escolha uma imagem de background do seu artista favorito";
            document.querySelector(".upload_card .question").style.marginBottom = "0px";
            document.querySelector(".drop-area").addEventListener("mouseover", toggleBorderThickness, false);
            document.querySelector(".drop-area").addEventListener("mouseout", toggleBorderThickness, false);
            break;
        }
        case 6: {
            playFlipAnimation();
            clearImageUploadArea();
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Escolha uma pintura de seu artista favorito, é importante que seja um retrato!";
            document.querySelector(".drop-area").addEventListener("mouseover", toggleBorderThickness, false);
            document.querySelector(".drop-area").addEventListener("mouseout", toggleBorderThickness, false);
            break;
        }
        case 7: {
            playFlipAnimation();
            clearImageUploadArea();
            document.querySelector(".upload_card .page").innerText = "Etapa " + cur_page + "/" + max_pages;
            document.querySelector(".upload_card .question").innerText = "Escolha agora uma das suas pinturas favoritas dele, servirá de grande ajuda para seu cadastro!";
            break;
        }
    }

    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        if (cur_page < 5)  { 
            card.classList.toggle("swap");
        }
    })

    document.querySelector(".input_text").value = "";
}

function playFlipAnimation() {
    const card = document.querySelector(".card.info");
    card.classList.remove("run-animation");
    void card.offsetWidth; 
    card.classList.add("run-animation");
}

toggleBorderThickness = () => {
    document.querySelector(".border.border-animation").classList.toggle("active")
    document.querySelector(".drop-area.active").classList.toggle("border-on");
};

function toggleLoading() {
    document.querySelector(".loading-wrapper").classList.toggle("active");
    document.querySelector(".hourglass").classList.toggle("hide");
}

function toggleUploadCard() {
    let upload_card = document.querySelector(".upload_card");
    if (upload_card) { upload_card.classList.toggle("active"); }
}

function showUploadSuccess() {
    toggleLoading();
    let upload_success_wrapper = document.createElement("div");
    let upload_success = document.createElement("div");
    upload_success_wrapper.classList.add("upload-success-wrapper");
    upload_success.classList.add("upload-success");

    let confirmation_wrapper_div = document.createElement("div");
    let confirmation_div = document.createElement("div");
    confirmation_div.classList.add("checkmark");
    confirmation_wrapper_div.classList.add("checkmark-wrapper");

    let h1 = document.createElement("h1");
    let p = document.createElement("p");
    let ok_btn = document.createElement("button");
    let text_wrapper_div = document.createElement("div");
    text_wrapper_div.classList.add("text-wrapper");
    h1.innerText = "Artista cadastrado com sucesso!";
    p.innerText = "Você já pode encontrar seu artista favorito em nossa galeria de artes!";
    ok_btn.innerText = "Maneirão";
    ok_btn.classList.add("upload-btn");

    text_wrapper_div.appendChild(h1);
    text_wrapper_div.appendChild(p);
    text_wrapper_div.appendChild(ok_btn);
    confirmation_wrapper_div.appendChild(confirmation_div);
    upload_success.appendChild(confirmation_wrapper_div);
    upload_success.appendChild(text_wrapper_div);

    upload_success_wrapper.appendChild(upload_success);

    document.querySelector(".upload_card").appendChild(upload_success_wrapper);

    ok_btn.addEventListener("click", () => {
        toggleUploadCard();
    });
}

function setup_form() {
    const artist_data = {};
    const artist_form = document.querySelector(".artist_form");
    if (artist_form) {
        artist_form.addEventListener("submit", () => {
            switch (cur_page) {
                case 1: {
                    artist_data.firstname = get_firstname_form();
                    console.log("first name: " + artist_data.firstname);
                    nextPage();
                    break;
                }
                case 2: {
                    artist_data.lastname = get_lastname_form();
                    console.log("last_name: " + artist_data.lastname);
                    nextPage();
                    break;
                }
                case 3: {
                    artist_data.description = get_description_form();
                    console.log("description: " + artist_data.description);
                    nextPage();
                    break;
                }
                case 4: {
                    artist_data.genre = get_genre_form();
                    console.log("genre: " + artist_data.genre);
                    nextPage();
                    break;
                }
                case 5: {
                    artist_data.img_bg = get_image();
                    console.log("img_bg: " + artist_data.img_bg);
                    nextPage();
                    break;
                }
                case 6: {
                    artist_data.img_modal_header = get_image();
                    console.log("img_modal_header: " + artist_data.img_modal_header);
                    nextPage();
                    break;
                }
                case 7: {
                    artist_data.img_modal = get_image();
                    console.log("img_modal: " + artist_data.img_modal);
                    toggleLoading();
                    makePostRequest(artist_data);
                    nextPage();
                    break;
                }
                default: {
                    console.log(artist_data);
                    break;
                }
            }
        });
    }
}


setup_form();

function makePostRequest(data) {
    if (!data) {
        alert("Você não preencheu os dados corretamente!!!");
    }

    console.log(data);
    const formData = new FormData();

    for (const key in data) {
        if (data.hasOwnProperty(key)) {
            if (data[key] instanceof File) {
                formData.append(key, data[key]);
            } else {
                formData.append(key, data[key]);
            }
        }
    }

    $.ajax({
        url: "add_artist.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => { 
            setTimeout(() => {
                showUploadSuccess();
            }, 1800)
        },
        error: (error) => { console.error("Request FALHOU:", error.responseText) }
    });
}