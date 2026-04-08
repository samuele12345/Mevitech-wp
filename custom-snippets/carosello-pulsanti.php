<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/carosello-pulsanti.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const butRight = document.querySelector("#but-ri");
            const butLeft = document.querySelector("#but-le");
            const carousel = document.querySelector("#carousel");

            if (butRight && carousel) {
                butRight.addEventListener("click", () => {
                    carousel.scrollBy({
                        left: 220,
                        behavior: "smooth"
                    });
                });
            }

            if (butRight && carousel) {
                butLeft.addEventListener("click", () => {
                    carousel.scrollBy({
                        left: -220,
                        behavior: "smooth"
                    });
                });
            }
        });
    </script>
    <?php
});