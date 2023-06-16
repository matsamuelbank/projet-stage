
//permet de générer des avis dans la page front-page.php
$(document).ready(function(){
    $('.carousel').carousel({
        padding : 200
    });
    autoplay();
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
});