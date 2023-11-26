<?php
include('head.php');
?>

<main class="exhibition">
    <div class="exhib-header">
        <img src="./artes/exhibition/1.jpeg" alt="">
        <h2>MOSTRE SUA EXPOSIÇÃO</h2>
        <p>Liberte sua imaginação, exponha sua alma</p>
        <button type="submit">Adicionar exposição</button>
    </div>

    <div class="artists-card-container">
        <h3>Melhores do Dia na Arte</h3>
        <div class="card-container">
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">FREUD</h1>
                    <img src="./artes/exhibition/cards/Freud.jpg" alt="">
                    <p class="year">(1856 - 1939)</p>
                </div>
                <p class="name">FREUD</p>
                <button type="submit">Ver</button>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">DALI</h1>
                    <img src="./artes/exhibition/cards/Dali.jpg" alt="">
                    <p class="year">(1904 - 1989)</p>
                </div>
                <p class="name">DALI</p>
                <button type="submit">Ver</button>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">POLLOCK</h1>
                    <img src="./artes/exhibition/cards/Pollock.jpg" alt="">
                    <p class="year">(1912 - 1956)</p>
                </div>
                <p class="name">POLLOCK</p>
                <button type="submit">Ver</button>
            </div>
            <div class="artist-card">
                <div class="img-box">
                    <h1 class="name">DA VINCI</h1>
                    <img src="./artes/exhibition/cards/Vinci.jpg" alt="">
                    <p class="year">(1452 - 1519)</p>
                </div>
                <p class="name">DA VINCI</p>
                <button type="submit">Ver</button>
            </div>
        </div>
    </div>

    <div class="exhibition-footer">
        <!-- REF: https://codepen.io/aybukeceylan/pen/PopNYeJ -->
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
            <figure>
                <img src="artes/exhibition/cards/Michelangelo.jpg" alt="">
                <figcaption><a href="#">1</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/1.jpg" alt="">
                <figcaption><a href="#">2</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/2.jpg" alt="">
                <figcaption><a href="#">3</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/3.webp" alt="">
                <figcaption><a href="#">4</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/5.jpg" alt="">
                <figcaption><a href="#">5</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/4.jpg" alt="">
                <figcaption><a href="#">6</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/6.webp" alt="">
                <figcaption><a href="#">7</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/7.jpg" alt="">
                <figcaption><a href="#">8</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/8.jpg" alt="">
                <figcaption><a href="#">9</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/9.webp" alt="">
                <figcaption><a href="#">10</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/10.webp" alt="">
                <figcaption><a href="#">11</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/11.jpg" alt="">
                <figcaption><a href="#">12</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/12.webp" alt="">
                <figcaption><a href="#">13</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/13.jpg" alt="">
                <figcaption><a href="#">14</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/14.jpg" alt="">
                <figcaption><a href="#">15</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/16.webp" alt="">
                <figcaption><a href="#">16</a></figcaption>
            </figure>
            <figure>
                <img src="artes/exhibition/repository/17.webp" alt="">
                <figcaption><a href="#">17</a></figcaption>
            </figure>
        </div>
    </div>
    <div class="whitespace-scroll"></div>
</main>

</body>
</html>
    