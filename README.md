# Mevitech WordPress Website

Repository del sito WordPress Mevitech realizzato con Elementor e tema Hello Elementor.
Il progetto include `wp-content`, snippet esportati dal plugin Code Snippets e un backup `.wpress` utile per riallineare rapidamente un ambiente locale o di staging.

## Struttura utile

- `wp-content/` contiene temi, plugin e upload del sito.
- `backup/` contiene il backup completo esportato con All-in-One WP Migration.
- `custom-snippets/` raccoglie gli snippet custom esportati in JSON e le copie PHP leggibili.
- `custom-css/` contiene estratti leggibili del CSS custom recuperato dal dump database.
- `css-generico/` contiene copie complete dei CSS frontend non custom del tema attivo Hello Elementor.
- `custom-html/` contiene ricostruzioni leggibili del markup custom individuato nei dati Elementor.
- `php_html-generico/` contiene copie complete dei template frontend non custom del tema Hello Elementor.
- `js-generico/` contiene copie complete degli script frontend non custom del tema Hello Elementor.

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

- [custom-css/global-site.css](custom-css/global-site.css)
- [custom-css/interactive-components.css](custom-css/interactive-components.css)
- [custom-html/dropdown-soluzioni.html](custom-html/dropdown-soluzioni.html)
- [custom-html/cards-and-carousel.html](custom-html/cards-and-carousel.html)

Questi file sono documentativi: non sostituiscono il rendering completo di Elementor, ma raccolgono gli estratti piu utili per manutenzione e consultazione.

## Codice non custom estratto

Si, e possibile estrarre anche il codice non custom, ma in WordPress conviene delimitare bene il perimetro: duplicare l'intero core o tutti gli asset dei plugin renderebbe il repository molto rumoroso e poco utile alla consultazione.

Per questo repository sono state create tre cartelle dedicate con copie complete dei file frontend generici del tema attivo Hello Elementor:

- [php_html-generico](php_html-generico) contiene i template del tema che generano la struttura HTML lato frontend. In WordPress questi file sono normalmente template PHP, quindi l'"HTML generico" del sito coincide con header, footer, index e template-parts del tema.
- [css-generico](css-generico) contiene i CSS completi del tema, separati dagli estratti custom salvati in [custom-css](custom-css).
- [js-generico](js-generico) contiene gli script frontend completi del tema, separati dagli snippet custom salvati in [custom-snippets](custom-snippets).

Attualmente sono stati copiati i seguenti riferimenti non custom:

- [php_html-generico/hello-elementor-header.php](php_html-generico/hello-elementor-header.php)
- [php_html-generico/hello-elementor-footer.php](php_html-generico/hello-elementor-footer.php)
- [php_html-generico/hello-elementor-index.php](php_html-generico/hello-elementor-index.php)
- [php_html-generico/hello-elementor-404.php](php_html-generico/hello-elementor-404.php)
- [php_html-generico/hello-elementor-archive.php](php_html-generico/hello-elementor-archive.php)
- [php_html-generico/hello-elementor-dynamic-header.php](php_html-generico/hello-elementor-dynamic-header.php)
- [php_html-generico/hello-elementor-dynamic-footer.php](php_html-generico/hello-elementor-dynamic-footer.php)
- [php_html-generico/hello-elementor-template-header.php](php_html-generico/hello-elementor-template-header.php)
- [php_html-generico/hello-elementor-template-footer.php](php_html-generico/hello-elementor-template-footer.php)
- [php_html-generico/hello-elementor-search.php](php_html-generico/hello-elementor-search.php)
- [php_html-generico/hello-elementor-single.php](php_html-generico/hello-elementor-single.php)
- [css-generico/hello-elementor-style.css](css-generico/hello-elementor-style.css)
- [css-generico/hello-elementor-reset.css](css-generico/hello-elementor-reset.css)
- [css-generico/hello-elementor-header-footer.css](css-generico/hello-elementor-header-footer.css)
- [css-generico/hello-elementor-theme.css](css-generico/hello-elementor-theme.css)
- [js-generico/hello-elementor-frontend.js](js-generico/hello-elementor-frontend.js)
- [js-generico/hello-elementor-menu.js](js-generico/hello-elementor-menu.js)

Queste copie sono pensate come riferimento rapido per analisi e manutenzione. La fonte canonica resta comunque dentro [wp-content/themes/hello-elementor](wp-content/themes/hello-elementor).

## Dove guardare per altre personalizzazioni

- `custom-snippets/` per la logica custom lato frontend agganciata a `wp_footer`.
- `custom-css/` e `custom-html/` per i riferimenti leggibili estratti dal database locale.
- `css-generico/`, `php_html-generico/` e `js-generico/` per i file frontend non custom del tema attivo, copiati integralmente come riferimento.
- `wp-content/themes/hello-elementor/` per verificare eventuali override futuri del tema attivo.
- `backup/*.wpress` se serve ripristinare il sito completo e riestrarre impostazioni non presenti nel filesystem.
- `database/` solo in ambiente locale, se serve analizzare dump SQL non versionati.

## Setup locale rapido

1. Ripristinare il backup presente in `backup/` tramite All-in-One WP Migration.
2. Verificare che i plugin principali siano attivi, in particolare Elementor, Elementor Pro e Code Snippets.
3. Usare i file in `custom-snippets/` come riferimento per controllare gli snippet custom dopo il ripristino.
4. Usare `custom-css/` e `custom-html/` come riferimento rapido per il CSS e il markup custom gia estratti dal dump locale.
5. Usare `css-generico/`, `php_html-generico/` e `js-generico/` per consultare rapidamente i file frontend non custom del tema attivo.
6. Se serve recuperare altro materiale, analizzare un dump SQL locale in `database/`, che resta escluso dal versionamento.