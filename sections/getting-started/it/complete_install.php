<h3>Installazione completa</h3>

<p class="alert alert-info custom">Se non vuoi spendere il tempo per l'installazione del modello, non esitare a contattarci <span class="label label-warning opener" onclick="showChat()">ordina</span> servizio di installaione utilizzando il nostro live-chat.</p>

<p>Questo tipo di installazione può essere utilizzato quando non si ha ancora un negozio OpenCart pronto da usare.
    L'archivio 'themeXXX(full).zip' contiene i file del motore OpenCart e i file del tema, inclusi i dati campione, in
    modo che non sarà necessario installare un motore OpenCart separatamente. I dati campioni ti permetteranno di
    ottenere un sito con un aspetto identico a quello della nostra demo live, inclusi tutti i prodotti dimostrativi, i
    moduli e la configurazione del sito.</p>
<!-- Creating database -->

<h4>Creazione di un database</h4>

<p>Una volta caricati tutti i file nel server, dovrai preparare un nuovo database per il sito OpenCart. Il database
    può essere creato utilizzando uno strumento di gestione database nel tuo cPanel (
    <i>chiamato di solito PhpMyAdmin</i>
    ).
</p>

<p>Puoi creare un nuovo database in phpMyAdmin seguendo questa semplice procedura in tre fasi (guarda le prossime
    diapositive):</p>

<ol class="index-list">
    <li>Per creare elenco database, fai clic sul pulsante Databases nel menu di navigazione in alto.</li>

    <li>Inserisci un nuovo nome per il database nel campo "Create New database".</li>

    <li>Sul lato destro, clicca sul pulsante Create.</li>
</ol>
<h6>A questo punto dovresti vedere il nuovo database nell'elenco. Per accedere al database, fai clic sul suo
    nome:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Apri la scheda "Databases" per vedere l'elenco completo dei database.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Inserisci il nome del database.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Fai clic su "Create".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Il nuovo database apparirà ora nell'elenco. Fai clic sul nome del database per accedervi.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Qui, se vuoi, puoi vedere anche una guida video su come creare un database:
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>
    .
</p>

<p> In caso di problemi, contatta il tuo provider per chiedere assistenza.</p>
<!-- Uploading files -->

<h4>Caricare il template</h4>

<p class="">Per iniziare a lavorare con OpenCart sarà necessario caricare i file sul server. È possibile farlo
    utilizzando il proprio cPanel di hosting oppure un altro client FTP.</p>

<ol class="index-list">
    <li>Apri la cartella del template.</li>

    <li>Vai sulla cartella 'themeXXX' e estrai sul tuo computer i file dall'archivio 'themeXXX(full).zip'. Carica i
        contenuti dell'archivio sul tuo server (
        <a href="/help/how-upload-files-server-2.html" target="_blank">How to upload files to server</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> How
            to upload files to server using cPanel (WebHost manager, WHM)</a>
        ).
    </li>
    <li>Imposta le autorizzazioni corrette per i tuoi file e cartelle OpenCart.
        <ul class="marked-list">
            <li>system/cache/;</li>

            <li>system/logs/;</li>

            <li>system/download/;</li>

            <li>system/upload/;</li>

            <li>image/;</li>

            <li>system/cache/;</li>

            <li>image/catalog/;</li>

            <li>config.php;</li>

            <li>admin/config.php.</li>
        </ul>
        <p>Le autorizzazioni dovrebbero essere impostate su CHMOD 755 o 777, a seconda della configurazione del
            server. Per farlo, seleziona tutti i file e cartelle e trova il pulsante "Change Permissions", se stai
            operando in File Manager. Se stai operando su Linux, utilizza il comando chmod -R 777 "nome
            cartella".</p>
    </li>
</ol>
<!-- OpenCart installation -->

<h4>Installazione OpenCart</h4>

<p>Aprire un Web browser qualunque e inserire il percorso della directory di OpenCart nella barra degli indirizzi (
    <i>ad esempio http://il_tuo_dominio/OpenCart</i>
    ). Verrà visualizzata la pagina di installazione di OpenCart:
</p>

<ol class="index-list">
    <li>Licenza</li>
    <li>Fase preliminare</li>
    <li>Configurazione</li>
    <li>Tutto pronto!</li>
</ol>

<h5>
    Licenza
</h5>

<p>Leggi i termini della licenza OpenCart e, se sei d'accordo, fai clic su <strong>Continue</strong>.</p>

<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-initital.jpg" alt="">
</figure>


<h5>
    Fase preliminare
</h5>

<p>Nel secondo passaggio dell'installazione, OpenCart controllerà se le tue impostazioni di hosting rispondono ai
    requisiti minimi e se le autorizzazioni di file e cartelle sono corrette.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step2.jpg" alt="">
</figure>

<h5>
    Configurazione
</h5>

<p>Nella fase di configurazione sarà necessario inserire i dettagli del database. Il database MySQL è stato creato
    durante la fase di preparazione. Adesso è necessario inserire i dettagli utilizzati:</p>

<ul class="marked-list">
    <li>server di database;</li>

    <li>nome del database;</li>

    <li>nome utente del database;</li>

    <li>password.</li>
</ul>

<p>In caso di problemi con il database, contattare il proprio provider.</p>

<p>Ora è necessario creare l'utente amministratore del proprio negozio. Inserire il nome, la password e l'indirizzo
    di posta elettronica degli amministratori. I dettagli inseriti saranno utilizzati per accedere al back-end del
    negozio.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step3.jpg" alt="">
</figure>

<h5>
    Tutto pronto!
</h5>

<p>Questo è l'ultimo passaggio dell'installazione di OpenCart. Ora ti saranno presentate due opzioni: puoi scegliere
    di essere reindirizzato al tuo sito Web OpenCart, oppure al pannello di amministazione OpenCart.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step4.jpg" alt="">
</figure>

<p>Puoi fare riferimento anche alla seguente guida per l'installazione:
    <a href="/help/OpenCart-2-x-how-to-install-OpenCart-engine-and-a-template-using-fullpackage.html" target="_blank">OpenCart.
        How to install OpenCart engine and template (using “fullpackage”)</a>
    .
</p>

<p class="alert alert-danger"> Rimuovi la cartella "install" dal tuo server. Non riuscirai ad accedere al negozio se
    la cartella rimane sul server.</p>

<p>Per impostare delle restrizioni di accesso, modifica le autorizzazioni in 644 e 444 nei seguenti file:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>
<p>L'installazione è ora completa. Per aprire la pagina del negozio, inserire il
    <strong>nome di dominio</strong> nella barra degli indirizzi del browser. Per accedere al pannello di
    amministrazione di OpenCart, inserire
    <strong>domain_name/admin</strong>.</p>


    <p class="alert alert-danger"> Al fine di evitare che i file del modello vengono scaricati separatamente dopo averlo caricato sul server, si dovrebbe verificare se i file di direct di download non sono vietati allo scaricamento al pubblico. Per fare questo, si dovrebbe aprire .htaccess file nella directory principale del sito e verificare se include i seguenti contenuti:
    <code>
&lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
Order deny,allow
Deny from all
&lt;/FilesMatch&rt;
</code>
Nel caso in cui questo codice non и presente, и consigliato aggiungerlo alla fine del file e rinominare ".htaccess.txt" file in ".htaccess."
    </p>