document.addEventListener("DOMContentLoaded", function () {

    const formLinks = document.querySelectorAll(
        '[data-focus-form]'
    );

    const formCards = document.querySelectorAll(
        '.enrol-form-card'
    );


    /*
     * Focus a specific form card
     */
    function focusForm(formId, updateHash = true) {

        const selectedForm =
            document.getElementById(formId);

        if (!selectedForm) {
            return;
        }


        /*
         * Remove focus state from
         * all form cards first.
         */
        formCards.forEach(function (card) {

            card.classList.remove(
                "enrol-form-card--focused"
            );

        });


        /*
         * Add focus state to
         * selected form.
         */
        selectedForm.classList.add(
            "enrol-form-card--focused"
        );


        /*
         * Smoothly scroll to the form.
         */
        selectedForm.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });


        /*
         * Update URL without jumping.
         */
        if (updateHash) {

            history.replaceState(
                null,
                "",
                "#" + formId
            );

        }


        /*
         * After the scroll animation,
         * focus the first input.
         */
        window.setTimeout(function () {

            const firstField =
                selectedForm.querySelector(
                    'input:not([type="hidden"]), select, textarea'
                );

            if (firstField) {

                firstField.focus({
                    preventScroll: true
                });

            }

        }, 650);


        /*
         * Remove the visual highlight
         * after a few seconds.
         */
        window.setTimeout(function () {

            selectedForm.classList.remove(
                "enrol-form-card--focused"
            );

        }, 4000);

    }


    /*
     * Hero button clicks
     */
    formLinks.forEach(function (link) {

        link.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                const formId =
                    link.dataset.focusForm;

                focusForm(formId);

            }
        );

    });


    /*
     * Support direct links such as:
     *
     * /enrol-partner/#enrol-form
     * /enrol-partner/#partner-form
     */
    const hash =
        window.location.hash.replace("#", "");

    if (
        hash === "enrol-form" ||
        hash === "partner-form"
    ) {

        window.setTimeout(function () {

            focusForm(hash, false);

        }, 250);

    }

});