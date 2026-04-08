# Custom Snippets

Questa cartella contiene le personalizzazioni custom esportate dal plugin Code Snippets e una copia leggibile in PHP per ogni snippet.

## Convenzione dei file

- I file `*.code-snippets.json` sono gli export originali del plugin Code Snippets.
- I file `*.php` sono mirror leggibili creati solo per documentazione e manutenzione.

Ogni file PHP riporta in testa che il contenuto proviene dal relativo JSON.

## Inventario

- [custom-snippets/carosello-pulsanti.code-snippets.json](custom-snippets/carosello-pulsanti.code-snippets.json) e [custom-snippets/carosello-pulsanti.php](custom-snippets/carosello-pulsanti.php)
  Gestisce i pulsanti destra/sinistra del carosello `#carousel`.
- [custom-snippets/div-click.code-snippets.json](custom-snippets/div-click.code-snippets.json) e [custom-snippets/div-click.php](custom-snippets/div-click.php)
  Gestisce redirect click-based su specifici elementi del layout.
- [custom-snippets/dropdown-soluzioni.code-snippets.json](custom-snippets/dropdown-soluzioni.code-snippets.json) e [custom-snippets/dropdown-soluzioni.php](custom-snippets/dropdown-soluzioni.php)
  Apre e chiude il dropdown soluzioni nel menu.
- [custom-snippets/scroll-carosello-2.code-snippets.json](custom-snippets/scroll-carosello-2.code-snippets.json) e [custom-snippets/scroll-carosello-2.php](custom-snippets/scroll-carosello-2.php)
  Abilita il drag orizzontale del carosello con mouse.

## Nota sul CSS custom

Nel repository non sono stati trovati file CSS custom dedicati collegati a questi snippet.
Le classi e gli ID usati dagli snippet sembrano appartenere a markup e stili configurati dentro WordPress o Elementor, quindi verosimilmente salvati nel database e non nel filesystem esportato.

Se serve documentare anche il CSS reale del sito, conviene esportarlo da WordPress oppure recuperarlo dal database del backup ripristinato.