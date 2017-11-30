<h3>Instalación Completa</h3>

<p class="alert alert-info custom">Si no quieres pasar el tiempo instalando la plantilla, no dudes en <span class="label label-warning opener" onclick="showChat()">solicitar</span> el servicio de instalación utilizando nuestro chat en vivo.</p>

<p>Este tipo de instalación puede ser utilizado en caso de que usted no tiene una tienda de OpenCart lista para su uso.
    El archivo 'themeXXX(full).zip' contiene el motor de OpenCart y los archivos de temas que incluyen datos de la
    muestra, por lo que no tiene que instalar el motor de OpenCart por separado. Los datos de muestra de la plantilla
    harán que su página web aparecerá igual como nuestra demo de plantilla con todos los tipos de productos, módulos y
    configuración del sitio.</p>
<!-- Creating database -->

<h4>Creación de una base de datos</h4>

<p>Cuando haya terminado de subir los archivos al servidor de hosting, usted puede crear una nueva base de datos para su
    sitio web de OpenCart. Puede crear la base de datos utilizando la herramienta de gestión de base de datos desde el
    panel de control del hosting (
    <i>normalmente PhpMyAdmin</i>
    ).
</p>

<p>Con la herramienta phpMyAdmin usted será capaz de crear una nueva base de datos en 3 sencillos pasos (vea las
    siguientes diapositivas):</p>

<ol class="index-list">
    <li>Para acceder a la lista de bases de datos, haga clic en el botón Databases en el menú de navegación
        superior.</li>

    <li>Introduzca el nombre de la base de datos en el campo "Create new database".</li>

    <li>Haga clic en el botón Create que se encuentra a la derecha.</li>
</ol>

<h6>Ahora ya puede ver la base de datos en la lista de base de datos. Para acceder a la base de datos haga clic en su
    nombre:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Abra la pestaña "Databases", para acceder a la lista de bases de datos.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Introduzca el nombre de la base de datos.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Haga clic en "Create".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. La base de la base de datos recién creada aparecerá en la lista. Haga clic en el nombre de base de datos
            para acceder a la base de datos.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p class="alert alert-info">No dude en consultar la guía detallada de vídeo
    <a href="/help/how-to-create-a-database.html" target="_blank">Como crear una base de datos</a>
    .
</p>
<p> Si tiene preguntas, póngase en contacto con su proveedor de alojamiento web de apoyo
    adicional.</p>

<!-- Uploading files -->

<h4>Actualización de la plantilla</h4>

<p class="">Para empezar a trabajar con OpenCart, debe subir los archivos a su servidor. Usted puede hacer esto a través
    de su panel de control del alojamiento web o el uso de cualquier aplicación de gestión de FTP.</p>

<ol class="index-list">
    <li>Abra la carpeta de la plantilla.</li>

    <li>Vaya a la carpeta 'themeXXX' y descomprima el archivo 'themeXXX.zip (full)' a su ordenador. Suba el contenido
        del archivo en el servidor (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Cómo subir archivos a un servidor</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> Cómo
            subir los archivos a un servidor utilizando cPanel (WebHost manager, WHM)</a>
        ).
    </li>
    <li>Establezca los permisos correctos en las carpetas y archivos de OpenCart:
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
        <p>Los permisos deben establecerse con el CHMOD 755 ó 777 dependiendo de la configuración del servidor. Para
            ello, seleccione todos los archivos y carpetas y encuentre el botón "Change Permissions" si está usando el
            Administrador de Archivos. Si usted trabaja con Linux - utilize el comando chmod -R 777 "folder_name".</p>
    </li>
</ol>

<!-- OpenCart installation -->

<h4>Instalación de OpenCart</h4>

<p>Abra un navegador y escriba la ruta del directorio de OpenCart en la barra de direcciones (
    <i>por ejemplo http://your_domain_name/OpenCart</i>
    ). Debería ver la página inicial de instalación de OpenCart:
</p>

<ol class="index-list">
    <li>Instalación Licencia</li>
    <li> Pre-Instalación</li>
    <li>Configuración</li>
    <li>¡Listo!</li>
</ol>


<h5>
    Instalación Licencia
</h5>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-initital.jpg" alt="">
</figure>

<p>Compruebe el acuerdo de licencia de OpenCart y haga clic en el botón
    <strong>Continue</strong> si usted acepta sus términos.</p>


<h5>
    Pre-Instalación
</h5>

<p>En el segundo paso OpenCart está comprobando si la configuración de hosting coincide con las requeridas, y si los
    permisos de archivos y carpetas son correctos.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step2.jpg" alt="">
</figure>

<h5>
   Configuración
</h5>


<p>En el paso de configuración debe introducir los datos de su base de datos. La base de datos MySQL se ha creado en el
    paso de preparación, ahora tiene que introducir los detalles que ha utilizado:</p>

<ul class="marked-list">
    <li>servidor de base de datos;</li>

    <li>nombre de base de datos;</li>

    <li>nombre del usuario de la base de datos;</li>

    <li>contraseña.</li>
</ul>

<p>Si hay problemas con los datos de base de datos, por favor póngase en contacto con su hosting proveedor.</p>

<p>Usted debe crear una cuenta de administrador para su tienda. Introduzca el nombre, contraseña y dirección del correo
    electrónico del administrador. Los datos introducidos se utilizarán para acceder al panel de administración de
    OpenCart.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step3.jpg" alt="">
</figure>

<h5>
    ¡Listo!
</h5>


<p>Este es el último paso de la instalación de OpenCart. Verá 2 opciones: puede ser redirigido a su sitio Opencart o a
    su panel de administración de OpenCart.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step4.jpg" alt="">
</figure>

<p>Puede utilizar las siguientes instrucciones de instalación:
    <a href="/help/OpenCart-2-x-how-to-install-OpenCart-engine-and-a-template-using-fullpackage.html" target="_blank">OpenCart.
        Cómo instalar el motor OpenCart y una plantilla (usando "fullpackage")</a>
    .
</p>
<p class="alert alert-danger"> Elimine la carpeta "install" en su servidor. No se podrá acceder a la tienda hasta que el
    archivo permanezca en el servidor.</p>

<p>Para establecer restricciones de acceso, cambie los permisos a 644 y 444 para los siguientes archivos:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>
<p>La instalación está terminada. Para abrir la página de la tienda, introduzca
    <strong>nombre del dominio</strong> en la barra de direcciones de su navegador. Para acceder a panel de
    administración de OpenCart, introduzca
    <strong>nombre_del_dominio/admin</strong>.</p>


    <p class="alert alert-danger">Con el fin de evitar que los archivos separados de la plantilla al ser descargados desde su sitio web después de subirlo al servidor, usted debe comprobar si los archivos de descarga están prohibido al público. Con el fin de hacer esto, debe abrir el archivo .htaccess en el directorio raíz del sitio y comprobar si incluye el siguiente contenido:
    <code>
&lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
Order deny,allow
Deny from all
&lt;/FilesMatch&rt;
</code>
        En caso de que el código no está allí, es mejor que lo agrega al final del archivo y cambie el nombre del archivo ".htaccess.txt" por ".htaccess". 

    </p>