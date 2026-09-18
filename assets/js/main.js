document.addEventListener("DOMContentLoaded", function () {

    const toggle =
        document.querySelector(".menu-toggle");

    const navigation =
        document.querySelector(".site-navigation");


    if (!toggle || !navigation) {
        return;
    }


    function closeMenu() {

        navigation.classList.remove("is-open");

        toggle.classList.remove("is-active");

        toggle.setAttribute(
            "aria-expanded",
            "false"
        );

    }


    toggle.addEventListener("click", function () {

        const isOpen =
            navigation.classList.toggle("is-open");

        toggle.classList.toggle(
            "is-active",
            isOpen
        );

        toggle.setAttribute(
            "aria-expanded",
            isOpen ? "true" : "false"
        );

    });


    navigation
        .querySelectorAll("a")
        .forEach(function (link) {

            link.addEventListener(
                "click",
                closeMenu
            );

        });


    window.addEventListener("resize", function () {

        if (window.innerWidth > 1100) {
            closeMenu();
        }

    });

});