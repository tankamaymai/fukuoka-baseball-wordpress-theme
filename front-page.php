
<?php get_header(); ?>
<main>
    <!-- ヒーローセクション -->
    <section class="hero">
        <div class="hero__bg">
            <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-bg.webp')); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-sp-bg.webp')); ?>" alt="福岡ベースボールクラブ チーム風景" class="hero__bg-img">
            </picture>
           
        </div>
        <div class="hero__scrolling-text">
            <div class="hero__text-line">Passion Makes You Unstoppable</div>
        </div>
        <div class="hero__content">
            <div class="hero-fv-img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-6.webp')); ?>" media="(min-width: 768px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-sp2.webp')); ?>"
                        alt="福岡ベースボールクラブ チーム風景" class="hero-fv-img__img">
                </picture>
            </div>
        </div>
    </section>



    <!-- 最新の試合結果 -->
    <section class="latest-result">
        <div class="inner">
            <h2 class="section-title">最新の試合結果</h2>
            <div class="result-card">
                <div class="result-card__date">
                    <span class="result-card__month">8</span>
                    <span class="result-card__day">10</span>
                </div>
                <div class="result-card__details">
                    <div class="result-card__teams">福岡ベースボールクラブ vs 熊本ライオンズ</div>
                    <div class="result-card__score">
                        <span class="result-card__score-home">7</span>
                        <span class="result-card__score-separator">-</span>
                        <span class="result-card__score-away">4</span>
                    </div>
                    <div class="result-card__result">勝利</div>
                    <div class="result-card__venue">福岡ドーム</div>
                </div>
                <div class="result-card__action">
                    <a href="#" class="btn btn-outline">試合詳細を見る</a>

                </div>
            </div>
        </div>
    </section>
        <!-- ABOUTセクション -->
        <section class="about-section" id="about">
        <div class="inner">
            <div class="about-content">
                <!-- 左側：テキストコンテンツ -->
                <div class="about-text">
                    <h2 class="about-text__title">ABOUT US</h2>
                    <h3 class="about-text__subtitle">私たちについて</h3>
                    <div class="about-text__description">
                        <p>福岡ベースボールクラブは、プロ野球選手を目指す若者たちの夢を応援し、高いレベルでの野球環境を提供しています。</p>
                        <p>私たちのチームは、技術向上だけでなく、人間性を重視した指導により、多くの選手をプロの世界へと送り出してきました。</p>
                        <p>充実した練習環境と経験豊富な指導陣のもと、一人ひとりの可能性を最大限に引き出します。</p>
                    </div>
                    <div class="about-text__button">
                        <a href="<?php echo esc_url(home_url('about')); ?>" class="btn-about">
                            MORE ABOUT US
                            <span class="btn-about__icon">→</span>
                        </a>
                    </div>
                </div>

                <!-- 右側：スライダー -->
                <div class="about-slider">
                    <div class="swiper about-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga7.webp')); ?>" alt="チーム練習風景" class="about-slide__image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga8.webp')); ?>" alt="試合風景" class="about-slide__image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga9.webp')); ?>" alt="練習施設" class="about-slide__image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga1.webp')); ?>" alt="チームメンバー" class="about-slide__image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga10.webp')); ?>" alt="チームメンバー" class="about-slide__image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-slide">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga11.webp')); ?>" alt="チームメンバー" class="about-slide__image">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 主な排出選手 -->
    <section class="alumni-section" id="alumni">
        <div class="inner">
            <div class="section-header">
                <h2 class="section-title">主な排出選手</h2>
                <p class="section-subtitle">当チームから羽ばたいたプロ選手たち</p>
            </div>
            <div class="alumni-list">
                <div class="alumni-card">
                    <div class="alumni-card__year">2023</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">山田 太郎</h3>
                        <div class="alumni-card__position">投手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">福岡ソフトバンクホークス</div>
                    </div>
                </div>
                <div class="alumni-card">
                    <div class="alumni-card__year">2022</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">佐藤 次郎</h3>
                        <div class="alumni-card__position">内野手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">読売ジャイアンツ</div>
                    </div>
                </div>
                <div class="alumni-card">
                    <div class="alumni-card__year">2021</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">田中 三郎</h3>
                        <div class="alumni-card__position">外野手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">阪神タイガース</div>
                    </div>
                </div>
                <div class="alumni-card">
                    <div class="alumni-card__year">2020</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">鈴木 四郎</h3>
                        <div class="alumni-card__position">捕手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">千葉ロッテマリーンズ</div>
                    </div>
                </div>
                <div class="alumni-card">
                    <div class="alumni-card__year">2019</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">高橋 五郎</h3>
                        <div class="alumni-card__position">投手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">広島東洋カープ</div>
                    </div>
                </div>
                <div class="alumni-card">
                    <div class="alumni-card__year">2018</div>
                    <div class="alumni-card__info">
                        <h3 class="alumni-card__name">伊藤 六郎</h3>
                        <div class="alumni-card__position">内野手</div>
                        <div class="alumni-card__destination">プロ野球選手</div>
                        <div class="alumni-card__team">西武ライオンズ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 最新ニュース -->
    <section class="news-section" id="news">
        <div class="inner">
            <h2 class="news-section__title">NEWS</h2>
            <p class="news-section__subtitle">お知らせ</p>
            
            <div class="news-content">
                <!-- PICKUPエリア（左側） -->
                <div class="news-pickup">
                    <h3 class="news-pickup__label">PICKUP</h3>
                    <?php
                    // ピックアップ記事（最新記事を1つ取得）
                    $pickup_query = new WP_Query(array(
                        'category_name' => 'news',
                        'posts_per_page' => 1,
                        'post_status' => 'publish'
                    ));
                    if ($pickup_query->have_posts()):
                        while ($pickup_query->have_posts()):
                            $pickup_query->the_post();
                            $categories = get_the_category();
                            ?>
                            <article class="news-pickup__item">
                                <?php if (!empty($categories)): ?>
                                    <span class="news-pickup__category"><?php echo esc_html($categories[0]->name); ?></span>
                                <?php endif; ?>
                                <div class="news-pickup__date"><?php echo get_the_date('Y.m.d'); ?></div>
                                <h4 class="news-pickup__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="news-pickup__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></div>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <div class="news-pickup__item">
                            <span class="news-pickup__category">NEWS</span>
                            <div class="news-pickup__date">2025.08.10</div>
                            <h4 class="news-pickup__title">竹内 大翔選手 加入のお知らせ</h4>
                            <div class="news-pickup__excerpt">この度、福岡ベースボールクラブに新たに竹内大翔選手が加入することをお知らせいたします。</div>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>

                <!-- ニュース一覧エリア（右側） -->
                <div class="news-category-area">
                    <div class="news-list">
                        <?php
                        $news_query = new WP_Query(array(
                            'category_name' => 'news',
                            'posts_per_page' => 5,
                            'post_status' => 'publish'
                        ));
                        if ($news_query->have_posts()):
                            while ($news_query->have_posts()):
                                $news_query->the_post();
                                $categories = get_the_category();
                                ?>
                                <article class="news-item">
                                    <div class="news-item__date"><?php echo get_the_date('m.d'); ?></div>
                                    <?php if (!empty($categories)): ?>
                                        <span class="news-item__category"><?php echo esc_html(strtoupper($categories[0]->slug)); ?></span>
                                    <?php endif; ?>
                                    <div class="news-item__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="news-item__arrow">→</div>
                                </article>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            ?>
                            <div class="news-empty">
                                <p>投稿をお待ちください</p>
                            </div>
                            <?php
                        endif;
                        ?>
                    </div>
                    
                    <div class="news-view-more">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="news-view-more__btn">
                            VIEW MORE
                            <span class="news-view-more__icon">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 入団募集CTA -->
    <section class="recruit-cta" id="recruit">
        <div class="inner">
            <div class="recruit-cta__content">
                <h2 class="recruit-cta__title">一緒に夢を追いかけませんか？</h2>
                <p class="recruit-cta__text">福岡ベースボールクラブでは、プロを目指す選手、チームを支えるスタッフを募集しています。</p>
           
                <div class="recruit-cta__actions">
                    <a href="<?php echo esc_url(home_url('recruit')); ?>"
                        class="btn btn-primary btn-large">お問い合わせはこちら</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SNSセクション -->
    <section class="sns-section">
        <div class="inner">
            <h2 class="section-title">Instagram</h2>
            <p class="section-subtitle">練習風景や試合の様子をお届け</p>
            
            <div class="instagram-feed">
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>