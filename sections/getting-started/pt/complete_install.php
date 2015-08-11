<h3>Instalação completa</h3>

<p>Esse tipo de instalação pode ser usada quando você não tem o programa do OpenCart já instalado com um loja. O arquivo
    'themeXXX(full).zip' contém tanto os arquivos do programa do OpenCart quanto os arquivos do tema, incluindo o dados
    de demonstração, para que você não precisa instalar o programa do OpenCart separadamente. Os dados de demonstração
    vão fazer seu site ficar igual ao nosso site de demonstração, com todos os mesmos produtos de demonstração, módulos
    e configuração.</p>

<!-- Creating database -->


<h4>Como criar o banco de dados</h4>

<p>Quando todos os arquivos forem enviados ao servidor, você precisa preparar o banco de dados recém criado para o seu
    site OpenCart. Ele pode ser criado usando uma ferramenta de gerenciamento de banco de dados no seu painel de
    hospedagem (
    <i>geralmente é o PhpMyAdmin</i>
    ).
</p>

<p>Você pode criar um banco de dados com o phpMyAdmin seguindo os 3 passos listados abaixo (dê uma olhada nas
    imagens):</p>

<ol class="index-list">
    <li>Para listar os bancos de dados, clique no bot~çao Databases no menu do topo .</li>

    <li>Preencha o nome do novo banco de dados no campo "Create new database".</li>

    <li>On lado direito, clique no botão Create.</li>
</ol>

<h6>Você deve ver um banco de dados criado com o nome que você deu na lista. Para acessar o banco de dados, clique em
    seu
    nome:</h6>

<div class="owl-carousel">
    <div class="item">
        <p>1. Abra a aba "Databases", para entrar na lista de bancos de dado.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Preencha com o nome do banco. </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Clique em "Create".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. O novo banco aparecerá na lista, clique no nome dele para obter acesso ao banco de dados.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Você pode acompanhar o guia em vídeo
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>
    .
</p>
<p> No caso de qualquer problema, entre em contato com seu provedor de hospedagem para obter
    suporte.</p>


<!-- Uploading files -->

<h4>Enviando o template</h4>

<p>Para começar a trabalhar com o OpenCart, você precisa enviar os arquivos para seu servidor. Você pode fazer
    isso através do painel de controle de sua hospedagem ou com um cliente FTP.</p>

<ol class="index-list">
    <li>Abra a pasta do template.</li>

    <li>Vá para a pasta 'themeXXX' e descompacte o arquivo 'themeXXX(full).zip' no seu computador. Envie o conteúdo do
        arquivo para seu servidor (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Como enviar arquivos para o servidor</a>
        ,
        <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank"> Como
            enviar arquivos para o seu servidor usando o cPanel (WebHost manager, WHM)</a>
        ).
    </li>
    <li>Defina as permissões corretas para as pastas e arquivos do OpenCart:
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
        <p>As permissões devem ser definidas para CHMOD 755 ou 777 dependendo da configuração do servidor. Para isso,
            escolha os arquivos e encontre o botão "Change Permissions" se você estiver usando um Gerenciador de
            Arquivos. Se você estiver trabalhando com Linux - use o comando chmod -R 777 "folder_name".</p>
    </li>
</ol>


<!-- Instalação do OpenCart -->


<h4>Instalação do OpenCart</h4>

<p>Abra o seu navegador e vá para o caminho do diretório do OpenCart na barra de endereço do navegador (
    <i>por exemplo http://your_domain_name/OpenCart</i>
    ). Você verá a página de instalação do OpenCart:
</p>

<ol class="index-list">
    <li>Licença</li>
    <li>Preliminar</li>
    <li>Configuração</li>
    <li>Pronto!</li>
</ol>

<h5>
    Licença
</h5>


<p>Marque uma licença do OpenCart e clique no botão <strong>Continue</strong> se você concordar.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-initital.jpg" alt="">
</figure>

<h5>
    Preliminar
</h5>


<p>No segundo passo o OpenCart vai verificar se sua hospedagem estão dentro das especificações e se as permissões dos
    arquivos e pastas estão corretos.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step2.jpg" alt="">
</figure>

<h5>
    Configuração
</h5>


<p>No passo de configuração você precisa fornecer os detalhes do seu banco de dados. O banco MySQL foi criado no passo
    de preparação, agora você precisa preencher os detalhes que você usou:</p>

<ul class="marked-list">
    <li>servidor do banco de dados;</li>

    <li>nome do banco;</li>

    <li>nome de usuário do banco;</li>

    <li>senha.</li>
</ul>

<p>Se encontrar problemas com os detalhes do banco, entre em contato com sua provedora de hospedagem.</p>

<p>Você precisa criar o usuário administrador para sua loja. Preencha nome, senha e email do administrador. Os detalhes
    que você fornecer serão usados para se logar na página administrativa de sua loja.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step3.jpg" alt="">
</figure>

<h5>Pronto!</h5>

<p>Esse é o último passo da instalação do OpenCart. Você verá duas opções: você pode ser redirecionado para seu site do
    OpenCart ou para o painel administrativo.</p>


<figure class="img-polaroid">
    <img src="img/OpenCart-engine-installation-step4.jpg" alt="">
</figure>

<p>Você pode usar as seguintes instruções de instalação:
    <a href="/help/OpenCart-2-x-how-to-install-OpenCart-engine-and-a-template-using-fullpackage.html" target="_blank">OpenCart.
        Como instalar o programa e o template do OpenCart (usando o “fullpackage”)</a>
    .
</p>
<p class="alert alert-danger"> Apague a pasta "install" do seu servidor. Você não poderá entrar na loja enquanto esta
    pasta continuar no servidor.</p>

<p>Para definir restrições de acesso, altere as permissões para 644 e 444 dos seguintes arquivos:</p>

<ul class="marked-list">
    <li>config.php;</li>

    <li>index.php;</li>

    <li>admin/config.php;</li>

    <li>admin/index.php;</li>

    <li>system/startup.php.</li>
</ul>
<p>A instalação terminou. Para abrir a página de sua loja, preencha com
    <strong>nome do domínio</strong> na barra de endereço do seu navegador. Para acessar o painel administrativo do
    OpenCart admin panel, preencha com
    <strong>nome_do_domínio/admin</strong>.</p>