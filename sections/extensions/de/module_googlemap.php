<h3>TM Google Map</h3>

<p>Das jeweilige Modul ermöglicht es eine Google Karte mit einer unbegrenzten Anzahl von Markern zur Ihren Website hinzuzufügen. </p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>Sowohl das Kartenzentrum als auch ein von den Markern werden über Einstellungen des Online-Shops -
    <strong>System -> Einstellungen (System -> Settings)</strong>, im Tab
    <strong>Allgemeines (General)</strong>, im Feld
    <strong>Geocode (Geocode)</strong> festgelegt. Beim Drücken auf den Marker, wird das Fenster mit der Adresse, die in
    demselben Tab im Feld
    <strong>Adresse (Address) festgelegt wurde,</strong> angezeigt.</p>

<p>Nachdem Sie das Modul installiert haben, können Sie es auf der Konfigurationsseite einstellen.</p>

<h5>Einstellungen:</h5>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>der Modulname;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>API-Schlüssel für Google Map. Die ausführliche Informatio n ist
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">auf
                    der offiziellen Website verfügbar</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>der Modulstatus (aktviert/deaktiviert);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>Kartentyp. Es sind 4 Werte verfügbar:</dd>
        </dl>

        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>die Straßenkarte, die standardmäßig benutzt wird ;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>topografischen Karte basierend auf Geländeinformationen;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>eine Kombination aus normalen Karten und Satellitenbildern;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>Google Earth Bilder, die über den Satellit aufgenommen wurden;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>Zahlenwert. Anfangsskalierung, die bei der Anzeige der Karte benutzt wird. Der Wert 0 entspricht dem
                niedrigsten Zoomniveau. Wenn Sie diesen Wert erhöhen, wird die Skalierung der Karte auch erhöht;
            </dd>
        </dl>

    </li>

    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>zeigt, ob es in der Anwendung der Sensor benutzt wird, der den Standort des Benutzers definiert.</dd>
        </dl>

    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>die Kartenbreite. Sie müssen Maßeinheiten (% oder px) angeben;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>die Kartenhöhe. Sie müssen Maßeinheiten (% oder px) angeben;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>legt den Kartenstil fest. Verschiedene Stile sindunter
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank">https://snazzymaps.com/</a>
                verfügbar;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>aktiviert/deaktiviert die Benutzerschnittstelle standardmäßig;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>aktiviert/deaktiviert die Änderungen von Kartenerweiterungen mit dem Mausrad;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>aktiviert/deaktiviert die Möglichkeit der Kartenverschiebung;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>legt das Marker-Bild fest. Wenn Sie das Feld leer lassen, wird dann ein Standardmarker angezeigt;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>legt das Markerbild beim Drücken fest;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>legt die Breite des Markerbildes fest;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>legt die Höhe des Markerbildes fest.</dd>
        </dl>
    </li>
</ol>
<p>Um den Marker hinzuzufügen, drücken Sie auf den Button <strong>Add New</strong>. Im Feld
    <strong>Geocode</strong> geben Sie die Markerkoordinaten (Breite, Länge - Beispiel:40.6700, -73.9400) und im Feld
    <strong>Address</strong> die Information, die beim Klicken auf den Marker angezeigt wird, an. Die Koordinaten eines
    gewünschten Standortes können Sie unter
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">http://www.mapcoordinates.net</a>
    finden. Um den Marker zu entfernen, drücken Sie auf den entsprechenden Button
    <strong>Delete Marker</strong> über den gewünschten Marker.
</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>