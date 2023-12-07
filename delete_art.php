<?php

if(isset($_POST['delete_artist_button'])) { 
    $url_id = $_GET['id'];

    $con = mysqli_connect('localhost','root','','art_gallery_db');

    if ($con->connect_error) { die("Conexão falhou: " . $con->connect_error); }

    $sql_query = "DELETE FROM artists WHERE ID = $url_id";
    $result = $con->query($sql_query);

    header("Location:exhibitions.php");
}

?>