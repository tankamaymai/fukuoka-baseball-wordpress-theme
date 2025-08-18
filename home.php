<?php get_header(); ?>

<main>
    <!-- ヒーローセクション -->
    <section class="news-hero">
        <div class="news-hero__inner">
            <div class="news-hero__content">
                <h1 class="news-hero__title">お知らせ</h1>
                <p class="news-hero__subtitle">チームの最新情報をお届けします</p>
            </div>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <div class="news-main">
        <div class="inner">
            
            <!-- カテゴリーフィルター -->
            <div class="news-categories">
                <div class="news-categories__list">
                    <a href="<?php echo esc_url(home_url('news')); ?>" class="news-categories__item <?php echo !is_category() ? 'active' : ''; ?>">
                        すべて
                    </a>
                    <?php
                    $categories = get_categories(array('hide_empty' => false));
                    foreach ($categories as $category):
                        $is_active = is_category($category->term_id) ? 'active' : '';
                    ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="news-categories__item <?php echo $is_active; ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- お知らせ一覧 -->
            <section class="news-list">
                <?php if (have_posts()): ?>
                    <div class="news-articles">
                        <?php while (have_posts()): the_post(); ?>
                            <article class="news-card">
                                <div class="news-card__header">
                                    <time class="news-card__date" datetime="<?php the_time('Y-m-d'); ?>">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>
                                    <?php
                                    $categories = get_the_category();
                                    if ($categories):
                                        $category = $categories[0];
                                    ?>
                                        <span class="news-card__category">
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="news-card__content">
                                    <h2 class="news-card__title">
                                        <a href="<?php the_permalink(); ?>" class="news-card__link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <div class="news-card__excerpt">
                                        <?php
                                        if (has_excerpt()) {
                                            the_excerpt();
                                        } else {
                                            echo wp_trim_words(get_the_content(), 40, '...');
                                        }
                                        ?>
                                    </div>
                                    
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="news-card__image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium', array('class' => 'news-card__img')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="news-card__footer">
                                    <a href="<?php the_permalink(); ?>" class="news-card__read-more">
                                        続きを読む
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- ページネーション -->
                    <div class="news-pagination">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => '&lt; 前へ',
                            'next_text' => '次へ &gt;',
                            'mid_size' => 2,
                            'end_size' => 1,
                            'type' => 'list',
                        ));
                        ?>
                    </div>

                <?php else: ?>
                    <div class="news-empty">
                        <div class="news-empty__content">
                            <h3 class="news-empty__title">お知らせがありません</h3>
                            <p class="news-empty__text">現在表示できるお知らせはありません。</p>
                        </div>
                    </div>
                <?php endif; ?>
            </section>

        </div>
    </div>
</main>

<?php get_footer(); ?>