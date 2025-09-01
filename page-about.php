<?php get_header(); ?>

<main class="about-page">
    <!-- ヒーローセクション -->
    <section class="about-hero">
        <div class="about-hero__bg">
            <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-bg.webp')); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-fv-sp-bg.webp')); ?>" alt="福岡ベースボールクラブ チーム風景" class="about-hero__bg-img">
            </picture>
        </div>
        <div class="about-hero__content">
            <div class="inner">
                <h1 class="about-hero__title">ABOUT US</h1>
                <p class="about-hero__subtitle">チームについて</p>
            </div>
        </div>
    </section>

    <!-- チームスローガン -->
    <section class="team-slogan">
        <div class="inner">
            <div class="team-slogan__content">
                <h2 class="team-slogan__title">TEAM SLOGAN</h2>
                <div class="team-slogan__main">
                    <p class="team-slogan__text">好きこそ無敵。</p>
                    <p class="team-slogan__english">Passion Makes You Unstoppable</p>
                </div>
                <div class="team-slogan__description">
                    <p>野球への情熱こそが、どんな困難も乗り越える力となる。私たちは、野球を愛する気持ちを大切にし、その想いを武器に日々成長し続けています。</p>
                    <p>技術だけでなく、心の強さと仲間への信頼を育み、チーム一丸となって夢の実現に向かって歩み続けます。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- チームの特徴 -->
    <section class="team-features">
        <h2 class="section-title">チームの特徴</h2>
        <div class="features-grid">
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga7.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga7.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <div class="feature-card__header">
                            <h3 class="feature-card__title">まだ終われない人の、再スタートの場所</h3>
                        </div>
                        <div class="feature-card__detail">
                            <h3 class="feature-card__content-title">まだ終われない人の、再スタートの場所</h3>
                            <p class="feature-card__description">大学・社会人の枠から漏れても、情熱はまだ燃えている——その想いを受け止める受け皿が福岡ベースボールクラブです。公式野球を本気で続けたい人に、実戦機会と成長の導線を用意しています。</p>
                            <ul class="feature-card__points">
                                <li>個別の課題に向き合える練習設計で、もう一段うまくなる</li>
                                <li>試合出場のチャンスが多く、実戦で伸びる</li>
                                <li>「まだいける」を成果に変えるサポート体制</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga8.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga11.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga8.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga11.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <div class="feature-card__header">
                            <h3 class="feature-card__title">上のカテゴリーへ——次のステージを狙える環境</h3>
                        </div>
                        <div class="feature-card__detail">
                            <h3 class="feature-card__content-title">上のカテゴリーへ——次のステージを狙える環境</h3>
                            <p class="feature-card__description">技術・戦術・メンタルを総合的に鍛え、独立リーグ／プロ／社会人野球など上位カテゴリーでプレーする選手も多数。次を目指すための道筋があります。</p>
                            <ul class="feature-card__points">
                                <li>成長指標が見えるトレーニングで実力を可視化</li>
                                <li>対外試合や発信でチャンスに届く露出を確保</li>
                                <li>挑戦と継続を支えるチーム文化</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga9.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga12.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga9.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga12.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <div class="feature-card__header">
                            <h3 class="feature-card__title">スポンサー『たしろジム』通い放題</h3>
                        </div>
                        <div class="feature-card__detail">
                            <h3 class="feature-card__content-title">スポンサー『たしろジム』通い放題</h3>
                            <p class="feature-card__description">協賛いただく「たしろジム」さんの設備をいつでも利用可能。練習日以外も体づくりを継続でき、パフォーマンスの土台を強化できます。</p>
                            <ul class="feature-card__points">
                                <li>シーズンを通してコンディションを安定化</li>
                                <li>競技に必要な基礎筋力と可動域を強化</li>
                                <li>自主トレの質と量を両立</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga10.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga13.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga10.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga13.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <div class="feature-card__header">
                            <h3 class="feature-card__title">就職支援制度あり——競技とキャリアの両立</h3>
                        </div>
                        <div class="feature-card__detail">
                            <h3 class="feature-card__content-title">就職支援制度あり——競技とキャリアの両立</h3>
                            <p class="feature-card__description">スポンサー企業様の就職支援制度を利用でき、就職活動を有利に進められます。野球も仕事も本気で続けたい人に、現実的な選択肢を。</p>
                            <ul class="feature-card__points">
                                <li>競技継続を見据えた働き方の提案が可能</li>
                                <li>地域企業とのつながりで安心してキャリア形成</li>
                                <li>"プレーも仕事も"を実現するサポート</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- 監督挨拶 -->
    <section class="manager-message">
        <div class="inner">
            <div class="manager-message__content">
                <div class="manager-message__text">
                    <h2 class="section-title">監督挨拶</h2>
                    <div class="manager-message__info">
                        <h3 class="manager-message__name">山本 太郎</h3>
                        <p class="manager-message__title">監督</p>
                        <p class="manager-message__career">元プロ野球選手（福岡ソフトバンクホークス）<br>指導歴15年</p>
                    </div>
                    <div class="manager-message__body">
                        <p>福岡ベースボールクラブの監督を務めさせていただいております、山本太郎です。</p>
                        <p>私たち福岡ベースボールクラブは、現在、学生から社会人まで幅広い年齢層の選手たちが在籍しております。</p>
                        <p>2025年に福岡オーシャンズ9と合併し、選手数も増えチームに活気がでてきました。</p>
                        <p>近年は独立リーグ合格者も増えております。</p>
                        <p>好きこそ無敵の共通理念の元、日々全国大会出場を目指して研鑽しております。</p>

                    </div>
                </div>
                <div class="manager-message__image">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga5.webp')); ?>" alt="山本太郎監督" class="manager-message__img">
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

</main>

<?php get_footer(); ?>