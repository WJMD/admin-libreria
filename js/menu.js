ocument.addEventListener("DOMContentLoaded", function () {
    var navLinks = document.querySelectorAll('.nav-link[data-toggle="collapse"]');

    navLinks.forEach(function (link) {
        var targetId = link.getAttribute("data-target");
        var submenu = document.querySelector(targetId);

        // Restaurar el estado del menú desde localStorage
        if (localStorage.getItem(targetId) === "true") {
            submenu.classList.add("show");
            submenu.setAttribute("aria-expanded", "true");
        } else {
            submenu.classList.remove("show");
            submenu.setAttribute("aria-expanded", "false");
        }

        link.addEventListener("click", function (e) {
            e.preventDefault();
            
            if (submenu.classList.contains("show")) {
                submenu.classList.remove("show");
                submenu.setAttribute("aria-expanded", "false");
                localStorage.setItem(targetId, "false");
            } else {
                submenu.classList.add("show");
                submenu.setAttribute("aria-expanded", "true");
                localStorage.setItem(targetId, "true");
            }
        });
    });
});