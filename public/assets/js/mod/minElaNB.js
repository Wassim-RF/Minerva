export function minimizeNavBar() {
    const minimize_navBarButton = document.getElementById("minimize_navBar--Button");
    const elarged_navBarButton = document.getElementById("elarged_navBar--Button");
    const nav_barText = document.querySelectorAll(".nav_bar--text");
    const nav_barLink = document.querySelectorAll(".nav_bar--link");
    const navBar = document.getElementById("navBar");
    const site_name = document.getElementById("site_name");
    const logout_resume = document.getElementById("logout_resume");
    const logout_complet = document.getElementById("logout_complet");
    const main_body = document.getElementById("mainbody");

    minimize_navBarButton.classList.replace("block" , "hidden");
    elarged_navBarButton.classList.replace("hidden" , "block");
    nav_barText.forEach(txt => {
        txt.classList.add("hidden");
    });
    nav_barLink.forEach(lnk => {
        lnk.classList.add("justify-center")
    })
    navBar.classList.replace("w-[17%]" , "w-[5%]");
    // main_body.classList.replace("w-[83%]" , "w-[95%]");
    site_name.classList.replace("block" , "hidden");
    logout_resume.classList.replace("hidden" , "flex");
    logout_complet.classList.replace("flex" , "hidden")
}

export function elargedNavBar() {
    const minimize_navBarButton = document.getElementById("minimize_navBar--Button");
    const elarged_navBarButton = document.getElementById("elarged_navBar--Button");
    const nav_barText = document.querySelectorAll(".nav_bar--text");
    const nav_barLink = document.querySelectorAll(".nav_bar--link");
    const navBar = document.getElementById("navBar");
    const site_name = document.getElementById("site_name");
    const logout_resume = document.getElementById("logout_resume");
    const logout_complet = document.getElementById("logout_complet");
    const main_body = document.getElementById("mainbody");

    minimize_navBarButton.classList.replace("hidden" , "block");
    elarged_navBarButton.classList.replace("block" , "hidden");
    nav_barText.forEach(txt => {
        txt.classList.remove("hidden");
    });
    nav_barLink.forEach(lnk => {
        lnk.classList.remove("justify-center")
    })
    navBar.classList.replace("w-[5%]" , "w-[17%]");
    // main_body.classList.replace("w-[95%]" , "w-[83%]");
    site_name.classList.replace("hidden" , "block");
    logout_resume.classList.replace("flex" , "hidden");
    logout_complet.classList.replace("hidden" , "flex")
}