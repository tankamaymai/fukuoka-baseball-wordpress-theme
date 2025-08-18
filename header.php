<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3 url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Autour+One&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sawarabi+Mincho&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="header__inner">
            <!-- ロゴ -->
            <div class="header__logo">
                <a href="<?php echo esc_url(home_url("")); ?>" class="header__logo-link">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/fukuoka-b-logo.webp")); ?>" alt="福岡ベースボールクラブ" class="header__logo-img">
                    <span class="header__logo-text">福岡ベースボールクラブ</span>
                </a>
            </div>
            
            <!-- デスクトップメニュー -->
            <div class="header__wrapper">
                <nav class="header__nav md3-none">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <a href="<?php echo esc_url(home_url("about")); ?>" class="header__nav-link">チームについて</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="<?php echo esc_url(home_url("game-info")); ?>" class="header__nav-link">試合情報</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="<?php echo esc_url(home_url("players")); ?>" class="header__nav-link">選手紹介</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="<?php echo esc_url(home_url("contact")); ?>" class="header__nav-link">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
                
                <!-- お問い合わせボタン -->
                <div class="header__cta">
                    <a href="<?php echo esc_url(home_url("contact")); ?>" class="header__contact-btn btn btn-primary md3-none">
                        お問い合わせ
                    </a>
                </div>
            </div>
            
            <!-- ハンバーガーメニュー -->
            <div class="hamburger js-hamburger md3-show">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </div>
        </div>

        <!-- モバイルドロワーメニュー -->
        <div class="drawer-menu js-drawer">
            <div class="drawer-menu__inner">
                <nav class="drawer-menu__nav">
                    <ul class="drawer-menu__list">
                        <li class="drawer-menu__item">
                            <a href="<?php echo esc_url(home_url("about")); ?>" class="drawer-menu__link">チームについて</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="<?php echo esc_url(home_url("game-info")); ?>" class="drawer-menu__link">試合情報</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="<?php echo esc_url(home_url("players")); ?>" class="drawer-menu__link">選手紹介</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="<?php echo esc_url(home_url("contact")); ?>" class="drawer-menu__link">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
                
                <!-- モバイル用お問い合わせボタン -->
                <div class="drawer-menu__cta">
                    <a href="<?php echo esc_url(home_url("contact")); ?>" class="drawer-menu__contact-btn btn btn-primary">
                        お問い合わせ
                    </a>
                </div>
            </div>
        </div>
    </header>