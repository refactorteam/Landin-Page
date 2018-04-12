<?php
//для начала опишем функцию очистки данных от лишних пробелов и тегов
function clstr($data){
 return trim(strip_tags($data));
}
//если метод обращения совпадает, то обрабатываем данные из массива $_POST
if($_SERVER['REQUEST_METHOD']=='POST'){
	$tema = "Участие в PRE-ICO Refactor.pro";
$mail=trim($_POST['mail']);
$Comments= "<center><b>Участие в PRE-ICO Refactor.pro | KO</b></center> <br/><br/><hr/><br/> E-mail: <b>".$mail." <br/><br/> <hr/> ".$Comments;
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
                                <a class="header-link" href="#">등록/들어가기</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="/FAQ">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link" href="https://medium.com/@refactor_ico">블로그</a>
                            </li>
							<!--
                            <li class="nav-item">
                                <a class="header-link" href="#">Demo MVP</a>
                            </li>
							-->
                            <li class="nav-item">
                                <a class="header-link" href="#">바운티</a>
                            </li>
                            <li class="nav-item">
                                <a class="header-link special" href="#">토큰 매입</a>
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
                            <a class="header-link" href="#idea">아이디어</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#product">생성물</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#roadmap">로드맾</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-link" href="#team">팀</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="/FAQ" class="header-button no-shadow">FAQ</a>
                        <a href="" class="login-button header-button circled shadow-hover"><i class="person"></i><span class="login-button_text">등록/들어가기</span></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/ko.png"  width="25" height="20"> КО</button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
								<a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English</a>
								<a class="dropdown-item active" href="#"><img src="img/ko.png"  width="25" height="20"> 한국어</a>
								<a class="dropdown-item" href="es.php"><img src="img/es.png"  width="25" height="20"> Español</a>
								<a class="dropdown-item" href="ru.php"><img src="img/ru.png"  width="25" height="20"> Русский</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="topper-content">
                <div class="topper-content-left">
                    <h1 class="topper-title">New asset<br>in global<br>cryptoeconomy</h1>
                    <p class="topper-sub">블록체인에 기초를 둠</p>
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
                    <h2 class="footer-section_caption">Get news on<br>developments</h2>
                    <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                        <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="이메일 입력" required>
                        <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">등록</button>
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
                            <a class="nav-link" href="#idea">아이디어</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product">생성물</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roadmap">로드맾</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">팀</a>
                        </li>
                    </ul>
                    <div class="header-button-row my-2 my-lg-0">
                        <a href="" class="header-button fill circled shadow-hover bold" id="pulseBottomButton">토큰 매입</a>
                        <a href="" class="figure-button"><i class="person"></i></a>
                        <div class="dropdown">
                            <button class="btn lang-button dropdown-toggle" type="button" id="langFloatButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/ko.png"  width="25" height="20"> KO</button>
                            <div class="dropdown-menu dropdown-menu-right lang-dropdown" aria-labelledby="langFloatButton">
                                <a class="dropdown-item" href="index.php"><img src="img/gb.png"  width="25" height="20"> English</a>
								<a class="dropdown-item active" href="ko.php"><img src="img/ko.png"  width="25" height="20"> 한국어</a>
								<a class="dropdown-item" href="es.php"><img src="img/es.png"  width="25" height="20"> Español</a>
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
                <h2 class="caption center">매출채권이란 무엇인가</h2>
                <div class="show d-flex putDown" id="tr1">
                    <div class="show-card supplier">
                        <div class="show-card-bg supplier-img"></div>
                        <span class="show-card-sub">공급자</span>
                    </div>
                    <div class="between">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">상품과 서비스</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="between-c center">매출채권</h1>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <span class="item-desc">지불 유예</span>
                                    <div class="item-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-card customer">
                        <div class="show-card-bg customer-img"></div>
                        <span class="show-card-sub">구매자</span>
                    </div>
                </div>
                <div class="show show-mobile d-flex">
                    <div class="show-mobile-left">
                        <div class="show-card supplier">
                            <div class="show-card-bg supplier-img"></div>
                            <span class="show-card-sub">공급자</span>
                        </div>
                        <div class="line line-left">
                            <div class="line-left_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">상품과 서비스</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="between">
                        <h1 class="between-c center">매출채권</h1>
                    </div>
                    <div class="show-mobile-right">
                        <div class="line line-right">
                            <div class="line-right_bg"></div>
                            <div class="item">
                                <div class="item-wrapper center">
                                    <div class="item-img"></div>
                                    <span class="item-desc">지불 유예</span>
                                </div>
                            </div>
                        </div>
                        <div class="show-card customer">
                            <div class="show-card-bg customer-img"></div>
                            <span class="show-card-sub">구매자</span>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">매출채권은 지불유예에 기초하여 발생한다. 일반적으로 공급자는 일정<br>기간에 걸친 지불유예 조건으로 상품을 출하한다. 이 기간 동안에 공급자에게는<br>공급자의 대차대조표에서  "매출채권" 항목에 반영하는 부채가 존재한다.</p>
            </article>
            <article class="idea about-article" id="idea">
                <h2 class="caption center">기본 아이디어</h2>
                <div class="idea-show show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">신흥 시장</span>
                        <div class="line">
                            <span class="line-text">매출채권</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">매매가능자산</span>
                        <span class="center-text center">전세계적<br>P2P 거래</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">글로벌<br>커뮤니티</span>
                        <div class="line">
                            <span class="line-text">투자의</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="idea-show idea-show-mobile show d-flex center" id="complex2">
                    <div class="idea-show-card debt">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg debt-img"></div>
                        </div>
                        <span class="show-card-sub">부채</span>
                        <div class="line">
                            <span class="line-text">매출채권</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                    <div class="idea-show-card idea-between">
                        <div class="idea-show-card-s idea-between-s">
                            <div class="idea-show-card-bg idea-between-img"></div>
                        </div>
                        <span class="show-card-sub idea-between-sub">매매가능자산</span>
                        <span class="center-text center">전세계적<br>P2P 거래</span>
                        <div class="idea-between_bg"></div>
                    </div>
                    <div class="idea-show-card inv">
                        <div class="idea-show-card-s">
                            <div class="idea-show-card-bg inv-img"></div>
                        </div>
                        <span class="show-card-sub">개인투자자</span>
                        <div class="line">
                            <span class="line-text">투자의</span>
                            <div class="line-bg"></div>
                        </div>
                    </div>
                </div>
                <p class="about-article_text center">re:factor는 P2P 금융 시장에 팩터링 플랫폼을 제공하고<br>매출채권 투자를 용이하게 하며 이러한 업무를 전 세계적으로 확장합니다.</p>
            </article>
        </div>
    </section>
    <section class="structure" id="product">
        <div class="container">
            <h2 class="caption center">제품의 구조와 내용</h2>
            <div class="structure-wrapper">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">채권매입이<br>가능한 공급자</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">채권매입이<br>불가능한 공급자</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">기관 투자자 및 부유한 개인 투자자</p>
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
                                <p class="keeper-text">목표 국가에서의 고전적 채권매입회사</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">위험요소 평가, 분석 및 자산 구매를 위한 표준 시장의 관점에서 고전적 채권금융업의 가능성을 이용할 수 있게 하는 해결책.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">매출채권 거래를 위한 장소</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">매출채권의 운용 및 협력을 위한 금융 기관 및 회사의 아웃소싱 용역.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">채권매입이 가능한 공급자</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">개인 P2P 투자자</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">금융 기관 - 채권자</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">금융 기관에서의 차용인</p>
                            <div class="structure-list_item__pointer"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="structure-wrapper-m">
                <div class="structure-left structure-side">
                    <ul class="structure-left_top structure-list" id="strDesc1">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">채권매입이 가능한 공급자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_top structure-list" id="strDesc3">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">기관 투자자 및 부유한 개인 투자자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">채권매입이 불가능한 공급자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                </div>
                <div class="structure-wheel">
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure1">
                            <h1 class="structure-wheel_title">COMFIN</h1>
                            <div class="keeper" data-desc="strDesc1">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">목표 국가에서의 고전적 채권매입회사</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure2">
                            <h1 class="structure-wheel_title">RTP</h1>
                            <div class="keeper" data-desc="strDesc3">
                                <h3 class="keeper-caption">RTP</h3>
                                <p class="keeper-text">매출채권 거래를 위한 장소</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-wheel-row row">
                        <div class="structure-wheel-item" id="structure3">
                            <h1 class="structure-wheel_title">CROWD<br>FACTOR</h1>
                            <div class="keeper" data-desc="strDesc2">
                                <h3 class="keeper-caption">CROWDFACTOR</h3>
                                <p class="keeper-text">위험요소 평가, 분석 및 자산 구매를 위한 표준 시장의 관점에서 고전적 채권금융업의 가능성을 이용할 수 있게 하는 해결책.</p>
                            </div>
                        </div>
                        <div class="structure-wheel-item" id="structure4">
                            <h1 class="structure-wheel_title">STRAM</h1>
                            <div class="keeper" data-desc="strDesc4">
                                <h3 class="keeper-caption">STRAM</h3>
                                <p class="keeper-text">매출채권의 운용 및 협력을 위한 금융 기관 및 회사의 아웃소싱 용역.</p>
                            </div>
                        </div>
                    </div>
                    <div class="structure-bg" id="bgStructure"></div>
                </div>
                <div class="structure-right structure-side">
                    <ul class="structure-left_bottom structure-list" id="strDesc2">
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">채권매입이 가능한 공급자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">개인 P2P 투자자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                    </ul>
                    <ul class="structure-right_bottom structure-list" id="strDesc4">
                        <li class="structure-list_item more">
                            <p class="structure-list_item__text">금융 기관 - 채권자</p>
                            <div class="structure-list_item__pointer pointing"></div>
                        </li>
                        <li class="structure-list_item">
                            <p class="structure-list_item__text">금융 기관에서의 차용인</p>
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
                        <h2 class="caption">시장을 위한 이점</h2>
                        <div class="min-left-img"></div>
                        <ul class="min-list">
                            <li class="min-desc min-list-item">다양한 세그멘트로로부터의 선진 도구를 다원구조 시스템으로 통합</li>
                            <li class="min-desc min-list-item">주주사이의 경계를 말소</li>
                            <li class="min-desc min-list-item">여러 회사를 위한 금융으로의 접근성을 간소화</li>
                            <li class="min-desc min-list-item"> re:factor 참여 국가를 위한 경제적 발전</li>
                            <li class="min-desc min-list-item">중소기업의 진흥을 위한 도구</li>
                            <li class="min-desc min-list-item">주주 회사를 위한 비용의 감축</li>
                            <li class="min-desc min-list-item">위기 관리</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="roadmap" id="roadmap">
        <div class="container">
            <h2 class="caption center">로드맵</h2>
            <div class="roadmap-wrapper">
                <div class="roadmap-top">
                    <div class="arrow arrow-left"></div>
                    <div class="roadmap-top-slider d-flex">
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/1.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">re:factor 주요 계획</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/2.svg); width: 87px; height: 64px;"></div>
                            </div>
                            <span class="roadmap-card_desc">프로젝트 팀의 구성</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/3.svg); width: 60px; height: 84px;"></div>
                            </div>
                            <span class="roadmap-card_desc">비즈니스 모델 및 청구의 개발과 법적 조언의 취득</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/4.svg); width: 102px; height: 75px; background-position: right"></div>
                            </div>
                            <span class="roadmap-card_desc">소매 대리인 및 목표 국가의 금융 기관과 예비 계약을 체결</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/5.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">re:factor 비즈니스 모델의 스트레스 테스트, 실현 구상의 기술적 구성 </span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/6.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">Whitelist ICO, MVP의 개발</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/7.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">판매 예비 라운드 - Pre-ICO</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/8.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">MVP 예고, 회사가 COMFIN 라이센스를 취득</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/9.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">판매 본 라운드 - ICO, REFT 토큰의 암호화폐시장에 진출</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/10.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">ICO 결과의 중재, RTP의 알파 테스팅 REFT 토큰의 암호화폐시장에 진출</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/11.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">비즈니스의 전개 - 목표 국가에서의 인프라스트럭처, crowdfactor의 시험</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/12.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">STRAM 테스팅</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/13.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">re:factor 플랫폼의 완전한 출시</span>
                        </div>
                        <div class="roadmap-card d-flex">
                            <div class="roadmap-card_img">
                                <div class="roadmap-card_img__symbol" style="background-image: url(img/road/14.svg); width: 72px; height: 72px;"></div>
                            </div>
                            <span class="roadmap-card_desc">인공지능 ADAM의 통합</span>
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
                        <span class="roadmap-bottom-desc">5월 17일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">6월 17일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2017년 7월 - 8월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2017년 9월-10월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2017-9">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2017년 11월-12월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-2">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2018년 1월 - 3월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-3">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">4월 18일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-5">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">5월 18일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-6">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">6월 18일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-7">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2018년 7월-8월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-10">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail  Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2018년 9월-11월</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-11">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">12월 18일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2018-12">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">1월 19일</span>
                    </div>
                    <div class="roadmap-bottom-thing d-flex" data-date="2019-1">
                        <div class="roadmap-bottom-dot">
                        </div>
                        <!-- <img src="img/team/1.png" alt="Mikhail Treyvish" class="roadmap-card_img"> -->
                        <span class="roadmap-bottom-desc">2월 19일</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <div class="caption center">우리 팀</div>
            <div class="team-top d-flex" id="team-slider">
                <div class="arrow arrow-left"></div>
                <div class="team-members">
                    <div class="team-top-card" team-card="1">
                        <img src="img/team/1.png" alt="Mikhail Treyvish" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">미하일 트레이비시</h3>
                            <span class="team-card_pos">CEO</span>
                            <p class="team-card_ach">"레이팅 모니터링 대행사 OmniGrade의 창립자 및 사주, 유럽 부흥 개발 은행의 팩터링 문제에 관한 상담원, «National Factoring Company» 이사회 의장 이사, 이사장, International Factors Group 아시아 지부장"
                            </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="2">
                        <img src="img/team/2.png" alt="Elena Trakhanova" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">옐레나 트라하노바</h3>
                            <span class="team-card_pos">CBDO</span>
                            <p class="team-card_ach">Alpha Bank, National Factoring Company, Gazprombank와 같은 팩터링을 다루는 러시아의 대표적 회사에서 14년 동안 팩터링 비즈니스 분야에서 임원으로 일했다.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="3">
                        <img src="img/team/3.png" alt="Margrith Lutschg-Emmenegger" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">마르그리트 류트치그-엠메네게르</h3>
                            <span class="team-card_pos">BUSINESS DEVELOPMENT PARTNER</span>
                            <p class="team-card_ach">Trade Finance Market 자문위원, Hili Properties Ltd 이사회 의장, FIMBank plc. 자문위원 </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="4">
                        <img src="img/team/4.png" alt="Dennis Firmansjah" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">데니스 피르만시야흐</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">아시아금융업협회 사무총장, PT 이사, Aditama Finance </p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="5">
                        <img src="img/team/5.png" alt="Andrey Otmakhov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">안드레이 오트마호프</h3>
                            <span class="team-card_pos">CTO</span>
                            <p class="team-card_ach">분야별 IT 솔루션 및 국제 시장에서의 인터넷 플랫폼의 개발 분야에서 15 이상의 경험이 있는 Maxxinet 공동창립자 및 대표이사.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="6">
                        <img src="img/team/6.png" alt="Stanislav Pushtorskiy" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">스타니슬라프 푸쉬토르스키</h3>
                            <span class="team-card_pos">CCO</span>
                            <p class="team-card_ach">National Factoring Company 판매부장. 투자관련책임자, 영업부장, 부사장</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="7">
                        <img src="img/team/7.png" alt="Chris Barrett" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">크리스 바렛트</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">General Health 전무이사, International, Nestor Advisors 선임 고문, PwC 협력사원</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="8">
                        <img src="img/team/8.png" alt="Sergei Sergienko" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">세르게이 세르기예코</h3>
                            <span class="team-card_pos">CRYPTO ADVISOR</span>
                            <p class="team-card_ach">Chronobank 창립자 및 이사, Edway Group Ltd 공동 창립자; 블롴 체인 전문가; 사업 분야에서 다수 수상을 받았음.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="9">
                        <img src="img/team/9.png" alt="John Brehcist" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">존 브레키스트</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">상업 금융 분야에서 30년 경력 보유; ROUNDWINDOW Consultancy Services 창립자; LloydsTSB Commercial Finance ltd 전략화 및 연구부장.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="10">
                        <img src="img/team/10.png" alt="Vyacheslav Sokoltsov" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">뱌체슬라프 소콜초프</h3>
                            <span class="team-card_pos">CAO</span>
                            <p class="team-card_ach">연쇄 창업가, 7 년간 벤처기업 경영, 블록체인 전문가, 가상화폐투자자</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="11">
                        <img src="img/team/11.png" alt="Joseph Lufkin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">조제프 라프킨</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">IFCL Group 창립자; Asian Development Bank에서 발전 기금 및 재무관리 대상의 기획, 조정, 운영 및 평가 자문위원; Asia Pacific의 관재인 및 회계원 Aid Programs</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="12">
                        <img src="img/team/12.png" alt="Marius Savin" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">마리우스 사빈</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">팩터링 분야에서 20 년 경력 , 말티대학 및 FCI와 협력하에 개발된 (팩터링협회계 굴지의, 마케팅 위원회 위원. 국제 거래 인증 강사 (COFIT), QUARTERBACK MALTA 협력 직원.</p>
                        </div>
                    </div>
                    <div class="team-top-card" team-card="13">
                        <img src="img/team/13.png" alt="Ralf Bauer" class="team-card_img">
                        <div class="team-top-card-right">
                            <h3 class="team-card_name">랄프 바우에르</h3>
                            <span class="team-card_pos">ADVISOR</span>
                            <p class="team-card_ach">25 년간 은행업계 및 팩터링 분야에 종사. BfG Bank AG 이사 EUROFACTOR 전무이, Lloyds TSB Commercial Finance 전무이사, Capitalfluss Beratungsgesellschaft mbH 주주.</p>
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
            <h1 class="caption center">ICO 세목</h1>
            <div class="economy-wrapper d-flex">
                <div class="economy-around">
                    <div class="economy-diagram">
                        <div class="economy-diagram-wrapper">
                            <h2 class="economy-amount economy-number center">10억</h2>
                            <p class="economy-desc center">토큰 최대발행량</p>
                        </div>
                    </div>
                    <div class="economy-description">
                        <div class="economy-left">
                            <div class="economy-thing">
                                <h2 class="economy-number">7억2000만개<span class="economy-b"></span></h2>
                                <p class="economy-desc">ICO 기간에 판매하기 위한 REFT 토큰의 최대량</p>
                                <div class="economy-round" style="opacity: 1;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">2억개<span class="economy-b"></span></h2>
                                <p class="economy-desc">팀 밸런스에서 남은 토큰량</p>
                                <div class="economy-round" style="opacity: .8;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">5천만<span class="economy-b"></span></h2>
                                <p class="economy-desc">Pre-ICO</p>
                                <div class="economy-round" style="opacity: .6;"></div>
                            </div>
                        </div>
                        <div class="economy-right">
                            <div class="economy-thing">
                                <h2 class="economy-number">1000만<span class="economy-b"></span></h2>
                                <p class="economy-desc">바운티</p>
                                <div class="economy-round" style="opacity: .4;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">1000만<span class="economy-b"></span></h2>
                                <p class="economy-desc">애드바이저</p>
                                <div class="economy-round" style="opacity: .2;"></div>
                            </div>
                            <div class="economy-thing">
                                <h2 class="economy-number">1000만<span class="economy-b"></span></h2>
                                <p class="economy-desc">동조(referral) 투자자</p>
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
                <a href="" class="header-button gradient circled center economy-button bold">토큰 구매</a>
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
                    <a href="" class="header-button circled shadow shadow-hover hovered scale fill">토큰 구매</a>
                    <p class="exept">BTC, ETH, ETC, BCH, BTG,<br>DASH, LTC를 받습니다.</p>
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
                        <h2 class="footer-section_caption">메뉴</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="/FAQ" class="footer-list_item__link">FAQ</a>
                            </li>
                            <li class="footer-list_item"><a href="https://medium.com/@refactor_ico" class="footer-list_item__link">블로그</a>
                            </li>
							<!--
                            <li class="footer-list_item"><a href="" class="footer-list_item__link">Demo MVP</a>
                            </li>
							-->
                            <li class="footer-list_item"><a href="" class="footer-list_item__link">바운티</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <div class="footer-section-division">
                            <h2 class="footer-section_caption">연락처</h2>
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
                            <h2 class="footer-section_caption">가입하세요</h2>
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
                        <h2 class="footer-section_caption">서류</h2>
                        <ul class="footer-list menu">
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/onepage_eng.pdf" class="footer-list_item__link">Lightpaper</a>
                            </li>
                            <li class="footer-list_item"><a href="http://refactor.pro/docs/wp_eng.pdf" class="footer-list_item__link">Whitepaper</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section sub">
                        <h2 class="footer-section_caption">Get news on<br>developments</h2>
                        <form method="post" action="<?= $_SERVER['REQUEST_URI'];?>" class="footer-form">
                            <input type="email" name="mail" class="footer-email d-block" id="inputEmail" placeholder="E이메일 입력" required>
                            <button type="submit" class="header-button circled shadow hovered scale fill d-block footer-button">등록</button>
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