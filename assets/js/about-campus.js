document.addEventListener("DOMContentLoaded", function () {

    const track = document.querySelector("[data-campus-track]");
    const previous = document.querySelector("[data-campus-prev]");
    const next = document.querySelector("[data-campus-next]");

    if (!track || !previous || !next) {
        return;
    }

    const controls = previous.parentElement;


    function getScrollAmount() {

        const card = track.querySelector(".campus-card");

        if (!card) {
            return 300;
        }

        const styles = window.getComputedStyle(track);
        const gap = parseFloat(styles.columnGap) || 0;

        return card.offsetWidth + gap;
    }


    function updateControls() {

        const maxScroll =
            track.scrollWidth - track.clientWidth;

        /*
         * No horizontal overflow:
         * hide the controls.
         */
        if (maxScroll <= 2) {

            controls.classList.add("is-hidden");

            return;
        }

        controls.classList.remove("is-hidden");


        /*
         * Disable previous when at start.
         */
        previous.disabled =
            track.scrollLeft <= 2;


        /*
         * Disable next when at end.
         */
        next.disabled =
            track.scrollLeft >= maxScroll - 2;
    }


    previous.addEventListener("click", function () {

        track.scrollBy({
            left: -getScrollAmount(),
            behavior: "smooth"
        });

    });


    next.addEventListener("click", function () {

        track.scrollBy({
            left: getScrollAmount(),
            behavior: "smooth"
        });

    });


    track.addEventListener(
        "scroll",
        updateControls
    );


    window.addEventListener(
        "resize",
        updateControls
    );


    updateControls();

});