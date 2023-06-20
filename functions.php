<?php
    
    function monthemeAjoutFonctionnalites() {
        add_theme_support('title-tag'); // Ajoute la prise en charge de la balise <title> automatiquement dans l'en-tête du site.
        add_theme_support('menus'); // Ajoute la prise en charge des menus.
    }

    function registerMenu() {
        register_nav_menu('header', 'Entete du menu'); // Enregistre un emplacement de menu de navigation appelé 'header' avec la description 'Entête du menu'.
        register_nav_menu('footer', 'Bas de page'); // Enregistre un emplacement de menu de navigation appelé 'footer' avec la description 'Bas de page'.
    }

    function montheme_register_style() {
        // Enregistre des fichiers de style CSS à utiliser dans le thème.
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2'); // Ajoute le fichier CSS de Bootstrap.
        wp_enqueue_style('my-custom-style', get_stylesheet_directory_uri() . '/style/style2.css'); // Ajoute le fichier CSS personnalisé dans le répertoire du thème.
        wp_enqueue_style('lightbox-style', get_stylesheet_directory_uri() . '/style/lightbox.min.css'); // Ajoute le fichier CSS de Lightbox.
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',array(), '6.4.0'); // Ajoute le fichier CSS de Font Awesome.
    }
    
    function montheme_register_script() {
        wp_deregister_script('jquery'); // Désenregistre la version précédente de jQuery.
        wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '3.7.0', true); // Ajoute la dernière version de jQuery.
        wp_enqueue_script('lightbox-script', get_stylesheet_directory_uri() . '/javaScript/lightbox-plus-jquery.min.js', array('jquery'), '1.0', true); // Ajoute le fichier JavaScript de Lightbox dépendant de jQuery.
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/javaScript/custom-script.js', array('jquery'), '1.0', true); // Ajoute le fichier JavaScript personnalisé dépendant de jQuery.
    }
    
    function montheme_menu_class($classes){
        // Ajoute une classe CSS supplémentaire à chaque élément de menu.
        $classes [] = 'nav-item'; // Ajoute la classe 'nav-item' au tableau de classes.
        return $classes; // Renvoie le tableau de classes modifié.
    }

    function montheme_menu_link_class($attributs){
        // Ajoute une classe CSS supplémentaire aux attributs des liens du menu.
        $attributs['class'] = 'nav-link'; // Ajoute la classe 'nav-link' à la liste des classes des attributs.
        return $attributs; // Renvoie les attributs modifiés.
    }

    // Exécute les fonctions lors du chargement du thème.
    add_action('after_setup_theme', 'monthemeAjoutFonctionnalites'); // Ajoute les fonctionnalités spécifiées au thème.
    add_action('after_setup_theme', 'registerMenu');
    add_action('wp_enqueue_scripts', 'montheme_register_style'); // Enregistre les fichiers de style à utiliser dans le thème.
    add_action('wp_enqueue_scripts', 'montheme_register_script'); // Enregistre les fichiers JavaScript à utiliser dans le thème.
    add_filter('nav_menu_css_class', 'montheme_menu_class'); // Ajoute une classe CSS aux éléments de menu.
    add_filter('nav_menu_link_attributes', 'montheme_menu_link_class'); // Ajoute une classe CSS aux liens du menu.
?>