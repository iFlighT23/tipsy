import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'aos/dist/aos.css';
import AOS from 'aos';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

AOS.init();
