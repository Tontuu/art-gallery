<?php
include('head.php');
include("upload_art.php");
?>

<main class="exhibition">
    <div class="exhib-header">
        <img src="./artes/exhibition/1.jpeg" alt="">
        <h2>MOSTRE SUA EXPOSIÇÃO</h2>
        <p>Liberte sua imaginação, exponha sua alma</p>
    </div>

    <div class="artists-card-container">
        <h3>Melhores do Dia na Arte</h3>
        <div class="card-container">
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">VAN GOGH</h1>
                    <img src="./artes/exhibition/cards/Van Gogh.png" alt="">
                    <p class="year">(1853 - 1890)</p>
                </div>
                <p class="name">VAN GOGH</p>
                <a href='artistpage.php?id=1'><button type="submit">Ver</button></a>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">DALI</h1>
                    <img src="./artes/exhibition/cards/Dali.jpg" alt="">
                    <p class="year">(1904 - 1989)</p>
                </div>
                <p class="name">DALI</p>
                <a href='artistpage.php?id=8'><button type="submit">Ver</button></a>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">POLLOCK</h1>
                    <img src="./artes/exhibition/cards/Pollock.jpg" alt="">
                    <p class="year">(1912 - 1956)</p>
                </div>
                <p class="name">POLLOCK</p>
                <a href='artistpage.php?id=5'><button type="submit">Ver</button></a>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">DA VINCI</h1>
                    <img src="./artes/exhibition/cards/Vinci.jpg" alt="">
                    <p class="year">(1452 - 1519)</p>
                </div>
                <p class="name">DA VINCI</p>
                <a href='artistpage.php?id=6'><button type="submit">Ver</button></a>
            </div>
        </div>
    </div>

    <div class="exhibition-footer">
        <div class="art-content-actions">
            <input type="text" class="search-bar" placeholder="Search...">
            <div class="art-content-actions-wrapper">
                <div class="filter-button-wrapper">
                    <button class="action-button filter jsFilter">
                        <span>Filtrar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="16" height="16" viewBox="0 0 24 24" 
                            fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round" class="feather feather-filter">
                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/>
                        </svg>
                </button>
                    <div class="filter-menu">
                        <label>Categoria</label> 
                        <select>
                            <option>Todas as categorias</option>
                            <option>Renascentista</option>
                            <option>Moderna</option>
                            <option>Impressionista</option>
                            <option>Arte paia</option>
                        </select>
                        <label>Autor</label> 
                        <select>
                            <option>Todos os artistas</option>
                            <option>Vincent Van Gogh</option>
                            <option>Paulo Monet</option>
                            <option>Leonardo Da Vinci</option>
                            <option>Salvador Dali</option>
                            <option>Pierre Renoir</option>
                        </select>
                        <div class="filter-menu-buttons">
                            <button class="filter-reset reset">Limpar</button>
                            <button class="filter-reset apply">Aplicar</button>
                        </div>
                    </div>
                    <button class="action-button list active" title="List View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"/>
                            <line x1="8" y1="12" x2="21" y2="12"/>
                            <line x1="8" y1="18" x2="21" y2="18"/>
                            <line x1="3" y1="6" x2="3.01" y2="6"/>
                            <line x1="3" y1="12" x2="3.01" y2="12"/>
                            <line x1="3" y1="18" x2="3.01" y2="18"/>
                        </svg>
                    </button>
                    <button class="action-button grid" title="Grid View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="feather feather-grid">
                           <rect x="3" y="3" width="7" height="7"/>
                           <rect x="14" y="3" width="7" height="7"/>
                           <rect x="14" y="14" width="7" height="7"/>
                           <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="arts-container">
            <?php
                $con = mysqli_connect('localhost','root','','art_gallery_db');
                if ($con->connect_error) { die("Conexão falhou: " . $con->connect_error); }
                $sql_query = "SELECT ID, img_bg, img_modal_header, img_modal, first_name FROM artists";
                $result = $con->query($sql_query);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $ID = $row["ID"];
                        $firstname = $row["first_name"];
                        $img_bg = $row["img_bg"];
                        $img_modal_header = $row["img_modal_header"];
                        $img_modal = $row["img_modal"];

                        echo "<figure>";
                            echo "<img src='artes/artistpage/$ID/$img_bg'>";
                            echo "<figcaption><a href='artistpage.php?id=$ID'>$firstname</a></figcaption>";
                        echo "</figure>";
                //         echo "------------------------------------";
                    }
                }
            
            ?>
        </div>
    </div>
    <div class="whitespace-scroll"></div>
</main>


</body>

<?php
$sql_query = "SELECT ID FROM artists";
$result = $con->query($sql_query);
$art_num = $result->num_rows;
$wspace = $art_num * 290;
echo "<script>";
    echo "document.querySelector('.whitespace-scroll').style.transform = 'translateY($wspace" . "px)';";
echo "</script>";
?>

</html>
    