<?php 
include('head.php');
include("upload_art.php");
include("delete_art.php");
echo "<script>
document.querySelector('header').style.display = 'none';
</script>";
?>

<?php
$url_id = $_GET['id'];
$con = mysqli_connect('localhost','root','','art_gallery_db');

if ($con->connect_error) { die("Conexão falhou: " . $con->connect_error); }

$sql_query = "SELECT * FROM artists WHERE ID = $url_id";
$result = $con->query($sql_query);
if ($result->num_rows <= 0) {
    die("Nenhum artista foi encontrado");
}
$row = $result->fetch_assoc();

$id = $row['ID'];
$img_bg = $row["img_bg"];
$img_modal_header = $row["img_modal_header"];
$img_modal = $row["img_modal"];
?>
<main class="artistpage">
    <div class="modal">
        <img src="artes/artistpage/<?php echo $id?>/<?php echo $img_modal_header?>" class="modal-header-img" alt="todo">

        <p class="altName">
            <?php echo $row["first_name"] . " " . $row["last_name"]; ?>
        </p> 

        <div class="fullname">
            <h1 class="firstName"><?php echo $row["first_name"]?></h1>
            <h1 class="lastName"><?php echo $row["last_name"]?></h1>
        </div>
        <div class="description">
            <?php echo $row["description"]?>
        </div>
        <div class="modal-img"></div>
    </div>

    <!-- <div class="catchphrase">
        <h1><?php echo $row["catchphrase"]?></h1>
    </div> -->

    <ul class="navbar">
        <li><a href="main.php">Home</a></li>    
        <li><a href="exhibitions.php">Exposições</a></li>
        <li>
            <form action="" method="post">
                <input type="submit" name="upload_artist_button" value="Cadastrar arte">
            </form>
        </li>
        <li>
            <form action="" method="post">
                <input type="submit" name="delete_artist_button" value="Excluir" onclick="return confirm('Você tem certeza que deseja excluir o artista?')">
            </form>
        </li>
    </ul>
    <h2 class="genre"><?php echo $row["genre"]?></h2>
</main>
<script src="index.js"></script>

</body>
<!-- Muda as imagens -->

<script>
    document.querySelector(".artistpage").style.backgroundImage = "url(artes/artistpage/<?php echo $id?>/<?php echo $img_bg?>)";
    document.querySelector(".artistpage .modal-img").style.backgroundImage = "url(artes/artistpage/<?php echo $id?>/<?php echo $img_modal?>)";
</script>
</html>
