<?php

/**
 * Mirror leggibile dello snippet esportato da custom-snippets/scroll-carosello-2.code-snippets.json.
 * Il codice originale vive nel JSON del plugin Code Snippets; questo file serve solo come riferimento.
 */
add_action('wp_footer', function () {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slider = document.querySelector("#carousel");

            if (!slider) {
                return;
            }

            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener("mousedown", (e) => {
                isDown = true;
                slider.classList.add("dragging");
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });

            slider.addEventListener("mouseleave", () => {
                isDown = false;
                slider.classList.remove("dragging");
            });

            slider.addEventListener("mouseup", () => {
                isDown = false;
                slider.classList.remove("dragging");
            });

            slider.addEventListener("mousemove", (e) => {
                if (!isDown) {
                    return;
                }

                e.preventDefault();

                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 1.5;
                slider.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
    <?php
});