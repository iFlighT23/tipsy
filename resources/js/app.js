import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


const modalbg = document.querySelector('#modal-bg');
const modalSwitch = document.querySelector('#modal-switch');
const modalSwitch2 = document.querySelector('#modal-switch2');
const modalBox = document.querySelector('#modal-box');
// const modalClose = document.getElementById('modal-close');

modalbg.addEventListener("click", function(event) {
    const outsideclick = !modalBox.contains(event.target)
if (outsideclick) {
      modalBox.classList.add('hidden')
      modalbg.classList.add('hidden')
}
});

modalSwitch.addEventListener("click", function() {
  modalBox.classList.remove('hidden')
  modalbg.classList.remove('hidden')
});

modalSwitch2.addEventListener("click", function() {
  modalBox.classList.remove('hidden')
  modalbg.classList.remove('hidden')
});

// modalClose.addEventListener("click", function() {
//   modalBox.classList.remove('hidden')
//   modalbg.classList.remove('hidden')
// });
