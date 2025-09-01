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
                            <a href="<?php echo esc_url(home_url("news")); ?>" class="header__nav-link">お知らせ</a>
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
                            <a href="<?php echo esc_url(home_url("news")); ?>" class="drawer-menu__link">お知らせ</a>
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

    <!-- 固定バナー -->
    <div class="fixed-banners js-fixed-banners">
        <div class="fixed-banners__container">
            <a href="<?php echo esc_url(home_url("gym")); ?>" class="fixed-banner fixed-banner--gym">
                <div class="fixed-banner__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/gem-logo.webp")); ?>" alt="TASHIRO CLUB gym" class="fixed-banner__logo-img">
                </div>
                <div class="fixed-banner__content">
                    <div class="fixed-banner__title">TASHIRO CLUB gym</div>
                    <div class="fixed-banner__subtitle">詳細はこちら</div>
                </div>
            </a>
            
            <a href="<?php echo esc_url(home_url("career-support")); ?>" class="fixed-banner fixed-banner--career">
                <div class="fixed-banner__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" fill="currentColor"/>
                        <path d="M19 15L20.09 18.26L24 19L20.09 19.74L19 23L17.91 19.74L14 19L17.91 18.26L19 15Z" fill="currentColor"/>
                        <path d="M5 15L6.09 18.26L10 19L6.09 19.74L5 23L3.91 19.74L0 19L3.91 18.26L5 15Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="fixed-banner__content">
                    <div class="fixed-banner__title">就職支援制度</div>
                    <div class="fixed-banner__subtitle">詳細はこちら</div>
                </div>
            </a>
        </div>
    </div>