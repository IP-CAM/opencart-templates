<h3>Pełna instalacja</h3>

<p>Taki system instalacji można stosować, jeśli nie masz gotowego do użycia sklepu OpenCart. Archiwum
    'themeXXX(full).zip' zawiera pliki silnika OpenCart i pliki motywów włącznie z przykładowymi danymi, więc nie musisz
    instalować silnika OpenCart osobnie. Przykładowe dane szablonu sprawią, że twoja witryna będzie wyglądać tak samo,
    jak demonstracja szablonu, włącznie ze wszytskimi przykłądowymi produktami, modułami oraz konfiguracją witryny.</p>

<!-- Creating database -->
<h4>Tworzenie bazy danych</h4>

<p>Można utworzyć nową bazę danych w phpMyAdmin, wykonując 3 proste kroki, wymienione poniżej (zobacz kolejne
    slajdy):</p>

<p>You can create a new database in phpMyAdmin following the simple 3 steps listed below (check the next
    slides):</p>

<ol class="index-list">
    <li>Aby dostać się do listy baz danych, naciśnij przycisk "Bazy danych" w górnym menu nawigacyjnym.</li>

    <li>Wprowadź nazwę nowej bazy danych w polu "Utwórz nową bazę danych".</li>

    <li>Po prawej stronie naciśnij przycisk Create (Utwórz).</li>
</ol>

<h6>Nowo utworzona baza danych powinna się pojawić na liście. Żeby uzyskać dostęp do bazy danych, kliknij jej
    nazwę:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Żeby dostać się do listy baz danych, otwórz zakładkę "Baza danych".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Wprowadź nazwę bazy danych.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Naciśnij przycisk "Create" ("Utwórz").</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Nowo utworzona baza danych pojawi się na liście. Żeby uzyskać dostęp do bazy danych, kliknij jej
            nazwę.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p class="alert alert-info">Zapraszamy do obejrzenia szczegółowego wideo-przewodnika
    <a href="/help/how-to-create-a-database.html" target="_blank">Jak utworzyć bazę danych</a>
    .
</p>

<p>W przypadku jakichkolwiek problemów prosimy skontaktować się z dostawcą usług hostingowych dla dalszej pomocy
    technicznej.</p>

<!-- Uploading files -->
<h4>Przesłanie szablonu</h4>

<p>Żeby rozpocząć pracę z szablonem OpenCart, trzeba przesłać pliki na swój serwer. Można to zrobić za pośrednictwem
    hostingu cPanel lub stosując alternatywne połączenie klient FTP.</p>

<ol class="index-list">
    <li>Otwórz folder szablonu.</li>

    <li>Przejdź do folderu 'themeXXX' i rozpakuj archiwum 'themeXXX(full).zip' na swój komputer. Prześlij zawartość
        archiwum na serwer (
        <a href="/help/how-upload-files-server-2.html" target="_blank"> Jak pzresłać pliki na serwer </a>,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> Jak
            przesłać pliki na serwer, używając cPanel (WebHost manager, WHM)</a>).
    </li>
    <li>Ustaw odpowiednie uprawnienia do folderów i plików OpenCart:
        <ul class="marked-list">
            <li>system/cache/;</li>

            <li>system/logs/;</li>

            <li>system/download/;</li>

            <li>system/upload/;</li>

            <li>image/;</li>

            <li>image/cache/;</li>

            <li>image/catalog/;</li>

            <li>config.php;</li>

            <li>admin/config.php.</li>
        </ul>
        <p>Uprawnienia należy ustawić jako CHMOD 755 lub 777 w zależności od konfiguracji serwera. Żeby to zrobić,
            wybierz wszystkie pliki i foldery i znajdź przycisk "Change Permissions" ("Zmień uprawnienia"), jeśli
            pracujesz w programie File Manager (Menedżer plików). Jeśli pracujesz z Linuxem, użyj polecenia chmod -R 777
            "folder_name".</p>
    </li>
</ol>

