<?php
include('head.php');
?>
<div class="circle-bg2"></div>
<main>
    <h1>Galeria das artes</h1>
    <div class="circle-bg"></div>
    <div class="slider-content">
        <h4><a href="#">Ver novas exposições</a></h4>
        <div class="arrow">
            <div class="long-arrow-right"></div>
        </div>
    </div>
    <div class="slider">
        <div class="pic-container">
            <div class="pic pic-1"><img src="./artes/home/5.jpg" class="pic_img"></div>
            <div class="pic pic-2"><img src="./artes/home/2.jpg" class="pic_img"></div>
            <div class="pic pic-3"><img src="./artes/home/3.jpg" class="pic_img" style="transform: translateY(50px);"></div>
            <div class="pic pic-4"><img src="./artes/home/4.webp" class="pic_img" style="transform: translateY(50px);"></div>
        </div>
    </div>
    <div class='slider-btns'>
        <button class="btn-left"><</button>
        <button class="btn-right">></button>
    </div>
    <div class="circle-dot"></div>
    <div class="expo-footer">
        <div class="left-part">
            <img class="main-img" src="./artes/home/main.webp" alt="">
        </div>
        <div class="right-part">
            <p>"Todas as artes podem ser consideradas como remédios da vida, 
                ajudantes do seu crescimento ou bálsamo dos combates; 
                postulam sempre sofrimento e sofredores."</p>
            <p>· Friedrich Nietzsche</p>
        </div>
    </div>
</main>
</body>

<script>
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
    btnRight.addEventListener('click', proximoSlide);
    btnLeft.addEventListener('click', slideAnterior);

    setInterval(function () {
        proximoSlide();
    }, 3000);

</script>

</html>