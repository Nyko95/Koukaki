

// EFFET PARALLAX VIDEO HEADER AVEC SIMPLE PARALLAXE ( déclaré dans functions.php )

document.addEventListener('DOMContentLoaded', function () {
    const video = document.querySelector('.video-oscars');
    new simpleParallax(video, {
        orientation: 'right',
        scale: 1.15,
        delay: 0.5,
        transition: 'ease-in-out'
    });
});

/*CREATION D'ANIMATION INDIVIDUELLE NOTAMMENT POUR LE FADE IN DE MES TITRES AVEC LA CLASSE CSS "WORD-ANIMATION"*/

// Sélectionnez tous les éléments h2 et h3 sur la page
const title = document.querySelectorAll("h2,h3");

// Parcourez chaque titre sélectionné
title.forEach((currentTitle) => {
  // Divisez le texte du titre en mots
  const words = currentTitle.textContent.split(" ");

  // Effacez le texte du titre
  currentTitle.textContent = "";

  // Parcourez chaque mot du titre
  words.forEach((currentWord, index) => {
    // Créez un nouvel élément span
    const span = document.createElement("span");

    // Définissez le texte de l'élément span sur le mot actuel
    span.textContent = currentWord + " ";

    // Ajoutez la classe "word-animation" à l'élément span
    span.classList.add("word-animation");

    

    // Ajoutez l'élément span au titre
    currentTitle.appendChild(span);
  });
});


// Créez un nouvel observateur d'intersection
const observer = new IntersectionObserver(
  // Cette fonction est appelée chaque fois qu'un titre entre ou sort de la fenêtre de visualisation
  (entries) => {
    entries.forEach((entry) => {
      // Si le titre est dans la fenêtre de visualisation
      if (entry.isIntersecting) {
        // Ajoutez la classe "animate-title" au titre
        entry.target.classList.add("animate-title");
      } else {
        // Sinon, retirez la classe "animate-title" du titre
        entry.target.classList.remove("animate-title");
      }
    });
  },
  // Ces options déterminent quand l'observateur d'intersection déclenche la fonction ci-dessus
  {
    rootMargin: "-10% 0px", // L'animation se déclenche lorsque le titre est à 10% de la fenêtre de visualisation
    threshold: 0.1, //et le seuil reglé a 10% l’animation commencera lorsque 10% du titre sera visible à l’écran.
  }
);

// Faites observer chaque titre par l'observateur d'intersection
title.forEach((currentTitle) => {
  observer.observe(currentTitle);
});

//initialise de la bibliotheque JavaScript "skrollr" pour ajouter des animations au défilement de la page
var s = skrollr.init();
console.log(skrollr);

//initialise la hauteur du body en auto pour s'adapter dynamiquement à la taille de son contenu
document.body.style.height = "auto";

const swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  slidesPerView: "auto",
  slidesPerGroup: 1,
  centeredSlides: true,
  spaceBetween: 15,
  loop: true,
  coverflowEffect: {
      depth: 0,
      modifier: 1,
      rotate: 60,
      scale: 0.6,
      slideShadows: false,
      stretch: 0,
  },
  autoplay: {
      delay: 4000,
  },
});

/*MENU BURGER*/

document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const body = document.querySelector('body');
  const burgerMenu = document.getElementById('burger-menu');

  // Ajoute un gestionnaire d'événements pour le clic sur le bouton burger
  menuToggle.addEventListener('click', function() {
      // Ajoute ou supprime la classe "menu-open" au corps de la page
      body.classList.toggle('menu-open');

      // Affiche dans la console si la classe "menu-open" est ajoutée ou retirée
      if (body.classList.contains('menu-open')) {
          console.log('Menu ouvert');
      } else {
          console.log('Menu fermé');
      }
  });

  // Ferme le menu burger lorsque l'utilisateur clique en dehors du menu
  document.addEventListener('click', function(event) {
      if (!burgerMenu.contains(event.target) && !menuToggle.contains(event.target)) {
          body.classList.remove('menu-open');
          console.log('Menu fermé');
      }
  });
});