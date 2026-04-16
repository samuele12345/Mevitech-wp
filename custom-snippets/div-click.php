<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/div-click.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Blocchi cliccabili che reindirizzano alle rispettive sezioni del sito.
            const govcom = document.querySelector("#scopri-det-govcom");
            const app = document.querySelector("#scopri-det-app");
            const bus = document.querySelector("#scopri-sol-bus");
            const cor = document.querySelector("#scopri-sol-cor");
            const gov = document.querySelector("#scopri-sol-gov");

            if (govcom) {
                govcom.addEventListener("click", function () {
                    // Reindirizza alla pagina dedicata a GovCom.
                    window.location.href = "http://localhost/Progetti/Mevitech/govcom/";
                });
            }

            if (app) {
                app.addEventListener("click", function () {
                    // Reindirizza alla pagina dell'app HR Mevitech.
                    window.location.href = "http://localhost/Progetti/Mevitech/app-hr-mevitech/";
                });
            }

            if (bus) {
                bus.addEventListener("click", function () {
                    // Reindirizza all'area soluzioni business.
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_business/";
                });
            }

            if (cor) {
                cor.addEventListener("click", function () {
                    // Reindirizza all'area soluzioni corporate.
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_corporate/";
                });
            }

            if (gov) {
                gov.addEventListener("click", function () {
                    // Reindirizza all'area soluzioni governance.
                    window.location.href = "http://localhost/Progetti/Mevitech/soluzioni_governance/";
                });
            }
        });
    </script>
    <?php
});