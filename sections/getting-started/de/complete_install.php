<h3>Vollständige Installation</h3>

<p class="alert alert-info custom">Wenn Sie einiges an Zeit sparen möchten, <span class="label label-warning opener" onclick="showChat()">bestellen</span> Sie den Installationsservice für Ihr Theme in unserem Online-Chat.</p>

<p>Diese Installationsart wird benutzt, wenn Sie noch keine fertige OpenCart Website haben. Das Archiv
    'themeXXX(full).zip' enthält die Dateien der OpenCart Engine und des Themes mit Demodaten, deswegen
    müssen
    Sie die OpenCart Engine separat nicht hochladen. Die Demodaten ermöglichen es Iherer Website genauso wie
    Ihre Vorlage auf der Vorschauseite mit allen Produkten, Modulen und Einstellungen auszusehen. </p>

<!-- Creating database -->
<h4>Erstellen der Datenbank</h4>

<p>Nachdem Sie alle Dateien auf den Hosting-Server hochgeladen haben, müssen Sie eine neue Datenbank für Ihre
    OpenCart Website vorbereiten. Sie können sie mit Hilfe von dem Datenbank-Verwaltungswerkzeug im Hosting Control
    Panel (
    <i>normalerweise PhpMyAdmin</i>
    ) erstellen.
</p>

<p>Mit Hilfe von phpMyAdmin kann man die neue Datenbank in drei einfachen
    folgenden Dias an):</p>

<ol class="index-list">
    <li>Drücken Sie auf den Button Databases (Datenbank) in dem oberen Navigationsmenü, um zur Liste der Datenbanken
        zu gelangen.</li>
    <li>Geben Sie den Namen der Datenbank ins Feld "Create new database (Neue Datenbank erstellen)" ein.</li>
    <li>Drücken Sie auf den Button rechts Create (Erstellen).</li>
</ol>

<h6>Die Datenbank wird in der Liste angezeigt. Klicken Sie auf sie, um den Zugriff auf die Datenbank zu erhalten:</h6>


<div class="owl-carousel">
    <div class="item">
        <p>1. Öffnen Sie den Tab "Databases (Datenbank)", um zur Liste der Datenbanken zu gelangen.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Geben Sie den Namen der Datenbank ein.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Klicken Sie auf den Button "Erstellen".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. The newly created database appears in the list. Click the database name to get the access to the
            database.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p class="alert alert-info">Sie können auch die ausführliche Video-Anleitung
    <a href="/help/how-to-create-a-database.html" target="_blank">Wie man eine
        Datenbank erstellt</a> nutzen.
</p>

<p>Wenn Sie Schwierigkeiten beim Erstellen der Datenbank haben, nehmen Sie den Kontakt mit
    dem Hosting-Anbieter auf.</p>

<!-- Uploading files -->
<h4>Hochladen der Vorlage</h4>

<p>Um mit OpenCart arbeiten zu können, müssen Sie die Dateien auf den Hosting-Server hochladen. Dies können
    Sie mit Hilfe von dem Dateimanager oder FTP-Manager machen.</p>

<ol class="index-list">
    <li>Öffnen Sie den Ordner Ihrer Vorlage.</li>
    <li>Finden Sie den Ordner 'themeXXX' und entpacken Sie das Archiv 'themeXXX(full).zip' auf Ihrem Computer. Den
        Inhalt des Archives laden Sie auf den Server ( <a href="/help/how-upload-files-server-2.html"
                                                          target="_blank">Wie man die Dateien auf den Server
            hochlädt</a>, <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
                             target="_blank"> Wie man die Dateien mit Hilfe vom cPanel (WebHost Manager, WHM)
            hochlädt</a>) hoch.
    </li>
    <li>Legen Sie die richtigen Berechtigungen für die folgenden Ordner und Dateien der OpenCart Engine fest:
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
        <p>Die Berechtigungen müssen CHMOD 755 oder 777 abhängig von der Serverkonfiguration sein. Markieren Sie
            dafür die gewünschten Dateien und Ordner, wenn Sie mit dem Dateimanager arbeiten und finden Sie den
            Button "Berechtigungen ändern". Wenn Sie mit Linux arbeiten, brauchen Sie dann chmod -R 777
            "Ordner_name".</p>
    </li>
</ol>


<!-- OpenCart installation -->
<h4>OpenCart Installation</h4>

