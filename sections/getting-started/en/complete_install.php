<h3>Complete installation</h3>

<div class="zemez-chat-wrap">
	<p class="alert alert-info">If you don't want to spend your time installing the template, don't hesitate to <span class="label label-warning opener" onclick="showChat()">order</span> installation service using our live-chat.</p>
</div>

<p align="justify">This kind of installation can be used in case, you do not have a ready to use OpenCart store. The
    '<strong>themeXXX(full).zip</strong>' archive contains OpenCart <strong>engine files</strong> and <strong>theme files</strong> including<strong> sample data</strong>,
    so you do not need to install an OpenCart engine separately. Template sample data will make your site
    look just like our demo template including all the sample products, modules and site configuration.</p>

<!-- Creating database -->
<h4>Creating a database</h4>

<p align="justify">Once  the files are uploaded to the server, you need to prepare an empty database for you OpenCart
    website. It should be created with the help of the database management tool in your hosting cPanel (<i>PhpMyAdmin</i>
    typically).
</p>

<p> Follow a few simple of instructions to create a new database in phpMyAdmin (check the slides below):</p>

<ol class="index-list">
<li>In order to get to the database list, click Databases button in the top navigation menu.</li>

    <li>Enter a new database name in the "<strong>Create new database</strong>" field.</li>

    <li>On the right side click the<strong> Create</strong> button.</li>
</ol>

<h6>You should see the newly created database in the list. In order to get the access to the database, click its
    name:</h6>


<div class="owl-carousel">
    <div class="item">
        <p>1. Open the "Databases" tab, in order to get to the list of databases.</p>
        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Enter a database name.</p>
        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Click "Create".</p>
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


<p class="alert alert-info">Feel free to check the detailed video guide
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>
    .
</p>

<p>In case of any issues, please contact your hosting provider for further support.</p>

<!-- Uploading files -->
<h4>Uploading the template</h4>

<p align="justify">In order to start working with OpenCart, you need to upload the files to your server. You can do it via
    your hosting cPanel or using an alternative FTP client.</p>

<ol class="index-list">
<li>Open the template folder.</li>

    <li>
      <div align="justify">Go to the 'themeXXX' folder and unzip the 'themeXXX(full).zip' archive to your computer. Upload the content
        of the archive to your server (
        <a href="/help/how-upload-files-server-2.html" target="_blank">How to upload files to server</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> How
            to upload files to server using cPanel (WebHost manager, WHM)</a>
        ).
      </div>
    </li>
    <li>Set the correct permissions to your OpenCart folders and files:
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
        <p align="justify">The permissions should be set to <strong>CHMOD 755</strong> or <strong>777</strong> depending on the server configuration. In order to do
            so, select all your files and folders and find the buttons "Change Permissions" if you are working in
            File Manager. If you are working with Linux — use command chmod -R 777 "folder_name".</p>
    </li>
</ol>

<!-- OpenCart installation -->
<h4>OpenCart Installation</h4>

<p align="justify">Open any browser and enter the OpenCart directory path in the browser address bar (<strong>for example http://your_domain_name/opencart</strong>
    ). You will see the OpenCart installation page:
</p>

<ol class="index-list">
<li>Installation license;</li>
    <li>Preliminary stage; </li>
    <li>Configuration;</li>
    <li>Ready!</li>
</ol>

<h5>Installation license</h5>

<p align="justify">Check an OpenCart license agreement and click the
    <strong>Continue</strong>
    button if you agree.
</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-initital.jpg" alt="">
</figure>

<h5>Preliminary stage </h5>

<p align="justify">At the second step OpenCart is going to check if your hosting settings match the required ones and if the
    files
    and folders permissions are correct.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step2.jpg" alt="">
</figure>

<h5>Configuration</h5>

<p align="justify">At the Configuration step you need to input your database details. The MySQL database was created on the
    preparation step, now you need to enter the details you have used:</p>

<ul class="marked-list">
<li>database server;</li>

    <li>database name;</li>

    <li>database username;</li>

    <li>password.</li>
</ul>

<p>If there are any issues with the database details, contact your hosting provider.</p>

<p align="justify">You need to create the administrator user for your store. Enter the name, password and administrators
    e-mail
    address. The details you enter will be used to log into your store backend.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step3.jpg" alt="">
</figure>

<h5>Ready!</h5>

<p align="justify">This is the last OpenCart installation step. You will see 2 options: you can be redirected to your
    OpenCart
    website or to the OpenCart admin panel.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step4.jpg" alt="">
</figure>

<p>You can use the following installation instructions:
    <a href="/help/opencart-2-x-how-to-install-opencart-engine-and-a-template-using-fullpackage.html"
       target="_blank">OpenCart. How to install OpenCart engine and template (using “fullpackage”)</a>.
</p>

<p>In order to set access restrictions, change the permissions to 644 and 444 for the following files:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>

<p class="alert alert-danger">Remove the "install" folder from your server. You will not be able to enter the
    store
    until the folder remains on the server.</p>

<p align="justify">The installation is complete. In order to open the store page, enter
    <strong>domain name</strong> in the browser address bar. In order to access OpenCart admin panel, enter
    <strong>domain_name/admin</strong>.</p>

    <p align="justify" class="alert alert-danger">In order to prevent separate template files from being downloaded from your website after uploading it to server, you should check whether direct files download is forbidden for public. In order to do this, you should open .htaccess file in the site root directory and check if it includes the following content:

<code>
&lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
Order deny, allow
Deny from all
&lt;/FilesMatch&rt;
</code>
In case this code is not there, you'd better add it to the end of the file and rename ".htaccess.txt" file to ".htaccess."</p>