<?php
    
    function monthemeAjoutFonctionnalites() {
        add_theme_support('title-tag'); // title-tag' est utilisée pour ajouter automatiquement la balise <title> dans l’en-tête du site, elle nomme dynamiquement les pages 
        add_theme_support('menus'); // ajout la focntionnalité de ménu
        register_nav_menu('header', 'Entete du menu'); //  register_nav_menu () ajoute une nav bar au ménu prend deux paramètre: 1er: id de localisation pour pouvoir spécifier quel menu on veut afficher
        // et 2e paramètre :  la description du ménu. Cette fonction Enregistre un emplacement de menu de navigation pour un thème.

        register_nav_menu('footer', 'Pied de page');
    }

    function monthemeAjoutJsEtCss() {

        //les dépendances 
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2'); //est utilisée pour enregistrer un fichier de style dans WordPress, ici le style c'est bootstrap
        wp_enqueue_style('bootstrap');
        /*
            Les paramètres de wp_registrer_style
            'bootstrap' : le nom du style que vous souhaitez enregistrer. Dans cet exemple, le nom du style est "bootstrap".
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' : l'URL du fichier CSS de Bootstrap que vous souhaitez enregistrer.
            array() : les dépendances du style. Dans cet exemple, nous n'avons pas de dépendances, donc nous utilisons un tableau vide.
            '5.0.2' : la version du fichier CSS de Bootstrap que vous enregistrez.

            la fonction wp_enqueue_style() est utilisée pour ajouter le style enregistré à votre thème WordPress.
            Elle prend le nom du style enregistré en tant que paramètre. Dans cet exemple, nous utilisons 'bootstrap' (exemple ci-dessus)
        */
    
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '2.11.6', true);
        wp_enqueue_script('popper');
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_enqueue_script('jquery');
    
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('popper', 'jquery'), '5.0.2', true);
        wp_enqueue_script('bootstrap');
    }

    //Cette fonction retourne un tableau de classe CSS appliquées à l’élément <li> de l’élément de menu qui sera utilisé dans la fonction add_filter
    function montheme_menu_class($classes){
        $classes [] = 'nav-item'; 
        return $classes; 
    }

    function montheme_menu_link_class($attributs){
        $attributs['class'] = 'nav-link';
        return $attributs;
    }
    add_action('after_setup_theme', 'monthemeAjoutFonctionnalites');
    add_action('wp_enqueue_scripts', 'monthemeAjoutJsEtCss');
    add_filter('nav_menu_css_class', 'montheme_menu_class');// cette fonction prend en parametre le nom du hook et la fontion de rappel qui retourne une valeur stocké dans un tableau
    add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
?>