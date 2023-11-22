<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- css各種(reset, fontawesome, オリジナル) -->
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">

    <!-- JS(CDN, ハンバーガー) -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
    
    <title>プログラミングスクール テックアイエス</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header__inner">
            <section class="header__logo-div common__sect-width">
                <div class="header__logo-img-div">
                    <h1>
                        <a href="<?= home_url();?>">
                            <img src="<?=get_template_directory_uri(); ?>/img/Logo_self_study.png" alt="ロゴ画像">
                        </a>
                    </h1>
                </div>
                <!-- PC用 -->
                <div class="header__logo-phrase-div">
                    <p>保護猫と保護主のつながりを一つでも<br>多く作り上げるためのサイトです</p>
                </div>
                <!-- PC用 -->
                <!-- SPハンバーガー -->
                <button class="header__hamburger hamburger" id="js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- SPハンバーガー -->
                
            </section>
            
            <!-- メニューボタン -->
            <nav class="header__buttons-div common__sect-width" id="js-nav">
                <ul class="header__button-list">
                    <li>
                        <a href="<?= home_url('#front-wanted');?>">
                            <i class="fa-solid fa-cat"></i><p>募集中</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('#front-event');?>">
                            <i class="fa-regular fa-calendar-days"></i><p>イベント<br>(譲渡会)</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('#front-donation');?>">
                            <i class="fa-solid fa-yen-sign"></i><p>ご寄付</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('#front-query-and-trial');?>">
                            <i class="fa-regular fa-face-smile-beam"></i><p>トライアル<br>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- メニューボタン -->
            </div>
    </header>