<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/scroll-carosello-2.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Seleziona il contenitore principale del carosello orizzontale.
            const slider = document.querySelector("#carousel");

            // Se l'elemento non è presente nella pagina, interrompe l'esecuzione.
            if (!slider) {
                return;
            }

            // Variabili di stato usate per gestire il trascinamento con il mouse.
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener("mousedown", (e) => {
                // Avvia il drag e memorizza la posizione iniziale.
                isDown = true;
                slider.classList.add("dragging");
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });

            slider.addEventListener("mouseleave", () => {
                // Se il mouse esce dal carosello, termina il trascinamento.
                isDown = false;
                slider.classList.remove("dragging");
            });

            slider.addEventListener("mouseup", () => {
                // Al rilascio del mouse, ferma il drag.
                isDown = false;
                slider.classList.remove("dragging");
            });

            slider.addEventListener("mousemove", (e) => {
                // Scorre il carosello solo mentre il mouse è premuto.
                if (!isDown) {
                    return;
                }

                e.preventDefault();

                // `e.pageX` è la coordinata orizzontale del mouse nella pagina.
                // Sottraendo `slider.offsetLeft` otteniamo una posizione relativa al bordo sinistro del carosello.
                // In pratica: dove si trova il mouse *dentro* il blocco del carousel lungo l'asse X.
                const x = e.pageX - slider.offsetLeft;

                // `x - startX` calcola di quanti pixel il mouse si è mosso dal punto iniziale del drag.
                // Se il risultato è positivo, il mouse è andato verso destra; se è negativo, verso sinistra.
                // Il fattore `* 1.5` amplifica questo spostamento: ogni 1px mosso dal mouse
                // produce 1.5px di scroll, rendendo il trascinamento più reattivo e "sensibile".
                const walk = (x - startX) * 1.5;

                // `scrollLeft` contiene il valore di scroll che il carosello aveva all'inizio del drag.
                // Sottraendo `walk`, il contenuto viene fatto scorrere in tempo reale mentre muovi il mouse.
                // Esempio: se all'inizio `scrollLeft = 300` e `walk = 60`, il nuovo valore sarà `240`.
                slider.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
    <?php
});