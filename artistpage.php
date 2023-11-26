<?php 
include('head.php');
include("upload_art.php");
echo "<script>
document.querySelector('header').style.display = 'none';
</script>";
?>

<main class="artistpage">
    <div class="modal">
        <img src="artes/artistpage/default_header_modal.png" class="modal-header-img" alt="todo">

        <p class="altName">
            Van Gogh
        </p> 

        <div class="fullname">
            <h1 class="firstName">Vincent</h1>
            <h1 class="lastName">Van Gogh</h1>
        </div>
        <div class="description">
            Van Gogh (1853-1890) foi um pintor holandês
            do final do século XIX e um dos maiores expoentes 
            do pós-impressionismo. Seus trabalhos foram 
            valorizados depois de sua morte e tiveram grande 
            influência na arte do século seguinte, sobretudo 
            na vertente expressionista.
        </div>
        <div class="modal-img"></div>
    </div>

    <div class="catchphrase">
        <h1>A Noite Estrelada</h1>
    </div>

    <ul class="navbar">
        <li><a href="main.php">Home</a></li>    
        <li><a href="exhibitions.php">Exposições</a></li>
        <li>
            <form action="" method="post">
                <input type="submit" name="upload_artist_button" value="Cadastrar arte">
            </form>
        </li>
    </ul>
    <h2 class="genre">Pós-impressionista</h2>
</main>
<script src="index.js"></script>

</body>
</html>
