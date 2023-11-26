<?php
include('head.php');
include("upload_art.php");
?>
<div class="circle-bg2"></div>
<div class="circle-bg"></div>
<main>
    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div >
    <h1>Galeria das artes</h1>
    <div class="slider-content">
        <h4><a href="exhibitions.php">Ver novas exposições</a></h4>
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
    <div class="exhib-footer">
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
<script src="index.js"></script>
</html>