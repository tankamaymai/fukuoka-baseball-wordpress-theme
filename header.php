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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="header__inner">
            <div class="header-logo">
                <a href="<?php echo esc_url(home_url("")); ?>" class="logo__link">
                    <h1 class="header__logo"><img
                            src="<?php echo esc_url(get_theme_file_uri("/images/logo-b 1.svg")); ?>" alt="ヘッダーロゴ"
                            class="header__logo"></h1>
                </a>
            </div>
            <div class="header__wrapper">
                <nav class="header__nav md3-none">
                    <ul class="header__lists">
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url("about")); ?>" class="header__link ">About us</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url("service")); ?>" class="header__link">Service</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(get_category_link(get_category_by_slug('works')->term_id)); ?>"
                                class="header__link">Works</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(get_category_link(get_category_by_slug('news')->term_id)); ?>"
                                class="header__link">News</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url("recruit")); ?>" class="header__link">Recruit</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__wrapper-contact">
                    <a href="<?php echo esc_url(home_url("contact")); ?>"
                        class="header__link--contact btn md3-none">Contact</a>
                </div>
            </div>
        </div>

        <!--ハンバーガー-->
        <div class="hamburger js-hamburger md3-show">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!--ドロワー-->
        <div class="drawer-menu js-drawer">
            <div class="drawer-menu__inner">
                <ul class="drawer-menu__lists">
                    <li class="drawer-menu__item">
                        <a href="<?php echo esc_url(home_url("about")); ?>" class="drawer-menu__link">About us</a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo esc_url(home_url("service")); ?>" class="drawer-menu__link">Service</a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo esc_url(get_category_link(get_category_by_slug('works')->term_id)); ?>"
                            class="drawer-menu__link">Works</a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo esc_url(get_category_link(get_category_by_slug('news')->term_id)); ?>"
                            class="drawer-menu__link">News</a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo esc_url(home_url("recruit")); ?>" class="drawer-menu__link">Recruit</a>
                    </li>
                </ul>
                <div class="drawer-menu__contact-item">
                    <a href="<?php echo esc_url(home_url("contact")); ?>"
                        class="drawer-menu__link drawer-menu__link--contact">Contact</a>
                </div>
            </div>
        </div>
    </header>