
</div> <!-- ferméture div de la class container-->

<div id="jaune"></div>
<div id="bleu">
    <p id="lieux">
    Pour votre projet de terrasse en résine, retrouvez-nous à :
    Lyon - Chambéry - Genas - Meyzieu - Chassieu - Colombier-Saugnieu - Miribel - Jonage - Bourgoin-Jailleu - Maubec - Décines - Saint-Cyr-au-Mont-d'Or - Écully
    </p>
    <p id="imgage"><img src=" <?php echo get_template_directory_uri(); ?>/images/deconoble_logo.png" alt=""></p>
    <p id="numero">Séverine Blanc : 06 20 43 05 06</p>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    // la fonction wp_nav_menu() prend en paramettre un theme_location() qui doit etre le meme que le register_nav_menu()
                    wp_nav_menu([
                        'theme_location' => 'footer', // menu associé
                        'container' => false,
                        'menu_class'=> 'navbar-nav me-auto mb-2 mb-lg-0' //Classe CSS à utiliser pour l’élément ul qui forme le menu.(ici j'ai pris celle de bootstrap)
                        //Faire défaut.'menu'
                    ])
                ?>
            </div>
        </div>
</nav>
    <?php wp_footer();// ajoute au theme le footer wordpress?>
</body>
</html>