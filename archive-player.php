<?php get_header(); ?>

<main>
    <!-- ヒーローセクション -->
    <section class="players-hero">
        <div class="players-hero__inner">
            <div class="players-hero__content">
                <h1 class="players-hero__title">選手・スタッフ紹介</h1>
            </div>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <div class="players-main">
        <div class="inner">
            
            <!-- スタッフ募集セクション -->
            <section class="players-section" id="staff-recruit">
                <div class="players-section__header">
                    <h2 class="players-section__title">スタッフ募集</h2>
                    <p class="players-section__description">チームを支える仲間を募集しています</p>
                </div>
                
                <div class="staff-recruit">
                    <div class="staff-recruit__content">
                        <h3 class="staff-recruit__title">一緒にチームを作り上げませんか？</h3>
                        <p class="staff-recruit__text">
                            福岡ベースボールクラブでは、選手のサポートやチーム運営に携わっていただけるスタッフを募集しています。<br>
                            野球経験者・未経験者問わず、熱意のある方をお待ちしています。
                        </p>
                        <div class="staff-recruit__positions">
                            <div class="position-item">
                                <h4 class="position-item__title">コーチングスタッフ</h4>
                                <p class="position-item__desc">技術指導、戦術立案</p>
                            </div>
                            <div class="position-item">
                                <h4 class="position-item__title">トレーナー</h4>
                                <p class="position-item__desc">体調管理、ケガ予防</p>
                            </div>
                            <div class="position-item">
                                <h4 class="position-item__title">マネージャー</h4>
                                <p class="position-item__desc">チーム運営、事務作業</p>
                            </div>
                        </div>
                        <div class="staff-recruit__action">
                            <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-primary btn-large">
                                お問い合わせはこちら
                            </a>
                        </div>
                    </div>
                </div>
            </section>

<?php 
            // ポジションの固定順序を定義
            $position_order = array('首脳陣', '投手', '捕手', '内野手', '外野手');
            
            foreach ($position_order as $position_name):
                // 各ポジションの term を取得
                $position_term = get_term_by('name', $position_name, 'position');
                
                if (!$position_term) continue;
                
                // 各ポジションの選手を取得
                $players = new WP_Query(array(
                    'post_type' => 'player',
                    'posts_per_page' => -1,
                    'meta_key' => 'player_number',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'position',
                            'field' => 'term_id',
                            'terms' => $position_term->term_id,
                        ),
                    ),
                ));

                if ($players->have_posts()): ?>
                    <!-- <?php echo esc_html($position_term->name); ?>セクション -->
                    <section class="players-section" id="<?php echo esc_attr($position_term->slug); ?>">
                        <div class="players-section__header">
                            <h2 class="players-section__title"><?php echo esc_html($position_term->name); ?></h2>
                            </div>
                            
                            <div class="players-grid">
                                <?php while ($players->have_posts()): $players->the_post(); ?>
                                    <div class="player-card">
                                        <div class="player-card__image">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium', array('class' => 'player-card__img', 'alt' => get_the_title())); ?>
                                            <?php else: ?>
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/default-player.webp')); ?>" alt="<?php the_title(); ?>" class="player-card__img">
                                            <?php endif; ?>
                                            
                                            <?php $player_number = get_post_meta(get_the_ID(), 'player_number', true); ?>
                                            <?php if ($player_number): ?>
                                                <div class="player-card__number"><?php echo esc_html($player_number); ?></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="player-card__info">
                                            <h3 class="player-card__name"><?php the_title(); ?></h3>
                                            <div class="player-card__details">
                                                <?php 
                                                $birth_date = get_post_meta(get_the_ID(), 'player_birth_date', true);
                                                $throwing_batting = get_post_meta(get_the_ID(), 'player_throwing_batting', true);
                                                $career = get_post_meta(get_the_ID(), 'player_career', true);
                                                ?>
                                                
                                                <?php if ($birth_date): ?>
                                                    <div class="player-detail">
                                                        <span class="player-detail__label">生年月日</span>
                                                        <span class="player-detail__value"><?php echo esc_html(date('Y.n.j', strtotime($birth_date))); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if ($throwing_batting): ?>
                                                    <div class="player-detail">
                                                        <span class="player-detail__label">投打</span>
                                                        <span class="player-detail__value"><?php echo esc_html($throwing_batting); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if ($career): ?>
                                                    <div class="player-detail">
                                                        <span class="player-detail__label">球歴</span>
                                                        <span class="player-detail__value"><?php echo esc_html($career); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </section>
                <?php endif;
                wp_reset_postdata();
            endforeach;
            ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>