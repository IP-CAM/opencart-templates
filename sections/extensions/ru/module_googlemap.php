<h3>TemplateMonster Google Map</h3>

<p>Данный модуль позволяет добавлять Google карту с неограниченным количеством маркеров на Ваш сайт. </p>

<p>Центр карты и один из маркеров определяются настройками магазина - <strong>Система ->
        Настройки
        (System ->
        Settings)</strong>, во вкладке <strong>Общие (General)</strong>, поле
    <strong>Геокод (Geocode)</strong>. При нажатии на маркер, появляется окно с адресом указанным в той же вкладке в
    поле
    <strong>Адрес (Address)</strong>.</p>

<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>После установки модуля Вы можете настроить его на странице настроек модуля.</p>

<h5>Настройки:</h5>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>название модуля;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>API ключ для Google Map. Подробная информация доступна на
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">
                    официальном сайте</a>
                ;
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>статус модуля (включен/отключен);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>тип карты. Доступны 4 значения:</dd>
        </dl>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>дорожная карта, используемая по умолчанию;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>топографическая карта, основанная на информации о ландшафте;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>комбинация обычной карты и снимков со спутника;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>снимки Google Планета Земля, сделанные со спутника;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>численное значение. Начальное масштабирование, используемое при отображении карты. Значение 0
                соответствует наименьшему уровню масштабирования. При увеличении этого значения увеличивается
                масштабирование карты;
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>указывает, используется или нет в приложении датчик определения местоположения пользователя.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>ширина карты. Необходимо указать единицы измерения (% или px);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>высота карты. Необходимо указать единицы измерения (% или px);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>задает стиль карты. Разнообразные стили доступны на
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank"> https://snazzymaps.com/</a>
                ;
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>включает/отключает пользовательский интерфейс по умолчанию;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>включает/отключает изменение расширения карты с помощью колеса мыши;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>включает/отключает возможность перемещения карты;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>устанавливает изображение маркера. Если оставить поле пустым, будет отображен стандартный маркер;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>устанавливает изображение маркера при нажатии;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>устанавливает ширину изображения маркера;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>устанавливает высоту изображения маркера.</dd>
        </dl>
    </li>
</ol>
<p>Для добавления маркера нажмите <strong>Add New</strong>. В поле
    <strong>Geocode</strong> укажите координаты маркера (широта, долгота - Пример:40.6700, -73.9400) и в поле
    <strong>Address</strong> укажите информацию, которая будет отображена при клике на маркер. Координаты необходимого
    места можно найти на
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">
        http://www.mapcoordinates.net
    </a>
    . Для удаления маркера, соответственно, нажмите <strong>Delete Marker</strong> над необходимым маркером.
</p>

<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>