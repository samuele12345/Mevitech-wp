<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/div-click.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const govcom = document.querySelector("#scopri-det-govcom");
            const app = document.querySelector("#scopri-det-app");
            const bus = document.querySelector("#scopri-sol-bus");
            const cor = document.querySelector("#scopri-sol-cor");
            const gov = document.querySelector("#scopri-sol-gov");

            if (govcom) {
                govcom.addEventListener("click", function () {
                    window.location.href = "http://localhost/Progetti/Mevitech/govcom/";
                });
            }

            if (app) {
                app.addEventListener("click", function () {
                    window.location.href = "http://localhost/Progetti/Mevitech/app-hr-mevitech/";
                });
            }

            if (bus) {
                bus.addEventListener("click", function () {
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_business/";
                });
            }

            if (cor) {
                cor.addEventListener("click", function () {
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_corporate/";
                });
            }

            if (gov) {
                gov.addEventListener("click", function () {
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_governance/";
                });
            }
        });
    </script>
    <?php
});