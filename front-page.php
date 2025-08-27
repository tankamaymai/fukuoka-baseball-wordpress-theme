
<?php get_header(); ?>
<main>
    <!-- ヒーローセクション -->
    <section class="hero">
        <!-- 上品な装飾要素 -->
        <div class="hero__decorations">
            <div class="hero__decoration hero__decoration--top-left"></div>
            <div class="hero__decoration hero__decoration--top-right"></div>
            <div class="hero__decoration hero__decoration--bottom-left"></div>
            <div class="hero__decoration hero__decoration--bottom-right"></div>
        </div>
        
  
        
        <!-- Swiper Hero Slider -->
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- スライド1 -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slide__bg">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga1.webp')); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga1.webp')); ?>" alt="福岡ベースボールクラブ チーム風景" class="hero-slide__bg-img">
                            </picture>
                        </div>
                        <div class="hero-slide__content">
                            <div class="hero-slide__text">

                                <h2 class="hero-slide__title">FUKUOKA BASEBALL CLUB</h2>
                                <p class="hero-slide__description">Love is Invincible</p>
                                <div class="hero-slide__accent-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- スライド2 -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slide__bg">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga2.webp')); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga2.webp')); ?>" alt="福岡ベースボールクラブ 練習風景" class="hero-slide__bg-img">
                            </picture>
                        </div>
                        <div class="hero-slide__content">
                            <div class="hero-slide__text">
                              
                                <h2 class="hero-slide__title">FUKUOKA BASEBALL CLUB</h2>
                                <p class="hero-slide__description">Love is Invincible</p>
                                <div class="hero-slide__accent-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- スライド3 -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slide__bg">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" alt="福岡ベースボールクラブ 試合風景" class="hero-slide__bg-img">
                            </picture>
                        </div>
                        <div class="hero-slide__content">
                            <div class="hero-slide__text">
                               
                                <h2 class="hero-slide__title">FUKUOKA BASEBALL CLUB</h2>
                                <p class="hero-slide__description">Love is Invincible</p>
                                <div class="hero-slide__accent-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- スライド4 -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slide__bg">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga4.webp')); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga4.webp')); ?>" alt="福岡ベースボールクラブ 練習施設" class="hero-slide__bg-img">
                            </picture>
                        </div>
                        <div class="hero-slide__content">
                            <div class="hero-slide__text">
                                <div class="hero-slide__accent-line"></div>
                                <h2 class="hero-slide__title">FUKUOKA BASEBALL CLUB</h2>
                                <p class="hero-slide__description">Love is Invincible</p>
                                <div class="hero-slide__accent-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- スライド5 -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slide__bg">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga5.webp')); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga5.webp')); ?>" alt="福岡ベースボールクラブ チームメンバー" class="hero-slide__bg-img">
                            </picture>
                        </div>
                        <div class="hero-slide__content">
                            <div class="hero-slide__text">
                               
                                <h2 class="hero-slide__title">FUKUOKA BASEBALL CLUB</h2>
                                <p class="hero-slide__description">Love is Invincible</p>
                                <div class="hero-slide__accent-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ナビゲーション -->
            <div class="hero-swiper-pagination"></div>
            <div class="hero-swiper-button-prev"></div>
            <div class="hero-swiper-button-next"></div>
        </div>
    </section>



    <!-- 最新の試合結果 -->
    <section class="latest-result">
        <div class="inner">
            <h2 class="section-title">最新の試合結果</h2>
            <?php
            // 最新の試合結果を1つ取得
            $latest_result_query = new WP_Query(array(
                'post_type' => 'game_result',
                'posts_per_page' => 1,
                'meta_key' => 'game_date',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'post_status' => 'publish'
            ));
            
            if ($latest_result_query->have_posts()):
                while ($latest_result_query->have_posts()):
                    $latest_result_query->the_post();
                    
                    $game_date = get_post_meta(get_the_ID(), 'game_date', true);
                    $game_type = get_post_meta(get_the_ID(), 'game_type', true);
                    $opponent = get_post_meta(get_the_ID(), 'opponent', true);
                    $our_score = get_post_meta(get_the_ID(), 'our_score', true);
                    $opponent_score = get_post_meta(get_the_ID(), 'opponent_score', true);
                    $game_result = get_post_meta(get_the_ID(), 'game_result', true);
                    $game_location = get_post_meta(get_the_ID(), 'game_location', true);
                    
                    $date_obj = DateTime::createFromFormat('Y-m-d', $game_date);
                    ?>
                    <div class="result-card">
                        <div class="result-card__date">
                            <span class="result-card__month"><?php echo $date_obj ? $date_obj->format('n') : ''; ?></span>
                            <span class="result-card__day"><?php echo $date_obj ? $date_obj->format('j') : ''; ?></span>
                        </div>
                        <div class="result-card__details">
                            <?php if ($game_type): ?>
                                <div class="result-card__type"><?php echo esc_html($game_type); ?></div>
                            <?php endif; ?>
                            <div class="result-card__teams">福岡ベースボールクラブ vs <?php echo esc_html($opponent ?: '対戦相手'); ?></div>
                            <div class="result-card__score">
                                <span class="result-card__score-home"><?php echo esc_html($our_score ?: '0'); ?></span>
                                <span class="result-card__score-separator">-</span>
                                <span class="result-card__score-away"><?php echo esc_html($opponent_score ?: '0'); ?></span>
                            </div>
                            <div class="result-card__result"><?php echo esc_html($game_result ?: '未確定'); ?></div>
                            <div class="result-card__venue"><?php echo esc_html($game_location ?: '会場未定'); ?></div>
                        </div>
                        <div class="result-card__action">
                            <a href="<?php echo esc_url(home_url('game-info')); ?>" class="btn btn-outline">試合詳細を見る</a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <div class="result-card">
                    <div class="result-card__date">
                        <span class="result-card__month">-</span>
                        <span class="result-card__day">-</span>
                    </div>
                    <div class="result-card__details">
                        <div class="result-card__teams">試合結果をお待ちください</div>
                        <div class="result-card__score">
                            <span class="result-card__score-home">-</span>
                            <span class="result-card__score-separator">-</span>
                            <span class="result-card__score-away">-</span>
                        </div>
                        <div class="result-card__result">-</div>
                        <div class="result-card__venue">-</div>
                    </div>
                    <div class="result-card__action">
                        <a href="<?php echo esc_url(home_url('game-info')); ?>" class="btn btn-outline">試合情報を見る</a>
                    </div>
                </div>
                <?php
            endif;
            ?>
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
                <?php
                // 排出選手データを取得
                $alumni_query = new WP_Query(array(
                    'post_type' => 'alumni_player',
                    'posts_per_page' => -1,
                    'meta_key' => '_alumni_display_order',
                    'orderby' => array(
                        'meta_value_num' => 'ASC',
                        'meta_value' => 'ASC',
                        'date' => 'DESC'
                    ),
                    'post_status' => 'publish'
                ));
                
                if ($alumni_query->have_posts()):
                    while ($alumni_query->have_posts()):
                        $alumni_query->the_post();
                        
                        // カスタムフィールドから情報を取得
                        $year = get_post_meta(get_the_ID(), '_alumni_year', true);
                        $position = get_post_meta(get_the_ID(), '_alumni_position', true);
                        $destination = get_post_meta(get_the_ID(), '_alumni_destination', true);
                        $team = get_post_meta(get_the_ID(), '_alumni_team', true);
                        ?>
                        <div class="alumni-card">
                            <div class="alumni-card__year"><?php echo esc_html($year ?: '----'); ?></div>
                            <div class="alumni-card__info">
                                <h3 class="alumni-card__name"><?php the_title(); ?></h3>
                                <?php if ($position): ?>
                                    <div class="alumni-card__position"><?php echo esc_html($position); ?></div>
                                <?php endif; ?>
                                <?php if ($destination): ?>
                                    <div class="alumni-card__destination"><?php echo esc_html($destination); ?></div>
                                <?php endif; ?>
                                <?php if ($team): ?>
                                    <div class="alumni-card__team"><?php echo esc_html($team); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    // データがない場合のメッセージ
                    ?>
                    <div class="alumni-empty">
                        <p>現在、排出選手の情報はありません。</p>
                        <?php if (current_user_can('manage_options')): ?>
                            <p><a href="<?php echo admin_url('post-new.php?post_type=alumni_player'); ?>" target="_blank">管理画面から排出選手を追加する →</a></p>
                        <?php endif; ?>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    
    <!-- スポンサーセクション -->
    <section class="sponsor-section" id="sponsors">
        <div class="sponsor-section__inner">
            <div class="sponsor-slider">
                <div class="swiper sponsor-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo3.webp')); ?>" alt="スポンサー3" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo4.webp')); ?>" alt="スポンサー4" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo3.webp')); ?>" alt="スポンサー3" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo4.webp')); ?>" alt="スポンサー4" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo3.webp')); ?>" alt="スポンサー3" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo4.webp')); ?>" alt="スポンサー4" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsor-item__img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsor-item__img">
                            </div>
                        </div>
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
                        'post_type' => 'post',
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
                                <div class="news-pickup__excerpt"><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 20, '...'); ?></div>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <div class="news-pickup__item">
                            <span class="news-pickup__category">NEWS</span>
                            <div class="news-pickup__date">2024.08.10</div>
                            <h4 class="news-pickup__title">お知らせをお待ちください</h4>
                            <div class="news-pickup__excerpt">現在表示するお知らせはありません。新しい投稿をお待ちください。</div>
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
                            'post_type' => 'post',
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
                                        <span class="news-item__category"><?php echo esc_html(strtoupper($categories[0]->name)); ?></span>
                                    <?php else: ?>
                                        <span class="news-item__category">NEWS</span>
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