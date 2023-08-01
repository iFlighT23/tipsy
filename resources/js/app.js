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

      lemon.style.opacity = "0.8";

    //  On modifie la propriété opacity en conséquence.
      clickCount++;
    } else {
      lemon.style.opacity = "0.3";
      clickCount--;
    }
  });
});

const carousel = () => {
	let autoplayInterval;

	return {
		selected: 0,
		images: [
			"https://www.cdiscount.com/pdt2/1/6/4/1/700x700/out5781532912164/rw/10-ensembles-d-outils-de-barman-pour-bar-a-cocktai.jpg",
			"https://maidestept.ro/wp-content/uploads/2020/08/17287746.jpg",
			"https://m.media-amazon.com/images/I/61Q0eDeyQqL._AC_SX522_.jpg",
			"https://ae01.alicdn.com/kf/Hfd49deb323ad4d58bdcf56f2f234d5a6d/Cocktail-Martini-Glass-Wine-Glasses-Beer-Juice-Drink-Cup.jpg"

		],
		init() {
			this.startAutoplay();
		},
		startAutoplay() {
			autoplayInterval = setInterval(() => {
				this.next();
			}, 3000); // Adjust the interval time (in milliseconds) as needed
		},
		stopAutoplay() {
			clearInterval(autoplayInterval);
		},
		selectImage(index) {
			this.selected = index;
			this.stopAutoplay(); // Stop autoplay when a pagination button is clicked
			this.startAutoplay(); // Restart autoplay after selecting a new image
		},
		next() {
			this.selected = (this.selected + 1) % this.images.length;
		}
	};
};
