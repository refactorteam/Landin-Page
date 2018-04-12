<?php
//для начала опишем функцию очистки данных от лишних пробелов и тегов
function clstr($data){
 return trim(strip_tags($data));
}
//если метод обращения совпадает, то обрабатываем данные из массива $_POST
if($_SERVER['REQUEST_METHOD']=='POST'){
	$tema = "Участие в PRE-ICO Refactor.pro";
$mail=trim($_POST['mail']);
$Comments= "<center><b>Участие в PRE-ICO Refactor.pro | ES</b></center> <br/><br/><hr/><br/> E-mail: <b>".$mail." <br/><br/> <hr/> ".$Comments;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: Refactor.pro <support@refactor.pro>\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail("info@refactor.pro <info@refactor.pro>", $tema, $Comments, 
$headers);
}
if($_COOKIE['status_mail']==true){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>re:factor</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="fixed-button-container d-none animated" id="fixedButtons">
        <a href="https://t.me/refactor_rus" class="fixed-button telegram-button" target="_blank" id="tg-link">
            <i class="fab fa-telegram-plane"></i>
            <!-- <i class="fas fa-chevron-up"></i> -->
        </a>
        <a href="https://medium.com/@refactor_ico" class="fixed-button telegram-button" target="_blank" id="tg-link">
            <i class="fab fa-medium-m"></i>
            <!-- <i class="fas fa-chevron-up"></i> -->
        </a>
        <a href="#top" class="fixed-button" id="scrollTop"><i class="fas fa-chevron-up"></i></a>
    </div>
    <section class="topper" id="top">
        <div class="particle-background d-md-none d-lg-block" id="particleBackground"></div>
        <div class="container">
            <div class="menu-m outer-menu">
                <nav class="header navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand header-logo" href="#">re<span style="color:#5253FB;">:</span>factor</a>
                    <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="navbar-toggler_img" xmlns="http://www.w3.org/2000/svg" viewBox="1832 35 16 16">
                            <defs>
                                <style>
                                    .a {
                                        fill: #fff;
                                    }
                                    .b {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <g transform="translate(1544 13)">
                                <path class="a" d="M-6160,14V12h10v2Zm0-6V6h16V8Zm0-6V0h16V2Z" transform="translate(6448 23)" />
                                <rect class="b" width="16" height="16" transform="translate(288 22)" />
                            </g>
                        </svg>
                    </button>
                </nav>
                <div class="d-flex menu-m-content">
                    <div class="menu-m-left">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="header-link" href="#">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="/FAQ">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="https://medium.com/@refactor_ico">Blog</a>
                            </li>
							<!--
                            <li class="nav-item">
                                <a class="header-link" href="#">Demo MVP</a>
                            </li>
							-->
                            <li class="nav-item">
                                <a class="header-link" href="#">Bounty</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link special" href="#">Comprar tokens</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-m-right">
                        <ul class="social-list d-flex">
                            <li class="social-list_item"><a href="https://t.me/refactor_rus" target="_blank" class="social-list_item__link"><i class="fab fa-telegram-plane"></i></a>
                            </li>
                            <li class="social-list_item"><a href="https://twitter.com/refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                        <ul class="social-list d-flex">
                            <li class="social-list_item"><a href="https://www.facebook.com/refactor.official/" target="_blank" class="social-list_item__link"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="social-list_item"><a href="https://medium.com/@refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-medium-m"></i></a>
                            </li>
                        </ul>
                        <ul class="social-list d-flex">
                            <li class="social-list_item"><a href="https://github.com/refactorteam/Crowdsale-Contracts" target="_blank" class="social-list_item__link"><i class="fab fa-github"></i></a>
                            </li>
                            <li class="social-list_item"><a href="https://www.reddit.com/r/refactorICO/" target="_blank" class="social-list_item__link"><i class="fab fa-reddit"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="header navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand header-logo" href="#">re:factor</a>
                <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="navbar-toggler_img" xmlns="http://www.w3.org/2000/svg" viewBox="1832 35 16 16">
                        <defs>
                            <style>
                                .a {
                                    fill: #fff;
                                }
                                .b {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <g transform="translate(1544 13)">
                            <path class="a" d="M-6160,14V12h10v2Zm0-6V6h16V8Zm0-6V0h16V2Z" transform="translate(6448 23)" />
                            <rect class="b" width="16" height="16" transform="translate(288 22)" />
                        </g>
                    </svg>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="header-link" href="#idea">Idea</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#product">Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#roadmap">Hoja de ruta</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#team">Equipo</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="/FAQ" class="header-button no-shadow">FAQ</a>
                        <a href="" class="login-button header-button circled shadow-hover"><i class="person"></i><span class="login-button_text">Registrar/Entrar</span></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/es.png"  width="25" height="20"> ES </button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
                                <a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English </a>
								<a class="dropdown-item" href="ko.php"><img src="img/ko.png"  width="25" height="20"> 한국어    </a>
								<a class="dropdown-item active" href="es.php"><img src="img/es.png"  width="25" height="20"> Español    </a>
								<a class="dropdown-item" href="ru.php"><img src="img/ru.png"  width="25" height="20"> Русский</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="topper-content">
                <div class="topper-content-left">
                    <h1 class="topper-title">New asset<br>in global<br>crypto economy</h1>
                    <p class="topper-sub">basado en blockchain</p>
                    <div class="btn-group">
                        <a href="http://refactor.pro/docs/onepage_eng.pdf" class="header-button circled transparent bg-hover c-button">Lightpaper</a>
                        <a href="http://refactor.pro/docs/wp_eng.pdf" class="c-button header-button circled transparent bg-hover ">Whitepaper</a>
                        <!-- <a href="http://refactor.pro/docs/refactor_eng.pdf" class="header-button circled transparent bg-hover">Pitch deck</a> -->
                    </div>
                </div>
                <div class="topper-below">
                    <button type="button" class="topper-below-button center"></button>
                </div>
                <!-- <div class="topper-content-right">
                    <p class="start">Token Sale starts in:</p>
                    <h1 class="topper-clock">20:18:21</h1>
                    <a href="" id="pulsatingButton" class="header-button circled shadow shadow-hover hovered scale fill">Buy tokens</a>
                    <p class="exept">Exepting BTC, ETH, LTC</p>
                </div> -->

                <div class="footer-section sub topper-content-right">
                    <h2 class="footer-section_caption">Obtenga noticias<br>sobre desarollos</h2>
                    <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                        <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="Enter email for news" required>
                        <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">Estar connectado</button>
                    </form>
                </div>
                <ul class="social-list d-flex">
                    <li class="social-list_item"><a href="https://t.me/refactor_rus" target="_blank" class="social-list_item__link"><i class="fab fa-telegram-plane"></i></a>
                    </li>
                    <li class="social-list_item"><a href="https://twitter.com/refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-list_item"><a href="https://www.facebook.com/refactor.official/" target="_blank" class="social-list_item__link"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="social-list_item"><a href="https://medium.com/@refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-medium-m"></i></a>
                    </li>
                    <li class="social-list_item"><a href="https://github.com/refactorteam/Crowdsale-Contracts" target="_blank" class="social-list_item__link"><i class="fab fa-github"></i></a>
                    </li>
					<li class="social-list_item"><a href="https://www.reddit.com/r/refactorICO/" target="_blank" class="social-list_item__link"><i class="fab fa-reddit"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--<section class="video" data-toggle="modal" data-target="#modalVideo">
        <div class="video-play"></div>
        <div class="video-filter"></div>
    </section>-->
    <!--    <div class="video-field" data-toggle="modal" data-target="#modalVideo"></div>-->
    <section class="follow" id="follow">
        <nav class=" follow-header navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#top"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#idea">Idea</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product">Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roadmap">Hoja de ruta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Equipo</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="" class="header-button fill circled shadow-hover bold" id="pulseBottomButton">Comprar tokens</a>
                        <a href="" class="figure-button"><i class="person"></i></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/es.png"  width="25" height="20"> ES</button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
                                <a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English</a>
								<a class="dropdown-item" href="ko.php"><img src="img/ko.png"  width="25" height="20"> 한국어</a>
								<a class="dropdown-item active" href="es.php"><img src="img/es.png"  width="25" height="20"> Español</a>
								<a class="dropdown-item" href="ru.php"><img src="img/ru.png"  width="25" height="20"> Русский</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="about">
        <div class="container">
            <article class="receivable about-article">
                <h2 class="caption center">Qué son cuentas por cobrar</h2>
                <div class="show d-flex putDown" id="tr1">
                    <div class="show-card supplier">
                        <div class="show-card-bg supplier-img"></div>
                        <span class="show-card-sub">Proveedor</span>
                    </div>
                    <div class="between">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Productos y servicios</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="between-c center">Cuentas por cobrar</h1>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <span class="item-desc">Pago aplazado</span>
                                    <div class="item-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-card customer">
                        <div class="show-card-bg customer-img"></div>
                        <span class="show-card-sub">Adquiridor</span>
                    </div>
                </div>
                <div class="show show-mobile d-flex">
                    <div class="show-mobile-left">
                        <div class="show-card supplier">
                            <div class="show-card-bg supplier-img"></div>
                            <span class="show-card-sub">Proveedor</span>
                        </div>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Productos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="between">
                        <h1 class="between-c center">Cuentas<br>por<br>cobrar</h1>
                    </div>
                    <div class="show-mobile-right">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Pago aplazado</span>
                                </div>
                            </div>
                        </div>
                        <div class="show-card customer">
                            <div class="show-card-bg customer-img"></div>
                            <span class="show-card-sub">Adquiridor</span>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">Con mucha frecuencia, los proveedores envían los productos en condiciones de crédito, que el comprador<br>tenga bastante tiempo para utilizarlos o revenderlos. Tan pronto como el envío está realizando,<br>pero el cliente no ha pagado dinero, su deuda se refleja en el balance del proveedor como cuentas por cobrar.</p>
            </article>
            <article class="idea about-article" id="idea">
                <h2 class="caption center">Idea principal</h2>
                <div class="idea-show show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">Mercados<br>emergentes</span>
                        <div class="line">
                            <span class="line-text">Cuentas<br>por cobrar</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">Activo<br>comerciable</span>
                        <span class="center-text center">Plataforma de comercio<br>global</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">Communidad<br>global</span>
                        <div class="line">
                            <span class="line-text">Inversiones</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="idea-show idea-show-mobile show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">Deudas</span>
                        <div class="line">
                            <span class="line-text">Cuentas<br>por cobrar</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">Activos<br>commerciables</span>
                        <span class="center-text center">Plataforma de comercio<br>global</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">Inversores<br>privados</span>
                        <div class="line">
                            <span class="line-text">Inversiones</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">re:factor ofrece al mercado financiero una plataforma de factoraje P2P<br>para facilitar la inversión en cuentas por cobrar y hacer que el proceso sea global.</p>
            </article>
        </div>
    </section>
    <section class="structure" id="product">
        <div class="container">
            <h2 class="caption center">Plataforma de re:factor</h2>
            <div class="structure-wrapper">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Proveedores
                                <br>factorables</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Proveedores
                                <br>no factorables</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Inversores institucionales y privados ricos</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                </div>
                <div class="structure-wheel">
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure1">
                            <h1 class="structure-wheel_title">COMFIN</h1>
                            <div class="keeper" data-desc="strDesc1">
                                <h3 class="keeper-caption">COMFIN</h3>
                                <p class="keeper-text">Empresa de factoraje clásica que opera en los países destinarios</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">Plataforma global P2P de compraventa de cuentas por cobrar</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">Bolsa de cambio de cuentas por cobrar</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">Subcontratación de servicios para institutos financieros de administración y gestión de cuentas por cobrar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Proveedores factorables</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Inversores privados P2P</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Instuticiones
                                <br>Financieras - Prestadores</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Prestatarios
                                <br>de Instituciones
                                <br>Financieras</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="structure-wrapper-m">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Proveedores
                                <br>Factorables</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Inversores<br>institucionales<br>y privados ricos</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Proveedores
                                <br>no factorables</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                </div>
                <div class="structure-wheel">
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure1">
                            <h1 class="structure-wheel_title">COMFIN</h1>
                            <div class="keeper" data-desc="strDesc1">
                                <h3 class="keeper-caption">COMFIN</h3>
                                <p class="keeper-text">Empresa de factoraje clásica que opera en los países destinarios</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">Bolsa de cambio de cuentas por cobrar</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">Plataforma global P2P de compraventa de cuentas por cobrar</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">Subcontratación de servicios para institutos financieros de administración y gestión de cuentas por cobrar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Proveedores
                                <br>Factorables</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Inversores
                                <br>privados P2P</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Instituciones
                                <br>Financieras - Prestadores</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Prestatarios
                                <br>de Instituciones
                                <br>Financieras</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mvp" id="mvp">
        <!--  <article class="min">
<div class="container">
<div class="min-wrapper d-flex">
<div class="min-left">
<h2 class="caption">Minimum viable product</h2>
<p class="min-desc">A minimum viable product has just those core features sufficient to deploy the product, and no more. Developers typically deploy the product to a subset of possible customers—such as early adopters thought to be more forgiving.</p>
<button class="header-button circled gradient">Demo MVP</button>
</div>
<div class="min-right">
<div class="min-right-yt"></div>
</div>
</div>
</div>
</article> -->
        <article class="benefits min">
            <div class="container">
                <div class="min-wrapper d-flex">
                    <div class="min-right">
                        <div class="min-right-img"></div>
                    </div>
                    <div class="min-left">
                        <h2 class="caption">re:factor</h2>
                        <div class="min-left-img"></div>
                        <ul class="min-list">
                            <li class="min-desc min-list-item">Transforma cuentas por cobrar en un activo liquido</li>
                            <li class="min-desc min-list-item">Levanta los limites entre los usuarios del plataforma</li>
                            <li class="min-desc min-list-item">Concede el acceso a las finanzas a las PYMEs en mercados emergentes</li>
                            <li class="min-desc min-list-item">Desarolla las economías de países de presencia de re:factor</li>
                            <li class="min-desc min-list-item">Reduce gastos de las empresas participantes de plataforma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="roadmap" id="roadmap">
        <div class="container">
            <h2 class="caption center">Hoja de ruta</h2>
            <div class="roadmap-wrapper">
                <div class="roadmap-top">
                    <div class="arrow arrow-left"></div>
                    <div class="roadmap-top-slider d-flex">
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/1.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Fundación de re:factor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/2.svg); width: 87px; height: 64px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Formación del equipo del proyecto</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/3.svg); width: 60px; height: 84px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Desarrollo del modelo de negocio, requisitos, obtención de conocimiento jurídico</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/4.svg); width: 102px; height: 75px; background-position: right"></div>
                            </div>
                            <span class="roadmap-card_desc">Conclusión de contratos preliminares con los minoristas, institutos financieros en los países destinarios</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/5.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Pruebas en el modo de estrés del modelo de negocio de re:factor, formación del concepto técnico de realización</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/6.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Whitelist ICO, desarrollo de MVP </span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/7.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Pre-ICO</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/8.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Anunciación de MVP, obtención de licencias por parte de la empresa COMFIN</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/9.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">ICO, introducción de tokens RFT en las bolsas de criptomonedas</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/10.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Arbitraje de resultados de ICO, pruebas alfa de RTP, introducción de tokens RFT en las bolsas de criptomonedas</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/11.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Desenvolvimiento de la infraestructura de negocios en los países destinarios, pruebas de Crowdfactor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/12.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Pruebas de STRAM</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/13.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Lanzamiento completo de la plataforma de re:factor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/14.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Integración de la inteligencia artificial ADAM</span>
                        </div>
                    </div>
                    <div class="arrow arrow-right"></div>
                </div>
            </div>
        </div>
        <div class="roadmap-bottom">
            <div class="container">
                <div class="roadmap-bottom-wrapper d-flex">
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-4">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">May, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Jun, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Jul, 2017 - Ago, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Sep, 2017 - Oct, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Nov, 2017 - Dic, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-2">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Ene, 2018 - Mar, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-4">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Abr, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">May, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-6">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Jun, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Jul, 2018 - Ago, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-10">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail  Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Sep, 2018 - Nov, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-11">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Dic, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-12">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Ene, 2019</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2019-1">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Feb, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <div class="caption center">Our team</div>
            <div class="team-top d-flex" id="team-slider">
                <div class="arrow arrow-left"></div>
                <div class="team-members">
                    <div class="team-top-card" team-card="1">
                        <img src="img/team/1.png" alt="Mikhail Treyvish" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Mikhail Treyvish</h3>
                            <span class="team-card_pos">CEO</span>
                            <p class="team-card_ach">Fundador y Presidente de la agencia de monitoreo de calificación OmniGrade, Asesor en factoraje de EBRR, Presidente del Consejo Administrativo de la «Empresa Nacional de Factoraje», Miembro de la Junta Directiva, Presidente de la Junta Directiva, Jefe del Departamento Asiático de International Factors Group.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="2">
                        <img src="img/team/2.png" alt="Elena Trakhanova" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Elena Trakhanova</h3>
                            <span class="team-card_pos">CBDO</span>
                            <p class="team-card_ach">14 años en el negocio de factoraje, ocupaba cargos administrativos en las empresas lideres de factoraje rusas -Alfa-Bank, Empresa Nacional de Factoraje, Gazprombank.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="3">
                        <img src="img/team/3.png" alt="Margrith Lutschg-Emmenegger" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Margrith Lutschg-Emmenegger</h3>
                            <span class="team-card_pos">BUSINESS DEVELOPMENT PARTNER</span>
                            <p class="team-card_ach">Consejero en Trade Finance Market, Presidente del Consejo Administrativo de Hili Properties Ltd, Consejero en FIMBank Plc.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="4">
                        <img src="img/team/4.png" alt="Dennis Firmansjah" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Dennis Firmansjah</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">Secretario General de la Asociación Asiática de Servicios Financieros, Miembro de la Junta Directiva de PT. Aditama Finance.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="5">
                        <img src="img/team/5.png" alt="Andrey Otmakhov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Andrey Otmakhov</h3>
                            <span class="team-card_pos">CTO</span>
                            <p class="team-card_ach">Cofundador y Director General de la empresa Maxxinet con más de 15 años de experiencia en desarrollo de IT-soluciones y plataformas de internet sectoriales en el mercado mundial.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="6">
                        <img src="img/team/6.png" alt="Stanislav Pushtorskiy" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Stanislav Pushtorskiy</h3>
                            <span class="team-card_pos">CCO</span>
                            <p class="team-card_ach">Director de ventas,Director de relaciones de inversión, Director comercial, vicepresidente de la Empresa Nacional de Factoraje</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="7">
                        <img src="img/team/7.png" alt="Chris Barrett" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Chris Barrett</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">Director ejecutivo de General Health International, Consejero Superior de Nestor Advisors, Socio de PwC. </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="8">
                        <img src="img/team/8.png" alt="Sergei Sergienko" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Sergei Sergienko</h3>
                            <span class="team-card_pos">CRYPTO ADVISOR</span>
                            <p class="team-card_ach">Fundador y director de Chronobank, co-fundador de Edway Group Ltd, Entusiasta de blockchain, Ganador de muchos premios en emprendimiento.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="9">
                        <img src="img/team/9.png" alt="John Brehcist" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">John Brehcist</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">30 años de experiencia en finanzas comerciales, Fundador de ROUNDWINDOW Consultancy, Services, Jefe de estrategias e investigación de LloydsTSB Commercial Finance ltd.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="10">
                        <img src="img/team/10.png" alt="Vyacheslav Sokoltsov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Vyacheslav Sokoltsov</h3>
                            <span class="team-card_pos">CAO</span>
                            <p class="team-card_ach">Emprendedor en serie, 7 años en inversiones de riesgo, Entusiasta de blockchain, criptoinversor</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="11">
                        <img src="img/team/11.png" alt="Joseph Lufkin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Joseph Lufkin</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">Fundador de IFCL Group, Asesor en planificación, configuración, gestión y evaluación de fondos de desarrollo y objetos de financiación de Asian Development Bank, Patrono y tesosrero de Asia Pacific Aid Programs </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="12">
                        <img src="img/team/12.png" alt="Marius Savin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Marius Savin</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">20 años de experiencia en factoraje, Ex miembro del Comité de marketing FCI (la mayor asociación de factoraje en el mundo), Сonferenciante de cerrtificación de comercio exterior (COFIT) elaborada en asociación con la Universidad de Malta y FCI, Socio en QUARTERBACK MALTA </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="13">
                        <img src="img/team/13.png" alt="Ralf Bauer" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Ralf Bauer</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">25 años de experiencia en el área de la banca y el factoraje Director de BfG Bank AG, Director ejecutivo de EUROFACTOR, Director ejecutivo de Lloyds TSB Commercial Finance, Accionista de Capitalfluss Beratungsgesellschaft mbH.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="14">
                        <img src="img/team/14.png" alt="Ksenija Kraewska" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Ksenija Kraewska</h3>
                            <span class="team-card_pos">CMO</span>
                            <p class="team-card_ach">15 años de experiencia en MarCOM y relaciones corporativas (Symrise AG, Tizen, Gobierno de Moscú), doctor de sociología económica, experto en economía conductista, estrategias de marketing y comunicaciones, IR y comercio internacional.</p>
                        </div>
                    </div>
					<div class="team-top-card" team-card="15">
                        <img src="img/team/15.png" alt="Mikhail Knyazev" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Mikhail Knyazev</h3>
                            <span class="team-card_pos">IR & BUSINESS DEVELOPMENT</span>
                            <p class="team-card_ach">20 years in the investment business Founder and Director, investment company «liberty Capital» Member of the Board of Directors of several industrial enterprises Founder, Multifunctional Financial Brokerage Centre Member, Russian Association of cryptocurrency and blockchain Crypto investor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="arrow arrow-right"></div>
            </div>
            <div class="team-wrapper">
                <div class="team-row d-flex">
                    <div class="team-card d-flex" team-member="1">
                        <img src="img/team/1.png" alt="Mikhail Treyvish" class="team-card_img">
                        <h3 class="team-card_name">Mikhail<br>Treyvish</h3>
                        <span class="team-card_pos">CEO</span>
                    </div>
                    <div class="team-card d-flex" team-member="2">
                        <img src="img/team/2.png" alt="Elena Trakhanova" class="team-card_img">
                        <h3 class="team-card_name">Elena<br>Trakhanova</h3>
                        <span class="team-card_pos">CBDO</span>
                    </div>
                    <div class="team-card d-flex" team-member="3">
                        <img src="img/team/3.png" alt="Margrith Lutschg-Emmenegger" class="team-card_img">
                        <h3 class="team-card_name">Margrith<br>Lutschg-Emmenegger</h3>
                        <span class="team-card_pos">BUSINESS DEVELOPMENT PARTNER</span>
                    </div>
                    <div class="team-card d-flex" team-member="4">
                        <img src="img/team/4.png" alt="Dennis Firmansjah" class="team-card_img">
                        <h3 class="team-card_name">Dennis<br>Firmansjah</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="5">
                        <img src="img/team/5.png" alt="Andrey Otmakhov" class="team-card_img">
                        <h3 class="team-card_name">Andrey <br>Otmakhov</h3>
                        <span class="team-card_pos">CTO</span>
                    </div>
                </div>
                <div class="team-row d-flex">
                    <div class="team-card d-flex" team-member="6">
                        <img src="img/team/6.png" alt="Stanislav Puschtorskiy" class="team-card_img">
                        <h3 class="team-card_name">Stanislav<br>Puschtorskiy</h3>
                        <span class="team-card_pos">CCO</span>
                    </div>
                    <div class="team-card d-flex" team-member="7">
                        <img src="img/team/7.png" alt="Chris Barrett" class="team-card_img">
                        <h3 class="team-card_name">Chris<br>Barrett</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="8">
                        <img src="img/team/8.png" alt="Sergei Sergienko" class="team-card_img">
                        <h3 class="team-card_name">Sergei<br>Sergienko</h3>
                        <span class="team-card_pos">CRYPTO ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="9">
                        <img src="img/team/9.png" alt="John Brehcist" class="team-card_img">
                        <h3 class="team-card_name">John<br>Brehcist</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="10">
                        <img src="img/team/10.png" alt="Vyacheslav Sokoltsov" class="team-card_img">
                        <h3 class="team-card_name">Vyacheslav<br>Sokoltsov</h3>
                        <span class="team-card_pos">CAO</span>
                    </div>
                </div>
                <div class="team-row d-flex">
                    <div class="team-card d-flex" team-member="11">
                        <img src="img/team/11.png" alt="Joseph Lufkin" class="team-card_img">
                        <h3 class="team-card_name">Joseph<br>Lufkin</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="12">
                        <img src="img/team/12.png" alt="Marius Savin" class="team-card_img">
                        <h3 class="team-card_name">Marius<br>Savin</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="13">
                        <img src="img/team/13.png" alt="Ralf Bauer" class="team-card_img">
                        <h3 class="team-card_name">Ralf<br>Bauer</h3>
                        <span class="team-card_pos">ADVISOR</span>
                    </div>
                    <div class="team-card d-flex" team-member="14">
                        <img src="img/team/14.png" alt="Ksenija Kraewska" class="team-card_img">
                        <h3 class="team-card_name">Ksenija<br>Kraewska</h3>
                        <span class="team-card_pos">CMO</span>
                    </div>
					<div class="team-card d-flex" team-member="15">
                        <img src="img/team/15.png" alt="Mikhail Knyazev" class="team-card_img">
                        <h3 class="team-card_name">Mikhail<br>Knyazev</h3>
                        <span class="team-card_pos">IR & BUSINESS DEVELOPMENT</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="economy" id="economy">
        <div class="container">
            <h1 class="caption center">Detalles de ICO</h1>
            <div class="economy-wrapper d-flex">
                <div class="economy-around">
                    <div class="economy-diagram">
                        <div class="economy-diagram-wrapper">
                            <h2 class="economy-amount economy-number center">1000<br>milliones</h2>
                            <p class="economy-desc center">máximo de emisión<br>de tokens</p>
                        </div>
                    </div>
                    <div class="economy-description">
                        <div class="economy-left">
                            <div class="economy-thing">
                                <h2 class="economy-number">720<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Tokens a vender<br>durante ICO</p>
                                <div class="economy-round" style="opacity: 1;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">200<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">reservados en el balance del equipo</p>
                                <div class="economy-round" style="opacity: .8;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">50<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">tokens a vender durante pre-ICO</p>
                                <div class="economy-round" style="opacity: .6;"></div>
                            </div>
                        </div>
                        <div class="economy-right">
                            <div class="economy-thing">
                                <h2 class="economy-number">10<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Bounty</p>
                                <div class="economy-round" style="opacity: .4;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">10<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Consejeros</p>
                                <div class="economy-round" style="opacity: .2;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">10<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">inversores de referencia</p>
                                <div class="economy-round" style="opacity: .1;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="economy-bottom d-flex">
                <div class="economy-card d-flex">
                    <div class="economy-img">
                        <div class="economy-img_bg" style="background-image: url(img/token/cap.svg);"></div>
                    </div>
                    <div class="economy-thing">
                        <h2 class="economy-number">5 000<span class="economy-b">ETH</span></h2>
                        <p class="economy-desc">Soft cap</p>
                    </div>
                </div>
                <div class="economy-card d-flex">
                    <div class="economy-img">
                        <div class="economy-img_bg" style="background-image: url(img/token/token.svg);"></div>
                    </div>
                    <div class="economy-thing">
                        <h2 class="economy-number">100 000<span class="economy-b">ETH</span></h2>
                        <p class="economy-desc">Hard cap</p>
                    </div>
                </div>
            </div>
            <div class="economy-buy center">
                <a href="" class="header-button gradient circled center economy-button bold">Comprar tokens</a>
            </div>
        </div>
    </section>
    <!--     <section class="partners">
    <div class="container">
        <h1 class="caption center">Our partners</h1>
        <div class="partners-wrapper">
            <div class="partners-row d-flex" id="pt1">
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'img/partners/sber.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'img/partners/luk.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/wiktionary-logo-transparent.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/unilever-logo-png-transparent.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/united-airlines-logo-png-transparent.png')"></div>
                </div>
            </div>
            <div class="partners-row d-flex" id="pt2">
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'img/partners/sber.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'img/partners/luk.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/wiktionary-logo-transparent.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/unilever-logo-png-transparent.png')"></div>
                </div>
                <div class="partners-card d-flex">
                    <div class="partners-img" style="background-image: url( 'https://s3.amazonaws.com/freebiesupply/large/2x/united-airlines-logo-png-transparent.png')"></div>
                </div>
            </div>
            <div class="button-row">
                <button type="button" class="arrow arrow-left" id="ptPrev"></button>
                <button type="button" class="arrow arrow-right" id="ptNext"></button>
            </div>
        </div>
    </div>
