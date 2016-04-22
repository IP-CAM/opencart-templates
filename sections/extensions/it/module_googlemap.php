<h3>TemplateMonster Google Map</h3>

<p>Questo modulo consente di inserire sul sito Web una mappa Google con numero illimitato di puntatori. </p>

<p>Il centro della mappa e uno dei puntatori sono definiti nelle impostazioni del negozio -
    <strong>System->Settings</strong>, nella scheda <strong>General</strong>, campo
    <strong>Geocode</strong>. Una volta cliccato su un puntatore, verrà aperta una finestra popup con la barra degli
    <strong>indirizzi</strong>.</p>

<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>Dopo aver installato il modulo, sarà possibile configurarlo nell'apposita pagina di configurazione.</p>

<h5>Impostazioni:</h5>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>il nome del modulo;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>chiave API per Google Map. È possibile trovare altri dettagli sul
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">sito
                    ufficiale</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>lo stato del modulo (abilitato/disabilitato).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>il tipo di mappa. Sono disponibili 4 opz</dd>
        </dl>
        ioni:
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>mappa stradale, selezionata per impostazione predefinita;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>mappa topografica basata su informazioni sul terreno;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>combinazione della mappa di base e della mappa satellitare;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>immagini satellitari di Google Earth;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>valori numerici. Ridimensionamento iniziale utilizzato nella visualizzazione della mapppa. Il valore 0
                corrisponde al livello minimo di ridimensionamento. Aumentando questo valore, la mappa verrà ingrandita;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>indica se il sensore per determinare la posizione dell'utente è in uso o meno.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>ampiezza della mappa. Va specificato l'unità di misura (% or px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>altezza della mappa. Va specificato l'unità di misura (% or px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>per impostare lo stile della mappa. I vari stili sono disponibili su
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank">https://snazzymaps.com/</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>per abilitare/disabilitare l'interfaccia utente come impostazione predefinita;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>per abilitare/disabilitare il ridimensionamento della mappa utilizzando la rotella del mouse;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>per abilitare/disabilitare la possibilità di spostare la mappa.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>per impostare l'immagine da usare come puntatore. Lasciando vuoto questo campo, il puntatore sarà quello
                standard;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>per impostare l'immagine da usare come puntatore al momento di fare clic;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>per impostare l'ampiezza dell'immagine del puntatore;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>per impostare l'altezza dell'immagine del puntatore.</dd>
        </dl>
    </li>
</ol>
<p>Per aggiungere un puntatore fare clic su <strong>Add New</strong>. Nel campo
    <strong>Geocode</strong> specificare le coordinate del puntatore (latitudine, longitudine - Esempio: 40.6700 ,
    -73.9400 ), quindi inserire nel campo
    <strong>Address</strong> le informazioni che appariranno dopo aver fatto clic sul marker. Le coordinate necessarie
    sono disponibili su
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">http://www.mapcoordinates.net</a>
    . Per rimuovere il puntatore, fare clic su <strong>Delete Marker</strong>.
</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>