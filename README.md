# Mevitech WordPress Website

Repository del sito WordPress Mevitech realizzato con Elementor e tema Hello Elementor.
Il progetto include `wp-content`, snippet esportati dal plugin Code Snippets e un backup `.wpress` utile per riallineare rapidamente un ambiente locale o di staging.

## Struttura utile

- `wp-content/` contiene temi, plugin e upload del sito.
- `backup/` contiene il backup completo esportato con All-in-One WP Migration.
- `custom-snippets/` raccoglie gli snippet custom esportati in JSON e le copie PHP leggibili.
- `css/` contiene estratti leggibili del CSS custom recuperato dal dump database.
- `html/` contiene ricostruzioni leggibili del markup custom individuato nei dati Elementor.

I file core WordPress (`wp-admin` e `wp-includes`) non sono versionati in questo repository.
La cartella `database/` e i dump SQL locali sono esclusi dal versionamento tramite `.gitignore` e servono solo per analisi o recupero di configurazioni.

## Personalizzazioni custom tracciate

Le personalizzazioni custom verificabili nel repository sono soprattutto gli snippet del plugin Code Snippets.

- [custom-snippets/carosello-pulsanti.code-snippets.json](custom-snippets/carosello-pulsanti.code-snippets.json) contiene la versione esportata dallo snippet.
- [custom-snippets/div-click.code-snippets.json](custom-snippets/div-click.code-snippets.json) contiene la versione esportata dallo snippet.
- [custom-snippets/dropdown-soluzioni.code-snippets.json](custom-snippets/dropdown-soluzioni.code-snippets.json) contiene la versione esportata dallo snippet.
- [custom-snippets/scroll-carosello-2.code-snippets.json](custom-snippets/scroll-carosello-2.code-snippets.json) contiene la versione esportata dallo snippet.

Per semplificare la lettura sono presenti anche i mirror PHP, pensati come documentazione e non come file caricati da WordPress:

- [custom-snippets/carosello-pulsanti.php](custom-snippets/carosello-pulsanti.php)
- [custom-snippets/div-click.php](custom-snippets/div-click.php)
- [custom-snippets/dropdown-soluzioni.php](custom-snippets/dropdown-soluzioni.php)
- [custom-snippets/scroll-carosello-2.php](custom-snippets/scroll-carosello-2.php)

## CSS custom e altri asset

Non risultano file CSS custom dedicati nel filesystem versionato sotto `wp-content`.
Dalle verifiche effettuate:

- [wp-content/themes/hello-elementor/style.css](wp-content/themes/hello-elementor/style.css#L1) contiene l'header standard del tema Hello Elementor.
- [wp-content/themes/hello-elementor/functions.php](wp-content/themes/hello-elementor/functions.php#L1) non mostra enqueue o registrazioni di CSS custom del progetto.
- [wp-content/uploads/elementor](wp-content/uploads/elementor) contiene solo thumbnail/media generate da Elementor nel backup presente.

Questo indica che l'eventuale CSS personalizzato del sito probabilmente non vive nel repository ma nel database WordPress, ad esempio in impostazioni Elementor, CSS aggiuntivo del Customizer o contenuti salvati nei post meta.

Successivamente il CSS e parte della struttura HTML custom sono stati recuperati dal dump locale e salvati come riferimento in:

- [css/global-site.css](css/global-site.css)
- [css/interactive-components.css](css/interactive-components.css)
- [html/dropdown-soluzioni.html](html/dropdown-soluzioni.html)
- [html/cards-and-carousel.html](html/cards-and-carousel.html)

Questi file sono documentativi: non sostituiscono il rendering completo di Elementor, ma raccolgono gli estratti piu utili per manutenzione e consultazione.

## Dove guardare per altre personalizzazioni

- `custom-snippets/` per la logica custom lato frontend agganciata a `wp_footer`.
- `css/` e `html/` per i riferimenti leggibili estratti dal database locale.
- `wp-content/themes/hello-elementor/` per verificare eventuali override futuri del tema attivo.
- `backup/*.wpress` se serve ripristinare il sito completo e riestrarre impostazioni non presenti nel filesystem.
- `database/` solo in ambiente locale, se serve analizzare dump SQL non versionati.

## Setup locale rapido

1. Ripristinare il backup presente in `backup/` tramite All-in-One WP Migration.
2. Verificare che i plugin principali siano attivi, in particolare Elementor, Elementor Pro e Code Snippets.
3. Usare i file in `custom-snippets/` come riferimento per controllare gli snippet custom dopo il ripristino.
4. Usare `css/` e `html/` come riferimento rapido per il CSS e il markup custom gia estratti dal dump locale.
5. Se serve recuperare altro materiale, analizzare un dump SQL locale in `database/`, che resta escluso dal versionamento.