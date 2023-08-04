import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'aos/dist/aos.css';
import AOS from 'aos';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();



AOS.init();


AOS.init();


const lemons = document.querySelectorAll(".lemon");

// On selectionne tout les élèments qui ont la classe lemon

lemons.forEach((lemon, index) => {

    // On utilise ensuite une boucle pour parcourir chaque élément dans lemons

  let clickCount = 0;

//   on , ajoute un écouteur d’événements à chaque élément

  lemon.addEventListener("click", () => {
    if (clickCount === 0) {

    //    On utilise également une variable pour stocker le nombre de clics pour chaque élément

      lemon.style.opacity = "100";

    //  On modifie la propriété opacity en conséquence.
      clickCount++;
    } else {
      lemon.style.opacity = "0.3";
      clickCount--;
    }
  });
});



let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    let slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    let slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);


