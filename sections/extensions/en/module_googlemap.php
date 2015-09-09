<h3>TM Google Map</h3>

<p>This module allows you to add a Google map with an unlimited number of markers to your website. </p>

<p>The center of the map and one of the markers are defined in store settings -
    <strong>System->Settings</strong>, in the <strong>General</strong> tab,
    <strong>Geocode</strong> field. Once you click on a marker, you will see the pop up window with the
    <strong>Address</strong> bar. </p>

<figure class="img-polaroid">
    <img src="img/tm-googlemap-view.jpg" alt=""/>
</figure>

<p>When the module is installed, you can configure it on the module configuration page.</p>

<h5>Settings:</h5>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Module Name</dt>
            <dd>the name of the module;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Google Map API key</dt>
            <dd>API key for Google Map. You can find more details at the
                <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">official
                    website</a>
                ;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Status</dt>
            <dd>module status (enabled/disabled);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Type</dt>
            <dd>map type. There are 4 options available:</dd>
        </dl>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Roadmap</dt>
                    <dd>road map, the one used by default;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Terrain (Landscape)</dt>
                    <dd>topographical map based on terrain information;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Hybrid</dt>
                    <dd>a combination of a basic map and satellite images;</dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Satellite</dt>
                    <dd>Google Earth images taken by satellite;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map Zoom</dt>
            <dd>numerical value. Initial scaling used when displaying a map. A value of 0 corresponds to the lowest
                level of scaling. When increasing this value, map zooms in;
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Sensor</dt>
            <dd>indicates whether sensor that determines users location is used or not.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Width</dt>
            <dd>the width of the map. You should specify unit of measurement (% or px);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Height</dt>
            <dd>the height of the map. You should specify unit of measurement (% or px);</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Map Styles</dt>
            <dd>sets the style of the map. The variety of styles is available at
                <a href='https://snazzymaps.com/' rel="nofollow" target="_blank">https://snazzymaps.com/</a>
                ;
            </dd>
        </dl>


    </li>
    <li>
        <dl class="inline-term">
            <dt>Disable UI</dt>
            <dd>enables/disables user interface by default;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Scrollwheel</dt>
            <dd>enables/disables map scaling with the help of mouse wheel;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Draggable</dt>
            <dd>enables/disables the option to move the map;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image</dt>
            <dd>sets marker image. If you leave the field empty, it will apply default marker;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Active Marker Image</dt>
            <dd>sets marker image when clicking;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Width</dt>
            <dd>sets marker image width;</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Marker Image Height</dt>
            <dd>sets marker image height.</dd>
        </dl>
    </li>
</ol>
<p>In order to add a marker, click <strong>Add New</strong>. In the
    <strong>Geocode</strong> field specify marker coordinates (latitude, longitude - Example: 40.6700 , -73.9400 ) and
    in the
    <strong>Address</strong> field enter the information that will show up when clicking the marker. Required
    coordinates can be found at
    <a href='http://www.mapcoordinates.net' rel="nofollow" target="_blank">http://www.mapcoordinates.net</a>
    . In order to remove the marker, click <strong>Delete Marker</strong>.
</p>
<figure class="img-polaroid">
    <img src="img/tm-googlemap-edit_1.jpg" alt=""/>
</figure>