<?php
    
    function monthemeAjoutFonctionnalites() {
        add_theme_support('title-tag'); // title-tag' est utilisée pour ajouter automatiquement la balise <title> dans l’en-tête du site, elle nomme dynamiquement les pages 
        add_theme_support('menus'); // ajout la focntionnalité de ménu
        register_nav_menu('header', 'Entete du menu'); //  register_nav_menu () ajoute une nav bar au ménu prend deux paramètre: 1er: id de localisation pour pouvoir spécifier quel menu on veut afficher
        // et 2e paramètre :  la description du ménu. Cette fonction Enregistre un emplacement de menu de navigation pour un thème.

        register_nav_menu('footer', 'Bas de page');
    }

    function montheme_register_style() {
        // Les dépendances 
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2'); // Est utilisée pour enregistrer un fichier de style dans WordPress, ici le style c'est bootstrap
        wp_enqueue_style('materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
        wp_enqueue_style('my-custom-style', get_stylesheet_directory_uri() . '/style/style2.css'); // Rajoute le style, remplace le lien CSS du head 
        wp_enqueue_style('lightbox-style', get_stylesheet_directory_uri() . '/style/lightbox.min.css'); // Feuille de style CSS qui permet d'utiliser les lightbox
    }
    
    function montheme_register_script() {
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '2.11.6', true);
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '3.7.0', true);
        wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script(
            'bootstrap',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js',
            array('popper', 'jquery'),
            '5.0.2',
            true
        );
        wp_enqueue_script('lightbox-script', get_stylesheet_directory_uri() . '/javaScript/lightbox-plus-jquery.min.js', array('jquery'), '1.0', true); // Charge le script de lightbox
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
    add_action('wp_enqueue_scripts', 'montheme_register_style');
    add_action('wp_enqueue_scripts', 'montheme_register_script');
    add_filter('nav_menu_css_class', 'montheme_menu_class');// cette fonction prend en parametre le nom du hook et la fontion de rappel qui retourne une valeur stocké dans un tableau
    add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
?>