<h3>TM Google Map</h3>

<p>Esse módulo permite incluir um mapa do Google com um número ilimitado de marcadores no seu site. </p>

<p>O centro do mapa e seus marcadores são definidos nas configurações da loja -
    <strong>System->Settings</strong>, na aba <strong>General</strong>, no campo
    <strong>Geocode</strong>. Ao clicar em um marcador, você verá uma janela popup com uma barra de
    <strong>Endereço</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>Ao instalar o módulo, você pode alterar suas configurações na página de configurações do módulo.</p>

<h5>Configurações:</h5>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>o nome do módulo;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>chave da API do Google Map. Há mais detalhes no
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">site
                    oficial</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>situação do módulo (ativado/desativado);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>tipo de mapa. Você tem 4 op</dd>
        </dl>
        ções:
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>mapa de ruas, o padrão;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>mapa topográfico baseado em informações do terreno;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>combinação do mapa básico com imagens de satélite;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>imagens de satélite do Google Earth;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>valor numérico. Este é o valor inicial de zoom do mapa. 0 é o menor número possível, o zoom aumenta
                conforme o número;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>indica se o sensor que determina a localização do usuário será usado ou não.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>largura do mapa. Você deve especificar a unidade de medida(% ou px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>altura do mapa. Você deve especificar a unidade de medida(% ou px);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>muda o estilo do mapa. Uma variedade pode ser encontrada em
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank">https://snazzymaps.com/</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>ativa/desativa a interface de usuário por padrão;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>ativa/desativa zoom no mapa usando a roda do mouse;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>ativa/desativa a opção de mover o mapa;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>define a imagem do marcador. Se deixado vazio, usa-se o marcador padrão;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>define a imagem do marcado ao clicar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>define a largura da imagem do marcador;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>define a altura da imagem do marcador.</dd>
        </dl>
    </li>
</ol>
<p>Para incuir um marcador, clique em <strong>Add New</strong>. No campo
    <strong>Geocode</strong> especifique as coordenadas (latitude, longitude - Exemplo: 40.6700 , -73.9400 ) e no campo
    <strong>Address</strong> coloque a informação que você deseja mostrar ao clicar no marcador. Coordenadas podem ser
    encontradas em
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">http://www.mapcoordinates.net</a>
    . Para apagar um marcador, clique em <strong>Delete Marker</strong>.
</p>

<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>