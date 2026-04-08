<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/dropdown-soluzioni.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuLink = document.querySelector(".menu-item-1510 a");
            const dropdown = document.querySelector("#dropdown-soluzioni");
            const xIcon = document.querySelector(".butDrop");
            const headd = document.querySelector("#header-div");

            if (menuLink && dropdown) {
                menuLink.addEventListener("click", function (e) {
                    e.preventDefault();
                    dropdown.classList.toggle("open");
                    headd.classList.toggle("visible");
                });

                xIcon.addEventListener("click", function (e) {
                    e.preventDefault();
                    dropdown.classList.remove("open");
                    headd.classList.remove("visible");
                });
            }
        });
    </script>
    <?php
});