<!-- OpenCart installation -->
<h4>Instalacja OpenCart</h4>

<p>Otwórz dowolną przeglądarkę i wpisz ścieżkę do katalogu OpenCart w pasku adresu przeglądarki (<strong>na przykład
        http://your_domain_name/OpenCart</strong>). Zobaczysz stronę instalacyjną OpenCart:</p>

<ol class="index-list">
    <li>Instalacji Licencja</li>
    <li>Wstępny etap</li>
    <li>Konfiguracja</li>
    <li>Instalacja została zakończona.</li>
</ol>

<h5>Instalacja została zakończona.</h5>

<p>Przeczytaj umowę licencyjną OpenCart i naciśnij przycisk <strong>Dalej</strong>, jeśli się zgadzasz.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-initital.jpg" alt="">
</figure>

<h5>Wstępny etap</h5>

<p>Na drugim etapie OpenCart sprawdzi, czy twoje ustawienia hostingowe odpowiadają wymaganym i czy uprawnienia plików i
    folderów są poprawne.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step2.jpg" alt="">
</figure>

<h5>Konfiguracja</h5>

<p>Na etapie konfiguracji trzeba wpisać szczegółowe informacje swojej bazy danych. Baza danych MySQL została utworzona
    na wstęnym etapie, teraz trzeba wprowadzić szczegółowe informacje, które zostały wykorzystane:</p>

<ul class="marked-list">
    <li>serwer bazy danych;</li>

    <li>nazwa bazy danych;</li>

    <li>nazwa użytkownika bazy danych;</li>

    <li>hasło.</li>
</ul>

<p>W przypadku jakichkolwiek pytań co do szczegółowych informacji bazy danych prosimy skontaktować się z dostawcą usług
    hostingowych.</p>

<p>Trzeba utworzyć użytkownika-administratora dla swojego sklepu. Wprowadź nazwę, hasło i adres e-mailowy
    administratora. Wprowadzone szczegółowe informacje będą wykorzystywane dla załogowania się do back-endu twojego
    sklepu.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step3.jpg" alt="">
</figure>

<h5>Instalacja została zakończona.</h5>

<p>To jest ostatni etap instalacji OpenCart. Zobaczysz dwie opcje: możesz być przekierowany na swoją witrynę OpenCart
    albo na panel administracyjny OpenCart.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step4.jpg" alt="">
</figure>

<p>Możesz skorzystać z następującej instrukcji instalacyjnej <
    <a href="/help/opencart-2-x-how-to-install-opencart-engine-and-a-template-using-fullpackage.html"
       target="_blank">OpenCart: Jak zainstalować silnik i szablon OpenCart (wykorzystując "pełny pakiet")</a>.
</p>

<p>Żeby ustawić ograniczenia dostępu, trzeba zmienić uprawnienia na 644 i 444 dla następujących plików:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>

<p class="alert alert-danger">Usuń folder "instalacja" ze swojego serwera. Nie da się wejść do sklepu, póki folder
    pozostaje na serwerze.</p>

<p>Instalacja została zakończona. Aby otworzyć stronę sklepu, wprowadź <strong>nazwę domeny</strong> w pasku adresu
    przeglądarki. Żeby uzyskać dostęp do panelu administracyjnego, wprowadź <strong>domain_name/admin</strong>.</p>

    <p class="alert alert-danger">Aby zapobiec pobieraniu oddzielnych plików szablonów z własnej witryny internetowej po przesłaniu ich na serwer, należy sprawdzić, czy bezpośrednie pobieranie plików nie jest dozwolone dla publiczności. W celu dokonania tego, należy otworzyć plik .htaccess w głównym katalogu witryny i sprawdzić, czy zawiera on następującą treść:
<code>
&lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
Order deny,allow
Deny from all
&lt;/FilesMatch&rt;
</code>
Na wypadek, jeżeli kodu nie ma, lepiej dodać go do końca pliku i zmienić nazwę pliku z ".htaccess.txt" na ".htaccess".
    </p>