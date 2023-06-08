


</div> <!-- ferméture div de la class container-->
    <?php 
        // la fonction wp_nav_menu() prend en paramettre un theme_location() qui doit etre le meme que le register_nav_menu()
        wp_nav_menu([
        'theme_location' => 'footer', // menu associé
        'container' => false,
        'menu_class'=> 'navbar-nav me-auto mb-2 mb-lg-0' //Classe CSS à utiliser pour l’élément ul qui forme le menu.(ici j'ai pris celle de bootstrap)
        //Faire défaut.'menu'
        ])
    ?>
    <?php wp_footer() // ajoute au theme le footer wordpress?>

</body>
</html>