</section> -->
    <!--     <section class="media">
        <div class="container">
            <h1 class="caption center">Media</h1>
            <div class="media-wrapper">
                <div class="media-top">
                    <button type="button" class="arrow arrow-left"></button>
                    <div class="media-top-slider">
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/1.png)"></div>
                        </div>
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/2.svg)"></div>
                        </div>
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/3.svg)"></div>
                        </div>
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/1.png)"></div>
                        </div>
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/2.svg)"></div>
                        </div>
                        <div class="media-top-card d-flex">
                            <div class="media-top-img" style="background-image: url(img/media/3.svg)"></div>
                        </div>
                    </div>
                    <button type="button" class="arrow arrow-right"></button>
                </div>
                <div class="media-articles">
                    <button type="button" class="arrow arrow-left"></button>
                    <div class="media-articles-slider">
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/1.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">Эрнест Сокольцов стал участником<br>выпуска «Пусть говорят»</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/2.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">«Как это быть армянином?»<br>Читайте в новом номере</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/3.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">Эрнест Сокольцов стал участником<br>выпуска «Пусть говорят»</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/1.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">Эрнест Сокольцов стал участником<br>выпуска «Пусть говорят»</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/1.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">Эрнест Сокольцов стал участником<br>выпуска «Пусть говорят»</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                        <a href="" class="article-link">
                            <article class="media-article">
                                <img src="img/media/1.png" alt="vc.ru" class="media-article_logo">
                                <img src="img/media/article.png" alt="" class="media-article_img">
                                <h3 class="media-article_title">Эрнест Сокольцов стал участником<br>выпуска «Пусть говорят»</h3>
                                <span class="media-article_date">18.02.2018</span>
                            </article>
                        </a>
                    </div>
                    <button type="button" class="arrow arrow-right"></button>
                </div>
            </div>
        </div>
    </section> -->
    <section class="bottom">
        <div class="bottom-particles d-md-none d-lg-block" id="bottomParticles"></div>
        <div class="container">
            <section class="time">
                <div class="time-content">
                    <p class="start">Token Sale starts in:</p>
                    <h1 class="topper-clock">20:18:21</h1>
                    <a href="" class="header-button circled shadow shadow-hover hovered scale fill">Buy tokens</a>
                    <p class="exept">Accepting BTC, ETH, ETC,<br>BCH, BTG, DASH, LTC</p>
                </div>
            </section>


            <!-- <div class="footer-section sub sub-section">
                <h2 class="footer-section_caption">Get news on<br>developments</h2>
                <form action="javascript:void(0);" class="footer-form">
                    <input type="email" class="footer-email d-block" id="inputEmail" placeholder="Enter email for news" required>
                    <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">Stay tuned</button>
                </form>
            </div> -->
        </div>
        <section class="footer">
            <div class="container">
                <div class="footer-top d-flex">
                    <div class="footer-section">
                        <h2 class="footer-section_caption">Menú</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="/FAQ" class="footer-list_item__link">FAQ</a>
                            </li>
                            <li class="footer-list_item"><a href="https://medium.com/@refactor_ico" class="footer-list_item__link">Blog</a>
                            </li>
							<!--
                            <li class="footer-list_item"><a href="" class="footer-list_item__link">Demo MVP</a>
                            </li>
							-->
                            <li class="footer-list_item"><a href="" class="footer-list_item__link">Bounty</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <div class="footer-section-division">
                            <h2 class="footer-section_caption">Contactos</h2>
                            <ul class="footer-list contacts">
								<!--
                                <li class="footer-list_item"><a href="tel:+79999999999" class="footer-list_item__link">+7 999 999 99 99</a>
                                </li>
								-->
                                <li class="footer-list_item"><a href="mailto:info@refactor.pro" class="footer-list_item__link">info@refactor.pro</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-section-division">
                            <h2 class="footer-section_caption">Únete a nosotros</h2>
                            <ul class="social-list d-flex">
                                <li class="social-list_item"><a href="https://t.me/refactor_rus" target="_blank" class="social-list_item__link"><i class="fab fa-telegram-plane"></i></a>
                                </li>
                                <li class="social-list_item"><a href="https://twitter.com/refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-list_item"><a href="https://www.facebook.com/refactor.official/" target="_blank" class="social-list_item__link"><i class="fab fa-facebook"></i></a>
                                </li>
                            </ul>
                            <ul class="social-list d-flex">
                                <li class="social-list_item"><a href="https://medium.com/@refactor_ico" target="_blank" class="social-list_item__link"><i class="fab fa-medium-m"></i></a>
                                </li>
                                <li class="social-list_item"><a href="https://github.com/refactorteam/Crowdsale-Contracts" target="_blank" class="social-list_item__link"><i class="fab fa-github"></i></a>
                                </li>
                                <li class="social-list_item"><a href="https://www.reddit.com/r/refactorICO/" target="_blank" class="social-list_item__link"><i class="fab fa-reddit"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-section">
                        <h2 class="footer-section_caption">Documentos</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/onepage_eng.pdf" class="footer-list_item__link">Lightpaper</a>
                            </li>
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/wp_eng.pdf" class="footer-list_item__link">Whitepaper</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section sub">
                        <h2 class="footer-section_caption">Obtenga noticias<br>sobre desarollos</h2>
                        <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                            <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="Entra email" required>
                            <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="footer-bottom d-flex">
                    <div class="footer-bottom_logo">
                        <h1 class="footer-bottom_logo__text">re:factor</h1>
                    </div>
                    <div class="footer-bottom_copy">
                        <p class="footer-bottom_copy__p">©re:factor financial group, 2018. Todos los derechos reservados.
                            <br>Esta pagina web utiliza cookies. La información adquirida ayuda a mostrar anuncios personalizados y generar estadísticas de marketing. Al continuar usando la página web, Usted acepta nuestros términos de uso de cookies.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /.container -->
    <!-- .modals -->
    <div class="modal fade video-modal" id="modalVideo" tabindex="-1" role="dialog" aria-hidden="true" video-id="hYip_Vuv8J0">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="video-frame">
                        <div id="modalFrame"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="personModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body d-flex">
                    <div class="arrow arrow-left"></div>
                    <div class="team-members">
                        <div class="team-modal-card" team-card="1">
                            <img src="img/team/1.png" alt="Mikhail Treyvish" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Mikhail Treyvish</h3>
                                <span class="team-card_pos">CEO</span>
                                <p class="team-card_ach">Founder and President of Omnigrade rating monitoring agency, Factoring consultant to EBRD, CEO at National Factoring Company, board of directors member, board of directors head, Head of Asian department at International
                                    Factors Group
                                </p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="2">
                            <img src="img/team/2.png" alt="Elena Trakhanova" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Elena Trakhanova</h3>
                                <span class="team-card_pos">CBDO</span>
                                <p class="team-card_ach">14 years of experience in factoring business, top manager at the number of leading Russian factoring companies such as Alfa bank, National Factoring Company, Gazprombank.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="3">
                            <img src="img/team/3.png" alt="Margrith Lutschg-Emmenegger" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Margrith Lutschg-Emmenegger</h3>
                                <span class="team-card_pos">BUSINESS DEVELOPMENT PARTNER</span>
                                <p class="team-card_ach">Adviser to Trade Finance Market, head of board at Hill Properties Ltd., Adviser to FIMBank Plc.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="4">
                            <img src="img/team/4.png" alt="Dennis Firmansjah" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Dennis Firmansjah</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">General secretary at Asian Financial Services Association (AFSA), Board member at PT. Aditama Finance</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="5">
                            <img src="img/team/5.png" alt="Andrey Otmakhov" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Andrey Otmakhov</h3>
                                <span class="team-card_pos">CTO</span>
                                <p class="team-card_ach">Co-founder and CEO at Maxxinet, 15 years of experience in creating IT platforms.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="6">
                            <img src="img/team/6.png" alt="Stanislav Pushtorskiy" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Stanislav Pushtorskiy</h3>
                                <span class="team-card_pos">CCO</span>
                                <p class="team-card_ach">Sales Director, IR Director, Chief Commercial Officer, VP at National Factoring Company</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="7">
                            <img src="img/team/7.png" alt="Chris Barrett" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Chris Barrett</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">Executive director of Health International, Lead Adviser at Nestor Advisers, partner to PwC</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="8">
                            <img src="img/team/8.png" alt="Sergei Sergienko" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Sergei Sergienko</h3>
                                <span class="team-card_pos">CRYPTO ADVISOR</span>
                                <p class="team-card_ach">Co-founder and CEO at Chronobank, co-founder at Edway Group Ltd., Blockchain-enthusiast, winner of numerous awards for entrepreneurship.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="9">
                            <img src="img/team/9.png" alt="John Brehcist" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">John Brehcist</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">30 years of experience in commercial finance, founder of ROUNDWINDOW Consultancy Services, Head of Strategy at Lloyds TSB Commercial Finance Ltd.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="10">
                            <img src="img/team/10.png" alt="Vyacheslav Sokoltsov" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Vyacheslav Sokoltsov</h3>
                                <span class="team-card_pos">CAO</span>
                                <p class="team-card_ach">Serial entrepreneur, 7 years in venture investments, blockchain enthusiast, cryptoinvestor.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="11">
                            <img src="img/team/11.png" alt="Joseph Lufkin" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Joseph Lufkin</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">Co-founder of IFCL Group, Long-standing consultant to Asia’s apex development finance institution on a wide range of funds, facilities, projects, special initiatives, financial matters, evaluations, business development
                                    in Asia Development Bank</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="12">
                            <img src="img/team/12.png" alt="Marius Savin" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Marius Savin</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">20 years of experience in factoring industry, ex-member of FCI marketing committee, lecturer of Certification of Financing International Trade (COFIT) developed in partnership with Malta University and FCI.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="13">
                            <img src="img/team/13.png" alt="Ralf Bauer" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Ralf Bauer</h3>
                                <span class="team-card_pos">ADVISOR</span>
                                <p class="team-card_ach">25 years in banking and factoring business, Director of BFG Bank AG, Executive official at EUROFACTOR, Executive official at Lloyds TSB Commercial Finance, shareholder of Capitalfuss Beratungsgesellschaft mbH.</p>
                            </div>
                        </div>
                        <div class="team-modal-card" team-card="14">
                            <img src="img/team/14.png" alt="Ksenija Kraewska" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Ksenija Kraewska</h3>
                                <span class="team-card_pos">CMO</span>
                                <p class="team-card_ach">15 years of experience in the MarCOM and Corporate Affairs (Symrise AG, Tizen, Moscow Government), German Ph.D. in economic sociology, expert in Behaviour economics, marketing strategy and marketing communications, IR &
                                    International trade.
                                </p>
                            </div>
                        </div>
						<div class="team-modal-card" team-card="15">
                            <img src="img/team/15.png" alt="Mikhail Knyazev" class="team-card_img">
                            <div class="team-modal-card-right">
                                <h3 class="team-card_name">Mikhail Knyazev</h3>
                                <span class="team-card_pos">IR & BUSINESS DEVELOPMENT</span>
                                <p class="team-card_ach">20 years in the investment business Founder and Director, investment company «liberty Capital» Member of the Board of Directors of several industrial enterprises Founder, Multifunctional Financial Brokerage Centre Member, Russian Association of cryptocurrency and blockchain Crypto investor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow arrow-right"></div>
                </div>
                <div class="close"><i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- CONTENT SCRIPTS: -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin=" anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="lib/jquery.countdown.min.js"></script>
    <script src="lib/jquery.particleground.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.min.js"></script>
    <!-- PAGE SCRIPTS: -->
    <script src="js/follow.js"></script>
    <script src="js/media.js"></script>
    <script src="js/structure.js"></script>
    <script src="js/roadmap.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/toggler.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/team.js"></script>
    <script src="js/youtube.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/pulsate.js"></script>
    <script src="js/particles.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
        (function() {
            'use strict'
            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.head.appendChild(msViewportStyle)
            }
        }())
    </script>
</body>

</html>