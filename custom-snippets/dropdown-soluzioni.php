<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/dropdown-soluzioni.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Recupera il link di menu che apre il pannello soluzioni.
            const menuLink = document.querySelector(".menu-item-1510 a");
            // Contenitore del dropdown personalizzato.
            const dropdown = document.querySelector("#dropdown-soluzioni");
            // Pulsante/icona usato per chiudere il dropdown.
            const xIcon = document.querySelector(".butDrop");
            // Elemento del layout su cui viene applicata la visibilità del pannello.
            const headd = document.querySelector("#header-div");

            if (menuLink && dropdown) {
                menuLink.addEventListener("click", function (e) {
                    // Evita il comportamento predefinito del link e apre/chiude il menu.
                    e.preventDefault();
                    dropdown.classList.toggle("open");
                    headd.classList.toggle("visible");
                });

                xIcon.addEventListener("click", function (e) {
                    // Chiude esplicitamente il dropdown quando si clicca sulla X.
                    e.preventDefault();
                    dropdown.classList.remove("open");
                    headd.classList.remove("visible");
                });
            }
        });
    </script>
    <?php
});