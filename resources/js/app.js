import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


/* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
} 