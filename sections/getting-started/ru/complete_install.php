<h3>Полная установка</h3>

<p>Данный тип установки используется, если у вас нет готового сайта OpenCart. Архив
    'themeXXX(full).zip' включает файлы движка OpenCart и темы с демо-данными,
    поэтому вам не нужно отдельно загружать движок OpenCart. Демо-данные позволят
    Вашему сайту выглядеть так же, как и шаблон на странице предпросмотра, со всеми
    образцами товаров, модулей и настройками сайта. </p>

<!-- Creating database -->
<h4>Создание базы данных</h4>

<p>Когда все файлы будут загружены на хостинг сервер, необходимо подготовить новую
    базу данных для веб-сайта OpenCart. Ее можно создать через инструмент управления
    базами данных в контрольной панели хостинга (
    <i>обычно PhpMyAdmin</i>
    ).
</p>

<p>При помощи phpMyAdmin можно создать новую базу данных за 3 простых шага: (см.
    следующие слайды):</p>
<ol class="index-list">
    <li>Щелкните кнопку Databases (базы данных) в верхнем меню навигации, чтобы
        перейти в список баз данных.
    </li>
    <li>Введите название базы данных в поле "Create new database (Создать новую базу
        данных)".
    </li>
    <li>Нажмите справа на кнопку Create (Создать).</li>
</ol>

<h6>База данных появилась в списке. Кликните по ее названию, чтобы получить доступ к
    ней:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Откройте вкладку "Databases (Базы данных)", чтобы перейти к
            списку баз данных.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Введите название базы данных.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p> 3. Щелкните кнопку "Создать".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. База данных появилась в списке. Кликните по названию, чтобы
            получить доступ к базе данных.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p class="alert alert-info">Вы также можете воспользоваться детальной видео инструкцией
    <a href="/help/ru/how-to-create-a-database.html" target="_blank">
        Как создать базу данных
    </a> .
</p>

<p>В случае возникновения сложностей при создании базы данных, необходимо обратиться к
    хостинг провайдеру за поддержкой.</p>

<!-- Uploading files -->
<h4>Загрузка шаблона</h4>

<p class="">Для начала работы с OpenCart, требуется загрузить файлы на хостинг
    сервер. Это можно сделать при помощи файлового менеджера хостинга или
    альтернативного FTP менеджера.</p>
<ol class="index-list">
    <li>Откройте папку шаблона.</li>
    <li>Перейдите в папку 'themeXXX' и распакуйте архив 'themeXXX(full).zip' на Ваш
        компьютер. Содержимое архива загрузите на сервер (
        <a href="/help/ru/how-upload-files-server-2.html" target="_blank">Как
            загрузить файлы на сервер
        </a>
        ,
        <a href="/help/ru/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> Как
            загрузить файлы с помощью cPanel (WebHost менеджер,
            WHM)
        </a>
        ).
    </li>
    <li>Задайте правильные разрешения на следующие папки и файлы движка OpenCart:
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
        <p>Разрешения должны быть CHMOD 755 или 777 в зависимости от конфигурации
            сервера. Для этого выделите нужные файлы и папки и если Вы работаете в
            файловом менеджере - найдите кнопку "изменить права". Если Вы работаете
            под Linux - вам поможет команда chmod -R 777 "имя_папки".</p>
    </li>
</ol>

<!-- OpenCart installation -->
<h4>Установка OpenCart</h4>

<p>Откройте браузер и пропишите путь к директории OpenCart в адресной строке
    браузера (
    <i>например, http://your_domain_name/opencart</i>
    ). Должен появиться
    экран установки OpenCart:
</p>

<ol class="index-list">
    <li>Установка лицензии</li>
    <li>Предварительный</li>
    <li>Конфигурация</li>
    <li>Готово!</li>
</ol>


<h5>Установка лицензии</h5>

<p>Ознакомьтесь с лицензией OpenCart и, если Вы согласны с ее условиями, нажмите
    кнопку <strong>Continue (Продолжить)</strong>.</p>

<figure class="img-polaroid">
    <img
        src="img/opencart-engine-installation-initital.jpg"
        alt="">
</figure>


<h5>Предварительный</h5>

<p>На данном этапе, OpenCart проверит хостинг сервер: соответствуют ли настройки
    требованиям OpenCart и правильно ли заданы разрешения файлов и директорий.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step2.jpg"
         alt="">
</figure>

<h5>Конфигурация</h5>

<p>На данном этапе нужно указать детали подключения к базе данных. Насколько Вы
    помните, на этапе подготовки была создана база данных MySQL, сейчас нужно указать
    полученные/заданные вами детали:</p>
<ul class="marked-list">
    <li>сервер базы данных;</li>
    <li>название базы данных;</li>
    <li>имя пользователя базы данных;</li>
    <li>пароль пользователя базы данных.</li>
</ul>

<p>При возникновении сложностей с этими деталями, обратитесь к хостинг
    провайдеру. </p>

<p>Также нужно создать профиль администратора магазина. Введите имя, пароль и e-mail
    администратора. Эти детали будут использоваться для доступа в панель управления
    OpenCart. </p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step3.jpg" alt="">
</figure>

<h5>Готово!</h5>

<p>Это заключительный этап установки движка OpenCart. Предлагаются две опции:
    перейти на Ваш сайт магазина OpenCart или в панель управления OpenCart.</p>

<figure class="img-polaroid">
    <img src="img/opencart-engine-installation-step4.jpg"
         alt="">
</figure>

<p>Вы также можете воспользоваться инструкцией по установке:
    <a href="/help/ru/opencart-2-x-how-to-install-opencart-engine-and-a-template-using-fullpackage.html"
       target="_blank">OpenCart. Как установить движок и шаблон OpenCart (при помощи
        “fullpackage”)
    </a>
    .
</p>

<p class="alert alert-danger">Удалите папку "install" с сервера. Вы не сможете войти в магазин, пока эта папка
    находится на сервере.</p>

<p>Установите разрешения 644 или 444 на следующие файлы с целью ограничения доступа
    к ним:</p>
<ul class="marked-list">
    <li>config.php;</li>
    <li>index.php;</li>
    <li>admin/config.php;</li>
    <li>admin/index.php;</li>
    <li>system/startup.php.</li>
</ul>

<p>Установка завершена. Чтобы открыть магазин, пропишите <strong> свое доменное
        имя </strong> в
    адресной строке браузера. Для доступа в панель управления OpenCart, пропишите
    <strong>доменное_имя/admin</strong>.</p>