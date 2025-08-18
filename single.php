<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <!-- 記事ヘッダー -->
            <section class="article-hero">
                <div class="article-hero__inner">
                    <div class="article-hero__content">
                        <div class="article-hero__meta">
                            <time class="article-hero__date" datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time('Y年m月d日'); ?>
                            </time>
                            <?php
                            $categories = get_the_category();
                            if ($categories):
                                $category = $categories[0];
                            ?>
                                <span class="article-hero__category">
                                    <?php echo esc_html($category->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <h1 class="article-hero__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <!-- 記事コンテンツ -->
            <div class="article-main">
                <div class="inner">
                    <div class="article-content">
                        
                        <!-- アイキャッチ画像 -->
                        <?php if (has_post_thumbnail()): ?>
                            <div class="article-featured-image">
                                <?php the_post_thumbnail('large', array('class' => 'article-featured-image__img')); ?>
                            </div>
                        <?php endif; ?>

                        <!-- 記事本文 -->
                        <div class="article-body">
                            <?php the_content(); ?>
                        </div>

                        <!-- 記事フッター -->
                        <div class="article-footer">
                            <div class="article-tags">
                                <?php
                                $tags = get_the_tags();
                                if ($tags):
                                ?>
                                    <div class="article-tags__list">
                                        <span class="article-tags__label">タグ:</span>
                                        <?php foreach ($tags as $tag): ?>
                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="article-tags__item">
                                                #<?php echo esc_html($tag->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- ナビゲーション -->
                        <div class="article-navigation">
                            <div class="article-navigation__inner">
                                <?php
                                $prev_post = get_previous_post();
                                $next_post = get_next_post();
                                ?>
                                
                                <?php if ($prev_post): ?>
                                    <div class="article-navigation__item prev">
                                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="article-navigation__link">
                                            <span class="article-navigation__label">&lt; 前の記事</span>
                                            <span class="article-navigation__title"><?php echo esc_html(get_the_title($prev_post->ID)); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($next_post): ?>
                                    <div class="article-navigation__item next">
                                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="article-navigation__link">
                                            <span class="article-navigation__label">次の記事 &gt;</span>
                                            <span class="article-navigation__title"><?php echo esc_html(get_the_title($next_post->ID)); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- 関連記事 -->
                        <?php
                        $categories = get_the_category();
                        if ($categories):
                            $category_ids = wp_list_pluck($categories, 'term_id');
                            $related_posts = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID()),
                                'category__in' => $category_ids,
                                'orderby' => 'rand'
                            ));
                            
                            if ($related_posts->have_posts()):
                        ?>
                            <section class="related-articles">
                                <h3 class="related-articles__title">関連記事</h3>
                                <div class="related-articles__list">
                                    <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                                        <article class="related-article-card">
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="related-article-card__image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('thumbnail', array('class' => 'related-article-card__img')); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <div class="related-article-card__content">
                                                <time class="related-article-card__date" datetime="<?php the_time('Y-m-d'); ?>">
                                                    <?php the_time('Y.m.d'); ?>
                                                </time>
                                                <h4 class="related-article-card__title">
                                                    <a href="<?php the_permalink(); ?>" class="related-article-card__link">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h4>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </section>
                        <?php 
                            endif;
                        endif; 
                        ?>

                        <!-- お知らせ一覧に戻る -->
                        <div class="article-back">
                            <a href="<?php echo esc_url(home_url('news')); ?>" class="article-back__link btn btn-outline">
                                お知らせ一覧に戻る
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>