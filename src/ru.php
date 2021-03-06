<?php
//для начала опишем функцию очистки данных от лишних пробелов и тегов
function clstr($data){
 return trim(strip_tags($data));
}
//если метод обращения совпадает, то обрабатываем данные из массива $_POST
if($_SERVER['REQUEST_METHOD']=='POST'){
	$tema = "Участие в PRE-ICO Refactor.pro";
$mail=trim($_POST['mail']);
$Comments= "<center><b>Участие в PRE-ICO Refactor.pro | RU</b></center> <br/><br/><hr/><br/> E-mail: <b>".$mail." <br/><br/> <hr/> ".$Comments;
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
    <link rel="icon" href="">
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
                                <a class="header-link" href="#">Вход</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="/FAQ">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="https://medium.com/@refactor_ico">Блог</a>
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
                                <a class="header-link special" href="#">Купить токены</a>
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
                            <a class="header-link" href="#idea">Идея</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#product">Платформа</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#roadmap">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#team">Команда</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="/FAQ" class="header-button no-shadow">FAQ</a>
                        <a href="" class="login-button header-button circled shadow-hover"><i class="person"></i><span class="login-button_text">Регистрация/Вход</span></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/ru.png"  width="25" height="20"> RU</button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
                                <a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English</a>
								<a class="dropdown-item" href="ko.php"><img src="img/ko.png"  width="25" height="20"> 한국어</a>
								<a class="dropdown-item" href="es.php"><img src="img/es.png"  width="25" height="20"> Español</a>
                                <a class="dropdown-item active" href="#"><img src="img/ru.png"  width="25" height="20"> Русский</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="topper-content">
                <div class="topper-content-left">
                    <h1 class="topper-title">New asset<br>in global<br>crypto economy</h1>
                    <p class="topper-sub">основано на технологии блокчейн</p>
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
                    <h2 class="footer-section_caption">Хочешь получать<br>новости о проекте?</h2>
                    <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                        <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="Введите e-mail" required>
                        <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">Хочу!</button>
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
                            <a class="nav-link" href="#idea">Идея</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product">Платформа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roadmap">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Команда</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="" class="header-button fill circled shadow-hover bold" id="pulseBottomButton">Купить токены!</a>
                        <a href="" class="figure-button"><i class="person"></i></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/ru.png"  width="25" height="20"> RU</button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
                                <a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English</a>
								<a class="dropdown-item" href="ko.php"><img src="img/ko.png"  width="25" height="20"> 한국어</a>
								<a class="dropdown-item" href="es.php"><img src="img/es.png"  width="25" height="20"> Español</a>
                                <a class="dropdown-item active" href="#"><img src="img/ru.png"  width="25" height="20"> Русский</a>
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
                <h2 class="caption center">Что такое дебиторская задолженность</h2>
                <div class="show d-flex putDown" id="tr1">
                    <div class="show-card supplier">
                        <div class="show-card-bg supplier-img"></div>
                        <span class="show-card-sub">Поставщик</span>
                    </div>
                    <div class="between">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Товар или услуга</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="between-c center">Дебиторская<br>задолженность</h1>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <span class="item-desc">Отложенный платёж</span>
                                    <div class="item-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-card customer">
                        <div class="show-card-bg customer-img"></div>
                        <span class="show-card-sub">Покупатель</span>
                    </div>
                </div>
                <div class="show show-mobile d-flex">
                    <div class="show-mobile-left">
                        <div class="show-card supplier">
                            <div class="show-card-bg supplier-img"></div>
                            <span class="show-card-sub">Поставщик</span>
                        </div>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Товар</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="between">
                        <h1 class="between-c center">Дебиторская<br>задол<br>женность</h1>
                    </div>
                    <div class="show-mobile-right">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">Отложенный платёж</span>
                                </div>
                            </div>
                        </div>
                        <div class="show-card customer">
                            <div class="show-card-bg customer-img"></div>
                            <span class="show-card-sub">Покупатель</span>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">Поставщики часто отгружают товар на кредитных условиях, чтобы у покупателя было достаточно времени использовать или перепродать товар. Как только товар отгружен, но деньги за него не перечислены, долг покупателя в балансе поставщика отображается, в разделе дебиторская задолженность.</p>
            </article>
            <article class="idea about-article" id="idea">
                <h2 class="caption center">Ключевая идея</h2>
                <div class="idea-show show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">Быстрорастущие<br>рынки</span>
                        <div class="line">
                            <span class="line-text">Дебиторская<br>задолженность</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">Торгуемый<br>актив</span>
                        <span class="center-text center">Глобальная<br>торговая<br>платформа</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">Глобальное<br>сообщество</span>
                        <div class="line">
                            <span class="line-text">Инвестиции</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="idea-show idea-show-mobile show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">Долг</span>
                        <div class="line">
                            <span class="line-text">Дебиторская<br>задолженность</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">Торгуемый<br>актив</span>
                        <span class="center-text center">Глобальная<br>торговая<br>платформа</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">Частный<br>инвестор</span>
                        <div class="line">
                            <span class="line-text">Инвестиции</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">re:factor предоставляет финансовому рынку торговую платформу для упрощения<br>инвестирования в дебиторскую задолдженность и масштабирования процесса на весь мир</p>
            </article>
        </div>
    </section>
    <section class="structure" id="product">
        <div class="container">
            <h2 class="caption center">Платформа re:factor</h2>
            <div class="structure-wrapper">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Факторабельные
                                <br>поставщики</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Небакторабельные
                                <br>поставщики</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Институциональные и богатые частые инвесторы</p>
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
                                <p class="keeper-text">Классическая факторинговая компания ведущая деятельность в целевых странах.</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">Глобальная площадка по торговле дебиторской задолженностью для регулярных поставщиков ДЗ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">Биржа дебиторской задолженности</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">Аутсорсинговые услуги для компаний и финансовых институтов по поддержке и управлению дебиторской задолженности.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Факторабельные поставщики</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Частные инвесторы</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Финанасовые
                                <br>институты – кредиторы</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Заёмщики
                                <br>у финансовых
                                <br>институтов</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="structure-wrapper-m">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Факторабельные
                                <br>поставщики</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Институциональные и 
                                <br>богатые частные
                                <br>инвесторы</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Нефакторабельные
                                <br>поставщики</p>
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
                                <p class="keeper-text">Классическая факторинговая компания ведущая деятельность в целевых странах.</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">Биржа дебиторской задолженности</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">Глобальная площадка по торговле дебиторской задолженностью для регулярных поставщиков ДЗ.</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">Аутсорсинговые услуги для компаний и финансовых институтов по поддержке и управлению дебиторской задолженности.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">«Factorable»
                                <br>Suppliers</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Private Р2Р
                                <br>investors</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">Financial
                                <br>Institutions - Lenders</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">Borrowers
                                <br>from Financial
                                <br>Institutions</p>
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
                            <li class="min-desc min-list-item">Превращает дебиторскую задолженность в ликвидный актив</li>
                            <li class="min-desc min-list-item">Стирает границы между пользователями платформы</li>
                            <li class="min-desc min-list-item">Предоставляет доступ к финансированию для МСБ в быстроразвивающихся странах</li>
                            <li class="min-desc min-list-item">Развивает экономику стран присутствия</li>
                            <li class="min-desc min-list-item">Делает процесс инвестирования безопасным</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="roadmap" id="roadmap">
        <div class="container">
            <h2 class="caption center">Roadmap</h2>
            <div class="roadmap-wrapper">
                <div class="roadmap-top">
                    <div class="arrow arrow-left"></div>
                    <div class="roadmap-top-slider d-flex">
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/1.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Основание re:factor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/2.svg); width: 87px; height: 64px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Набор команды</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/3.svg); width: 60px; height: 84px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Развитие бизнес-модели, получение legal expertise</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/4.svg); width: 102px; height: 75px; background-position: right"></div>
                            </div>
                            <span class="roadmap-card_desc">Подписание предварительных договоров с ритейлерами и финансовыми институтами в целевых странах</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/5.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Стресс-тестирование бизнес-модели, развитие технической концепции</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/6.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Whitepaper ICO, разработка MVP</span>
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
                            <span class="roadmap-card_desc">Анонс MVP, получение лицензий для COMFIN</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/9.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">ICO, листинг REFT на биржах</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/10.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Post-ICO арбитраж, RTP альфа-тестирование, листинг REFT на биржах</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/11.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Развитие бизнес-инфраструктуры в целевых странах, тестирование CrowdFactor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/12.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Тестирование STRAM</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/13.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Полный запуск платформы re:factor</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/14.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Внедрение искусственного интеллекта ADAM</span>
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
                        <span class="roadmap-bottom-desc">Май, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Июн, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Июл, 2017 - Авг, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Сен, 2017 - Окт, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Ноя, 2017 - Дек, 2017</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-2">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Янв, 2018 - Мар, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-3">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Апр, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Май, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-6">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Июн, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Июл, 2018 - Авг, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-10">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail  Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Сен, 2018 - Ноя, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-11">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Дек, 2018</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-12">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Янв, 2019</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2019-1">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">Фев, 2019</span>
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
                            <p class="team-card_ach">Founder and President of Omnigrade rating monitoring agency, Factoring consultant to EBRD, CEO at National Factoring Company, board of directors member, board of directors head, Head of Asian department at International Factors
                                Group
                            </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="2">
                        <img src="img/team/2.png" alt="Elena Trakhanova" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Elena Trakhanova</h3>
                            <span class="team-card_pos">CBDO</span>
                            <p class="team-card_ach">14 years of experience in factoring business, top manager at the number of leading Russian factoring companies such as Alfa bank, National Factoring Company, Gazprombank.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="3">
                        <img src="img/team/3.png" alt="Margrith Lutschg-Emmenegger" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Margrith Lutschg-Emmenegger</h3>
                            <span class="team-card_pos">BUSINESS DEVELOPMENT PARTNER</span>
                            <p class="team-card_ach">Adviser to Trade Finance Market, head of board at Hill Properties Ltd., Adviser to FIMBank Plc.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="4">
                        <img src="img/team/4.png" alt="Dennis Firmansjah" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Dennis Firmansjah</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">General secretary at Asian Financial Services Association (AFSA), Board member at PT. Aditama Finance</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="5">
                        <img src="img/team/5.png" alt="Andrey Otmakhov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Andrey Otmakhov</h3>
                            <span class="team-card_pos">CTO</span>
                            <p class="team-card_ach">Co-founder and CEO at Maxxinet, 15 years of experience in creating IT platforms.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="6">
                        <img src="img/team/6.png" alt="Stanislav Pushtorskiy" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Stanislav Pushtorskiy</h3>
                            <span class="team-card_pos">CCO</span>
                            <p class="team-card_ach">Sales Director, IR Director, Chief Commercial Officer, VP at National Factoring Company</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="7">
                        <img src="img/team/7.png" alt="Chris Barrett" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Chris Barrett</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">Executive director of Health International, Lead Adviser at Nestor Advisers, partner to PwC</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="8">
                        <img src="img/team/8.png" alt="Sergei Sergienko" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Sergei Sergienko</h3>
                            <span class="team-card_pos">CRYPTO ADVISOR</span>
                            <p class="team-card_ach">Co-founder and CEO at Chronobank, co-founder at Edway Group Ltd., Blockchain-enthusiast, winner of numerous awards for entrepreneurship.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="9">
                        <img src="img/team/9.png" alt="John Brehcist" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">John Brehcist</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">30 years of experience in commercial finance, founder of ROUNDWINDOW Consultancy Services, Head of Strategy at Lloyds TSB Commercial Finance Ltd.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="10">
                        <img src="img/team/10.png" alt="Vyacheslav Sokoltsov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Vyacheslav Sokoltsov</h3>
                            <span class="team-card_pos">CAO</span>
                            <p class="team-card_ach">Serial entrepreneur, 7 years in venture investments, blockchain enthusiast, cryptoinvestor.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="11">
                        <img src="img/team/11.png" alt="Joseph Lufkin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Joseph Lufkin</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">Co-founder of IFCL Group, Long-standing consultant to Asia’s apex development finance institution on a wide range of funds, facilities, projects, special initiatives, financial matters, evaluations, business development in
                                Asia Development Bank</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="12">
                        <img src="img/team/12.png" alt="Marius Savin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Marius Savin</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">20 years of experience in factoring industry, ex-member of FCI marketing committee, lecturer of Certification of Financing International Trade (COFIT) developed in partnership with Malta University and FCI.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="13">
                        <img src="img/team/13.png" alt="Ralf Bauer" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Ralf Bauer</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">25 years in banking and factoring business, Director of BFG Bank AG, Executive official at EUROFACTOR, Executive official at Lloyds TSB Commercial Finance, shareholder of Capitalfuss Beratungsgesellschaft mbH.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="14">
                        <img src="img/team/14.png" alt="Ksenija Kraewska" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">Ksenija Kraewska</h3>
                            <span class="team-card_pos">CMO</span>
                            <p class="team-card_ach">15 years of experience in the MarCOM and Corporate Affairs (Symrise AG, Tizen, Moscow Government), German Ph.D. in economic sociology, expert in Behaviour economics, marketing strategy and marketing communications, IR & International
                                trade.
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
                </div>
            </div>
        </div>
    </section>
    <section class="economy" id="economy">
        <div class="container">
            <h1 class="caption center">Детали ICO</h1>
            <div class="economy-wrapper d-flex">
                <div class="economy-around">
                    <div class="economy-diagram">
                        <div class="economy-diagram-wrapper">
                            <h2 class="economy-amount economy-number center">1 billion</h2>
                            <p class="economy-desc center">Объём эмиссии<br>токенов</p>
                        </div>
                    </div>
                    <div class="economy-description">
                        <div class="economy-left">
                            <div class="economy-thing">
                                <h2 class="economy-number">720<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Объём токенов для ICO</p>
                                <div class="economy-round" style="opacity: 1;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">200<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Объём токенов для команды</p>
                                <div class="economy-round" style="opacity: .8;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">50<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Pre-ICO</p>
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
                                <p class="economy-desc">Эдвайзеры</p>
                                <div class="economy-round" style="opacity: .2;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">10<span class="economy-b">mln</span></h2>
                                <p class="economy-desc">Реферальна программа</p>
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
                <a href="" class="header-button gradient circled center economy-button bold">Купить токены</a>
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
                    <p class="start">Token Sale starts in</p>
                    <h1 class="topper-clock">20:18:21</h1>
                    <a href="" class="header-button circled shadow shadow-hover hovered scale fill">Купить токены</a>
                    <p class="exept">Принимаются BTC, ETH, ETC,<br>BCH, BTG, DASH, LTC</p>
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
                        <h2 class="footer-section_caption">Меню</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="/FAQ" class="footer-list_item__link">FAQ</a>
                            </li>
                            <li class="footer-list_item"><a href="https://medium.com/@refactor_ico" class="footer-list_item__link">Блог</a>
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
                            <h2 class="footer-section_caption">Контакты</h2>
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
                            <h2 class="footer-section_caption">Присоединяйся</h2>
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
                        <h2 class="footer-section_caption">Документы</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/onepage_eng.pdf" class="footer-list_item__link">Lightpaper</a>
                            </li>
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/wp_eng.pdf" class="footer-list_item__link">Whitepaper</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section sub">
                        <h2 class="footer-section_caption">Хочешь получать<br>новости о проекте?</h2>
                        <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                            <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="Введите email" required>
                            <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">Хочу!</button>
                        </form>
                    </div>
                </div>
                <div class="footer-bottom d-flex">
                    <div class="footer-bottom_logo">
                        <h1 class="footer-bottom_logo__text">re:factor</h1>
                    </div>
                    <div class="footer-bottom_copy">
                        <p class="footer-bottom_copy__p">©re:factor financial group, 2018. All rights reserved.
                            <br>This website uses cookies. The information acquired helps to display personalized ads and build up marketing statistics. By continuing to browse the site you agree to our terms of cookies.</p>
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