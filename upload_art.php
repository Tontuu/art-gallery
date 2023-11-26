<?php
if(isset($_POST['upload_artist_button'])) { 
    echo "<div class='upload_card'>";
        echo "<div class='left-container'>";
        echo "<span class='page'>Etapa 1/4</span>";
        echo "<span class='question'>Qual o primeiro nome do artista?</span>";
        echo "<form class='artist_form'>
                <input id='input_text' type='text' name='upload_artist_name' value='' pattern='^[a-zA-Z]+$' required>
                <input id='input_submit' type='submit' name='upload_artist_name' value='Próximo → '>
             </form>";
        echo "</div>";
        echo "<div class='right-container'>";
            echo "<img src='artes/upload_art/upload_card_img.jpg' alt='Upload Art'>";
        echo "</div>";
    echo "</div>'";
} 
?>