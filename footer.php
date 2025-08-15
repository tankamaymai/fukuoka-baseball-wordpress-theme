<!-- スポンサー -->
<section class="sponsors">
    <div class="sponsors__inner">
        <h2 class="sponsors__title">スポンサー</h2>
        <div class="sponsors__grid">
            <div class="sponsors__item">
                <a href="#" class="sponsors__link" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="sponsors__image">
                </a>
            </div>
            <div class="sponsors__item">
                <a href="#" class="sponsors__link" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="sponsors__image">
                </a>
            </div>
            <div class="sponsors__item">
                <a href="#" class="sponsors__link" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo3.webp')); ?>" alt="スポンサー3" class="sponsors__image">
                </a>
            </div>
            <div class="sponsors__item">
                <a href="#" class="sponsors__link" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo4.webp')); ?>" alt="スポンサー4" class="sponsors__image">
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__inner">
        
        <div class="footer__content">
            <!-- フッターロゴ -->
            <div class="footer__logo">
                <div class="footer__logo-img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-logo.webp')); ?>" alt="福岡ベースボールクラブ">
                </div>
                <h2 class="footer__logo-text">福岡ベースボールクラブ</h2>
            </div>
            
            <!-- フッターナビゲーション -->
            <nav class="footer__nav">
                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">チーム</h3>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('about')); ?>" class="footer__nav-link">チーム紹介</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('players')); ?>" class="footer__nav-link">選手・スタッフ</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('alumni')); ?>" class="footer__nav-link">主な排出選手</a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">試合情報</h3>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('schedule')); ?>" class="footer__nav-link">試合日程</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('results')); ?>" class="footer__nav-link">試合結果</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('gallery')); ?>" class="footer__nav-link">ギャラリー</a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">お知らせ</h3>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(get_category_link(get_category_by_slug('news')->term_id)); ?>" class="footer__nav-link">ニュース</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('recruit')); ?>" class="footer__nav-link">入団募集</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('sponsors')); ?>" class="footer__nav-link">スポンサー</a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer__nav-section">
                    <h3 class="footer__nav-title">お問い合わせ</h3>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('contact')); ?>" class="footer__nav-link">お問い合わせ</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?php echo esc_url(home_url('access')); ?>" class="footer__nav-link">アクセス</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- SNSリンク -->
            <div class="footer__social">
                <h3 class="footer__social-title">フォローする</h3>
                <ul class="footer__social-list">
                    <li class="footer__social-item">
                        <a href="#" class="footer__social-link footer__social-link--instagram" aria-label="Instagram">
                            <span class="footer__social-icon">📷</span>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="#" class="footer__social-link footer__social-link--twitter" aria-label="Twitter">
                            <span class="footer__social-icon">🐦</span>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="#" class="footer__social-link footer__social-link--youtube" aria-label="YouTube">
                            <span class="footer__social-icon">📺</span>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="#" class="footer__social-link footer__social-link--facebook" aria-label="Facebook">
                            <span class="footer__social-icon">📘</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer__bottom">
            <div class="footer__copyright">
                <p>&copy; <?php echo date('Y'); ?> 福岡ベースボールクラブ All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>