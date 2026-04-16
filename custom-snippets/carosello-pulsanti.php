<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/carosello-pulsanti.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pulsante per scorrere verso destra.
            const butRight = document.querySelector("#but-ri");
            // Pulsante per scorrere verso sinistra.
            const butLeft = document.querySelector("#but-le");
            // Contenitore del carosello da spostare orizzontalmente.
            const carousel = document.querySelector("#carousel");

            if (butRight && carousel) {
                butRight.addEventListener("click", () => {
                    // Sposta il carosello in avanti con animazione fluida.
                    carousel.scrollBy({
                        left: 220,
                        behavior: "smooth"
                    });
                });
            }

            if (butRight && carousel) {
                butLeft.addEventListener("click", () => {
                    // Sposta il carosello indietro con animazione fluida.
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