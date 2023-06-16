<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() //ajoute au theme l'entete wordpress ?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php  bloginfo('name') // permet de rajouter le nom du site ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    // la fonction wp_nav_menu() prend en paramettre un theme_location() qui doit etre le meme que le register_nav_menu()
                    wp_nav_menu([
                        'theme_location' => 'header', // menu associé
                        'container' => false, //S’il faut envelopper l’ul, et avec quoi l’envelopper. J'ai mis false car il n'y a pas de div qui enveloppe l'ul
                        
                        'menu_class'=> 'navbar-nav me-auto mb-2 mb-lg-0' //Classe CSS à utiliser pour l’élément ul qui forme le menu.(ici j'ai pris celle de bootstrap)
                        //Faire défaut.'menu'
                    ])
                ?>
            </div>
        </div>
</nav>
    <div class="container">