<p>Öffnen Sie den Browser und schreiben Sie den Pfad zum OpenCart Verzeichnis in der Adressleiste des Browsers (
    <i>zum
        Beispiel, http://your_domain_name/opencart
    </i>
    ). Der Installationsbildschirm OpenCart muss angezeigt werden:
</p>

<ol class="index-list">
    <li>Installations
        Lizenz</li>
    <li>Vorstufe</li>
    <li>Konfiguration</li>
    <li>Fertig!</li>
</ol>


<h5>
    Installations
    Lizenz
</h5>

<p>Machen Sie sich mit der OpenCart Lizent bekannt und wenn Sie ihren Bedingungen zustimmen, drücken Sie auf den
    Button <strong>Continue (Weiter)</strong>.</p>

<figure class="img-polaroid">
    <img
        src="img/opencart-engine-installation-initital.jpg" alt="">
</figure>


<h5>
    Vorstufe
</h5>

<p>Auf dieser Stufe überprüft OpenCart den Hosting-Server, ob er den OpenCart Anforderungen entspricht und die
    Berechtigungen für Dateien und Verzeichnisse richtig festgelegt wurden.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step2.jpg"
         alt="">
</figure>

<h5>
    Konfiguration
</h5>
<p>Auf dieser Stufe sollen Sie Details zur Datenbankverbindung angeben. Auf der Vorbereitungsstufe wurde die
    Datenbank MySQL erstellt und jetzt sollen Sie erhaltene/festgelegte von Ihnen Details angeben:</p>
<ul class="marked-list">
    <li>Datenbankserver;</li>
    <li>Datenbankname;</li>
    <li>Benutzername der Datenbank;</li>
    <li>Benutzerpasswort der Datenbank.</li>
</ul>

<p>Wenn Sie Schwierigkeiten mit diesen Details haben, nehmen Sie den Kontakt mit Ihrem Hosting-Anbieter auf. </p>

<p>Sie sollen auch das Administratorprofil erstellen. Geben Sie bitte den Namen, das Passwort und die E-Mail-Adresse
    an. Diese Details werden für den Zugriff auf das Control Panel
    OpenCart benutzt. </p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step3.jpg"
         alt="">
</figure>

<h5>
    Fertig!
</h5>
<p>Es ist die letzte Installationsstufe der OpenCart Engine. Es gibt zwei Optionen: Sie können entweder zur Ihren
    OpenCart Website oder zum OpenCart Control Panel gelangen.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step4.jpg"
         alt="">
</figure>

<p>Sie können auch die Anleitung zur Installation: <a
        href="/help/opencart-2-x-how-to-install-opencart-engine-and-a-template-using-fullpackage.html"
        target="_blank">OpenCart. Wie man die Engine und Vorlage OpenCart (mit Hilfe von “fullpackage”)
        installiert,</a> nutzen. </p>

<p class="alert alert-danger">Entfernen Sie den Ordner "install" vom Server. Sie können Ihren Online-Shop nicht
    öffnen, wenn dieser Ordner auf dem Server ist.</p>

<p>Legen Sie die Berechtigungen 644 oder 444 für die folgenden Dateien fest, um den Zugriff auf Dateien
    beschränken:</p>
<ul class="marked-list">
    <li>config.php;</li>
    <li>index.php;</li>
    <li>admin/config.php;</li>
    <li>admin/index.php;</li>
    <li>system/startup.php.</li>
</ul>
<p>Installation ist abgeschlossen. Um den Online-Shop zu öffnen, schreiben Sie Ihren Domainnamen <strong> in der
        Adresszeile </strong> des Browsers. Für den Zugriff zum OpenCart Control Panel schreiben Sie den
    <strong>Domain_namen/admin</strong>.
</p>

<p class="alert alert-danger">
    Um das Herunterladen der einzelnen Vorlagendateien aus Ihrer Website (nachdem sie auf dem Server installiert wurde) zu vermeiden, sollen Sie ьberprьfen, ob es der Zugriff auf das direkte Herunterladen der Dateien aus dem Server verweigert ist. Dafьr sollen Sie die Datei .htaccess im Stammordner цffnen und sich ьberzeugen, ob es den folgenden Code in ihr gibt:

<code>
&lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
Order deny,allow
Deny from all
&lt;/FilesMatch&rt;
</code>
Wenn dieser Code fehlt, fьgen Sie ihn am Ende der Datei hinzu und benennen Sie die Datei ".htaccess.txt" auf ".htaccess." um.
</p>