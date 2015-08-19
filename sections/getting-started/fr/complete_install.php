<h3>Installation Complète</h3>
<p>Ce type d'installation peut être utilisé au cas où vous ne disposez pas d'une boutique OpenCart prête à être
    utilisée. L'archive 'themeXXX(full).zip' contient les fichiers de l'engine OpenCart et les fichiers du thème y
    compris un exemple de données, pour que vous n'ayez pas à installer l'engine OpenCart séparément. Les données
    d'exemple du template feront que votre site apparaîtra comme notre template de démo avec toutes les exemples de
    produits, de modules et la configuration du site.</p>
<!-- Creating database -->

<h4>Création d'une base de données</h4>

<p>Une fois que tous les fichiers sont téléchargés vers le serveur, vous avez besoin de préparer une base de données
    nouvellement créée pour votre site OpenCart. Vous pouvez créer une base de données à l'aide de l'outil de
    gestion de bases de données du panneau de contrôle de votre hébergeur (
    <i>habituellement PhpMyAdmin</i>
    ).
</p>

<p>Vous pouvez créer une nouvelle base de données dans phpMyAdmin en suivant 3 étapes simples énumérées ci-dessous
    (voir ci-dessous):</p>

<ol class="index-list">
    <li>Pour accéder à la liste des bases de données, cliquez sur le bouton Databases du menu de navigation du
        haut.</li>

    <li>Entrez un nouveau nom de base de données dans le champ "Create new database".</li>

    <li>Sur le côté droit, cliquez sur le bouton Create.</li>
</ol>
<p>Vous devriez voir une base de données nouvellement créée dans la liste. Pour accéder à la base de données,
    cliquez sur son nom:</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Ouvrez l'onglet "Databases", pour accéder à la liste des bases de données.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Entrez le nom de base de données.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Cliquez "Create".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. La base de données nouvellement créée apparaît dans la liste. Cliquez sur le nom de base de
            données pour accéder à la base de données.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">N'hésitez pas à consulter le guide vidéo détaillé
    <a href="/help/how-to-create-a-database.html" target="_blank">Comment créer une base de données</a>
</p>

<p> Si vous avez des problèmes lors de la création de la base de données, veuillez
    contacter votre hébergeur pour demander de l'assistance supplémentaire.</p>

<!-- Uploading files -->

<h4>Mise en ligne du template</h4>

<p class="">Pour commencer à travailler avec OpenCart, vous devez uploader les fichiers sur votre serveur. Vous
    pouvez le faire via votre panneau de contrôle de l'hébergeur ou en utilisant n'importe quelle application de
    Gestion de FTP.</p>

<ol class="index-list">
    <li>Ouvrez le dossier du template.</li>

    <li>Allez dans le dossier 'themeXXX' et décompressez l'archive 'themeXXX(full).zip' sur votre ordinateur.
        Uploadez le contenu de l'archive sur votre serveur (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Comment uploader des fichiers vers un
            server</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">
            Comment uploader des fichiers vers un server en utilisant cPanel (WebHost manager, WHM)</a>
        ).
    </li>
    <li> Mettez les bonnes permissions sur vos dossiers et fichiers d'OpenCart:
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
        <p>Les permissions doivent être réglées avec le CHMOD à 755 ou 777 selon la configuration du serveur. Pour
            le faire, sélectionnez tous vos fichiers et dossiers et trouvez le bouton "Change Permissions" si vous
            utilisez le Gestionnaire de Fichiers. Si vous travaillez avec Linux - utilisez la commande chmod -R 777
            "folder_name".</p>
    </li>
</ol>
<!-- OpenCart installation -->

<h4>Installation d'OpenCart</h4>

<p>Ouvrez un navigateur et entrez le chemin vers votre répertoire OpenCart dans la barre d'adresse (
    <i>par exemple http://your_domain_name/OpenCart</i>
    ). Vous devriez voir la page d'installation d'OpenCart:
</p>

<ol class="index-list">
    <li>de l'installation Licence</li>
    <li>Étape préliminaire</li>
    <li>Configuration</li>
    <li>Prêt!</li>
</ol>

<h5>
    de l'installation Licence
</h5>


<p>Vérifiez un accord de licence d'OpenCart et cliquez sur le bouton
    <strong>Continue</strong> si vous acceptez ses termes.</p>

<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-initital.jpg" alt="">
</figure>


<h5>
    Étape préliminaire
</h5>


<p>Lors de la deuxième étape OpenCart vérifie si vos paramètres d'hébergement correspondent à ceux requis et si les
    permissions des fichiers et des dossiers sont correctes.</p>

<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step2.jpg" alt="">
</figure>


<h5>
    Configuration
</h5>


<p>A l'étape de configuration vous devez saisir les détails de votre base de données. La base de données MySQL a été
    créée lors de l'étape de préparation, maintenant vous devez saisir les détails que vous avez utilisés:</p>

<ul class="marked-list">
    <li>serveur de base de données;</li>

    <li>nom de la base de données;</li>

    <li>nom de l'utilisateur de la base de données;</li>

    <li>mot de passe.</li>
</ul>

<p>S'il y a des questions avec les détails de base de données, veuillez contacter votre hébergeur.</p>

<p>Vous devez créer un compte d'administrateur pour votre boutique. Entrez le nom, le mot de passe et l'adresse
    électronique de l'administrateur. Les détails entrés seront utilisés pour accéder au panneau d'administration
    d'OpenCart.</p>

<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step3.jpg" alt="">
</figure>


<h5>
    Prêt!
</h5>


<p>Voici la dernière étape de l'installation d'OpenCart. Vous verrez 2 options: vous pouvez être redirigé vers votre
    site OpenCart ou vers votre panneau d'administration d'OpenCart.</p>

<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step4.jpg" alt="">
</figure>

<p>Vous pouvez utiliser les instructions d'installation suivantes:
    <a href="/help/OpenCart-2-x-how-to-install-OpenCart-engine-and-a-template-using-fullpackage.html" target="_blank">OpenCart.
        Comment installer l'engine d'OpenCart et un template (en utilisant un “fullpackage”)</a>
</p>

<p class="alert alert-danger"> Supprimez le dossier "install" de votre serveur. Vous ne pourrez pas accéder à la
    boutique jusqu'à ce que le dossier demeure sur le serveur.</p>

<p>Pour définir des restrictions d'accès, changez les permissions en 644 et 444 pour les fichiers suivants:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>
<p>L'installation est terminée. Pour ouvrir la page de la boutique, entrez
    <strong>le nom de domaine</strong> dans la barre d'adresse de votre navigateur. Pour accéder au panneau
    d'administration d'OpenCart, entrez
    <strong>nom_de_domaine/admin</strong>.</p>