let slides = document.querySelectorAll('.slide-container'); // Sélectionne tous les éléments avec la classe 'slide-container' et les stocke dans la variable 'slides'.
let index = 0; // Initialise la variable 'index' à 0 pour suivre l'index du slide actuel.

function next(){
    slides[index].classList.remove('active'); // Supprime la classe 'active' du slide actuel.
    index = (index + 1) % slides.length; // Incrémente l'index en utilisant l'opérateur modulo (%) pour revenir au premier slide si on atteint la fin de la liste.
    slides[index].classList.add('active'); // Ajoute la classe 'active' au nouveau slide.
}

function prev(){
    slides[index].classList.remove('active'); // Supprime la classe 'active' du slide actuel.
    index = (index - 1 + slides.length) % slides.length; // Décrémente l'index en utilisant l'opérateur modulo (%) pour revenir au dernier slide si on atteint le début de la liste.
    slides[index].classList.add('active'); // Ajoute la classe 'active' au nouveau slide.
}
