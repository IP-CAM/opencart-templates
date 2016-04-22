<h3>TemplateMonster Google Map</h3>

<p>Bu modül sayesinde websitenizde, Google haritası üzerinden istediğiniz kadar yer imi işaretleyebilirsiniz . </p>


<p>Haritanın ortasında ve
    <strong>System->Settings</strong> bölümündeki mağaza ayarları kısmında belirtilen yer imlerinde,
    <strong>General</strong> sekmesinde, <strong>Geocode</strong> alanında yer alır. Bir yer imine tıkladığınızda,
    <strong>Address</strong> çubuğunda bir açılır pencere görürsünüz.</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>Modül kurulduktan sonra, tüm düzenlemeleri modül ayar sayfasından yapabilirsiniz. </p>


<h5>Ayarlar:</h5>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>modülün ismi;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>Google Map için gereken uygulama anahtarı. Detaylı bilgiyi
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">resmi
                    website</a>
                den alabilirsiniz;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>modülün durumu (aktif/pasif);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>harita türü. 4 seçenek bulunmakt</dd>
        </dl>
        adır:
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>yol haritası, hali hazırda kullanılan;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>arazi bilgisini içeren topoğrafik harita;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>temel haritayla uydu görsellerinin karışımı;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>uydudan alınan Google Earth görselleri;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>sayısal değer. Harita ilk gösterildiğinde uygulanacak olan başlangıç ölçüsü. 0 en düşük değerdir, bu
                değer yükseltildikçe harita yakınlaşarak büyür;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>kullanıcıların konumlarını algılayan sensör kullanılsın mı kullanılmasın mı.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>haritanın genişliği. Ölçünün birimini yazmalısınız (% veya px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>haritanın uzunluğu. Ölçünün birimini yazmalısınız (% veya px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>haritanın stili. Stil çeşitlerini
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank">https://snazzymaps.com/</a>
                adresinden görüntüleyebilirsiniz;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>kullanıcı arayüzünü aç/kapat;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>fare hareketiyle haritayı genişletmeyi aç/kapat;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>haritayı hareket ettirmeyi aç/kapat;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>im görseli ata. Bu alanı boş bırakırsanız, var olan yer imi kullanılır;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>tıklarken kullanılacak olan yer imi görseli;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>yer imi görselinin genişliği;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>yer imi görselinin uzunluğu.</dd>
        </dl>
    </li>
</ol>
<p>Yer imi eklemek için <strong>Add New</strong> (Yeni Ekle) ye basın. Karşınıza çıkan
    <strong>Geocode</strong> alanına imin kordinatlarını yazın (enlem, boylam - Örn: 40.6700 , -73.9400 ) ve
    <strong>Address</strong> alanına ime tıklanınca gösterilecek olan bilgiyi yazın. Gerekli kordinatlar
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">http://www.mapcoordinates.net</a>
    adresinden bulunabilir. Yer imini kaldırmak için <strong>Delete Marker</strong> (İmi Sil) e tıklayın.
</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>