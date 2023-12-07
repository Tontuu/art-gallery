<?php

function saveImages($images, $artistID, $con) {
    $index = 0;
    foreach ($images as $img) {
        $imgs_dir = "artes/artistpage/";
        if (!file_exists('artes/artistpage/' . $artistID)) {
            mkdir($imgs_dir . $artistID, 0777, true);
        }
        $img_name = $img["name"];
        $img_name_split = explode(".", $img_name);
        $img_extension = strtolower(end($img_name_split));
        $file_name = md5(time() . $img_name) . '.' . $img_extension;
        $dest_path = $imgs_dir . $artistID . '/' . $file_name;

        if(move_uploaded_file($img['tmp_name'], $dest_path)) {

            switch($index) {
                case 0:
                    mysqli_query($con, "UPDATE `artists` SET
                    `img_bg` = '$file_name'
                    WHERE `ID` = $artistID");
                    break;
                case 1:
                    mysqli_query($con, "UPDATE `artists` SET
                    `img_modal_header` = '$file_name'
                    WHERE `ID` = $artistID");
                    break;
                case 2:
                    mysqli_query($con, "UPDATE `artists` SET
                    `img_modal` = '$file_name'
                    WHERE `ID` = $artistID");
                    break;
            }
        } else {
            http_response_code(500);
            die("Could not create image file");
        }
        $index++;
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    if (empty($firstname) || empty($lastname) || empty($description) || empty($genre) ||
    !$_FILES['img_bg']['error'] === UPLOAD_ERR_OK ||
    !$_FILES['img_modal_header']['error'] === UPLOAD_ERR_OK ||
    !$_FILES['img_modal']['error'] === UPLOAD_ERR_OK
    ) {
        $response = "Dados não preenchidos corretamente";
        http_response_code(500);
        die($response);
    }

    $con = mysqli_connect('localhost','root','','art_gallery_db');
    if (
        mysqli_query($con, "INSERT INTO `artists` 
        (`ID`, `first_name`, `last_name`, `description`, `genre`) VALUES 
        (NULL, '$firstname', '$lastname', '$description','$genre');")
    ) {
        $artistID = mysqli_insert_id($con);
    } else {
        http_response_code(500);
        die("Error na database:" . $con->error);
    }

    saveImages($_FILES, $artistID, $con);

    $response = "Artista cadastrado à database";
    echo "Artista cadastrado à database";

} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(array("status" => "error", "mensagem" => "Método não permitido"));
}

?>