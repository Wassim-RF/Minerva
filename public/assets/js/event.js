import {minimizeNavBar} from './mod/minElaNB.js';
import {elargedNavBar} from './mod/minElaNB.js';

export function eventSetup() {
    const minimize_navBarButton = document.getElementById("minimize_navBar--Button");
    const elarged_navBarButton = document.getElementById("elarged_navBar--Button");

    if (minimize_navBarButton) {
        minimize_navBarButton.addEventListener("click" , minimizeNavBar)
    }
    if (elarged_navBarButton) {
        elarged_navBarButton.addEventListener("click" ,  elargedNavBar)
    }
}