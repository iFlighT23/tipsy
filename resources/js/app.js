import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'aos/dist/aos.css';
import AOS from 'aos';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();



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


// Cette ligne déclare une variable `defaultTransform` et lui attribue une valeur initiale de 0

let defaultTransform = 0;

// Cette ligne déclare une fonction nommée `goNext`, qui sera appelée lorsque l'utilisateur clique sur un élément avec l'ID "next"

function goNext() {

    //     Cette ligne soustrait 398 à la valeur actuelle de `defaultTransform`
    defaultTransform = defaultTransform - 398;

    // Cette ligne récupère l'élément HTML avec l'ID "slider" et le stocke dans la variable `slider`.

    let slider = document.getElementById("slider");

    // Cette ligne vérifie si la valeur absolue de `defaultTransform` est supérieure ou égale à la moitié de la largeur du contenu de `slider` divisée par 1.7. Si c'est le cas, `defaultTransform` est réinitialisé à 0.

    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;

    //Cette ligne met à jour la propriété CSS `transform` de `slider` avec la valeur de `defaultTransform`, ce qui déplace horizontalement le contenu de `slider`.
    slider.style.transform = "translateX(" + defaultTransform + "px)";

    //Cette ligne ajoute un écouteur d'événements pour le clic sur un élément avec l'ID "next", qui déclenchera l'exécution de la fonction `goNext`
}

// ajout d'une condition : si next est définie
if(document.getElementById("next") !== null) {

    next.addEventListener("click", goNext);
}

//Cette ligne déclare une fonction nommée `goPrev`, qui sera appelée lorsque l'utilisateur clique sur un élément avec l'ID "prev".


function goPrev() {

    // Cette ligne récupère l'élément HTML avec l'ID "slider" et le stocke dans la variable `slider`.

    let slider = document.getElementById("slider");

    //Cette ligne vérifie si la valeur absolue de `defaultTransform` est égale à 0. Si c'est le cas, `defaultTransform` est réinitialisé à 0.
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;

    //Si la condition précédente n'est pas remplie, cette ligne ajoute 398 à la valeur actuelle de `defaultTransform`.
    else defaultTransform = defaultTransform + 398;

    // Cette ligne met à jour la propriété CSS `transform` de `slider` avec la valeur de `defaultTransform`, ce qui déplace horizontalement le contenu de `slider`.

    slider.style.transform = "translateX(" + defaultTransform + "px)";

}

//Cette ligne ajoute un écouteur d'événements pour le clic sur un élément avec l'ID "prev", qui déclenchera l'exécution de la fonction `goPrev
if(document.getElementById("prev") !== null) {

    prev.addEventListener("click", goPrev);
}



// je selectionne tout les éléments qui on la classe "shareButton"

const shareButtons = document.querySelectorAll(".shareButton");

// Ensuite, on boucle sur chacun de ces éléments pour leur ajouter un écouteur d’événement qui se déclenche lorsqu’on clique dessus

shareButtons.forEach(shareButton => {

    // Lorsque l’utilisateur clique sur un bouton, on récupère l’élément HTML suivant (ici, la div “socials”)
    shareButton.addEventListener("click", () => {
        // console.log("couin")
        //  quand j'appuie sur ce bouton je veux afficher la div social juste après
        let socials = shareButton.nextElementSibling;
        console.log(socials)

        // on ajoute ou retire la classe “hidden” à cet élément pour le cacher ou l’afficher.
        socials.classList.toggle("hidden");
    })
});
