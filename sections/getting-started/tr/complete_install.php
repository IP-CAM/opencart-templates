<h3>Tam kurulum</h3>
<p>Eğer hazırda bir OpenCart mağazanız yoksa bu kurulumu yapmalısınız. 'themeXXX(full).zip' arşivinde OpenCart dosyaları
    vardır ve bu dosyalar örnek veri barındırır. Böylelikle OpenCart'ı ayrıca tekrar kurmanız gerekmez. Örnek veri;
    içindeki örnek ürünler, modüller ve site ayarlamaları sayesinde sitenizin tıpkı bizim demomuzdaki gibi görünmesini
    sağlayacaktır.</p>
<!-- Creating database -->

<h4>Veritabanı oluşturmak</h4>

<p>Tüm dosyalar sunucuya yüklendikten sonra, OpenCart websiteniz için yeni bir veritabanı oluşturmalısınız. Bunu (
    <i>PhpMyAdmin</i>
    ) alanındaki kontrol panelinizden yapabilirsiniz.
</p>

<p>phpMyAdmin'den yeni bir veritabanı oluşturmak için şu üç adımı takip edin:</p>

<ol class="index-list">
    <li>Veritabanlarının listesine ulaşmak için üst menüden Veritabanları düğmesine basın.</li>

    <li>"Yeni bir veritabanı oluştur" alanına, yeni veritabanı ismini yazın.</li>

    <li>Sağ taraftan Oluştur'a tıklayın.</li>
</ol>
<h6>Yeni veritabanınız artık listede yer alıyor. Şimdi ismine tıklayın:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Veritabanlarını listelemek için, "Veritabanları" sekmesini açın.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Veritabanı ismini yazın.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. "Oluştur" a tıklayın.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Yeni veritabanı listede yer aldı. Şimdi bu veritabanının ismine tıklayın.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">
    <a href="/help/how-to-create-a-database.html" target="_blank">Veritabanı yaratmak</a>
    isimli detaylı yardım videosunu izleyebilirsiniz.
</p>
<p> İleri seviyede yardım almak için lütfen sunucu sağlayıcınızla iletişime geçiniz.</p>
<!-- Uploading files -->

<h4>Şablonu yüklemek</h4>

<p class="">OpenCart ile çalışmaya başlamak için, dosyaları sunucunuza yüklemeniz gerekir. Bunu cPanel kontrol
    panelinizden veya bir ftp programıyla yapabilirsiniz.</p>

<ol class="index-list">
    <li>Şablon klasörünü açın.</li>

    <li>Ardından 'themeXXX' klasörüne gidin ve 'themeXXX(full).zip' arşivini bilgisayarınıza çıkartın. Arşiv içeriğini (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Sunucuya dosya yüklemek</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> cPanel
            üzerinden (WebHost manager, WHM vs.) kullanarak dosya yüklemek</a>
        ) başlıklarından yardım alarak sunucuya yükleyin.
    </li>
    <li>OpenCart klasör ve dosyalarınız için doğru izin ayarlarını yapın:
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
        <p>İzinler, sunucu ayarlarına göre CHMOD 755 veya 777 olarak atanmalıdır. Bunu yapmak için, dosya yöneticinizden
            tüm klasör ve dosyaları seçip "İzinleri Değiştir" düğmesine basınız. Eğer Linux kullanıyorsanız chmod -R 777
            "folder_name" (dosya_ismi) komutunu kullanın.</p>
    </li>
</ol>
<!-- OpenCart installation -->

<h4>OpenCart Kurulumu</h4>

<p>Herhangi bir tarayıcının adres çubuğuna OpenCart adresinizi yazın (
    <i>örn. http://your_domain_name/OpenCart</i>
    ). Karşınıza OpenCart kurulum sayfası çıkacak:
</p>

<ol class="index-list">
    <li>Lisans</li>
    <li>Hazırlık aşaması</li>
    <li>Ayarlar</li>
    <li>Hazır!</li>
</ol>

<h5>
    Lisans
</h5>


<p>OpenCart lisans anlaşmasını işaretleyip <strong>Devam</strong> düğmesine basın.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-initital.jpg" alt="">
</figure>

<h5>
    Hazırlık aşaması
</h5>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step2.jpg" alt="">
</figure>

<p>İkinci aşamada OpenCart, hosting ayarlarınızın kurulum için uygun olup olmadığını ve gerekli klasör/dosya izinlerinin
    yapılıp yapılmadığını kontrol eder.</p>


<h5>
    Ayarlar
</h5>

<p>Bu aşamada veritabanı bilgilerinizi girmeniz gerekir. MySQL veritabanını, daha önceki hazırlık aşamasında
    oluşturmuştuk. Şimdi aşağıdaki bilgileri yazınız:</p>

<ul class="marked-list">
    <li>veritabanı sunucusu;</li>

    <li>veritabanı ismi;</li>

    <li>veritabanı kullanıcı adı;</li>

    <li>şifre.</li>
</ul>
<p></p>

<p>Veritabanı bilgileriyle ilgili herhangi bir sorun yaşarsanız, lütfen hizmet sağlayıcınızla iletişime geçiniz.</p>

<p>Mağazanız için bir yönetici oluşturmanız gerekir. İsim, şifre ve e-mail adresi yazın. Daha sonra bu bilgilerle giriş
    yapacaksınız.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step3.jpg" alt="">
</figure>

<h5>
    Hazır!
</h5>


<p>Son OpenCart kurulum aşamasıdır. Burada 2 seçenek var: OpenCart websitenize veya OpenCart yönetim paneline
    yönlendirilebilirsiniz.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step4.jpg" alt="">
</figure>

<p>Bu kurulum yolunu kullanabilirsiniz:
    <a href="/help/OpenCart-2-x-how-to-install-OpenCart-engine-and-a-template-using-fullpackage.html" target="_blank">OpenCart'ı
        “fullpackage” (tam paket) olarak yüklemek</a>
    .
</p>
<p class="alert alert-danger"> Sunucunuzdan "install" (kurulum) klasörünü kaldırın. Bu klasör sunucunuzda olduğu sürece
    mağazanıza giremezsiniz.</p>

<p>Güvenlik için aşağıdaki dosyaların izinlerini 644 ve 444 olarak değiştirin:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>
<p>Kurulum bitti. Mağazaya girmek için tarayıcınızın adres çubuğuna
    <strong>alan adı</strong> nı yazın. OpenCart yönetim paneline girmek için ise <strong>domain_name/admin</strong>.
</p>

    <p class="alert alert-danger"> Sunucuya yьklediрiniz юablonlarэn ayrэ ayrэ indirilmesini engellemek iзin, direkt dosya indirme iznini kapatmalэsэnэz. Bunu yapmak iзin .htaccess dosyasэnэ aзэn ve alttaki satэrlarэn yazэlэ olduрuna emin olun:
     <code>
    &lt;FilesMatch&rt; "(?i)((\.tpl|\.ini|\.log|(?<!robots)\.txt))">
    Order deny,allow
    Deny from all
    &lt;/FilesMatch&rt;
    </code>
    Dosyada bu kod yoksa, en sona ekleyin ve ".htaccess.txt" uzantэsэnэ ".htaccess" olarak deрiюtirin.
    </p>