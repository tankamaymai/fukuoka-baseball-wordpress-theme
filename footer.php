<footer class="footer">
    <div class="footer__inner">
        <div class="footer__sponsors">
            <h3 class="footer__sponsors-title">スポンサー</h3>
            <div class="footer__sponsors-list">
                <div class="footer__sponsor-item">
                    <a href="https://www.fukuokabaseball.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo1.webp')); ?>" alt="スポンサー1" class="footer__sponsor-img">
                    </a>
                </div>
                <div class="footer__sponsor-item">
                    <a href="https://www.fukuokabaseball.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo2.webp')); ?>" alt="スポンサー2" class="footer__sponsor-img">
                    </a>
                </div>
                <div class="footer__sponsor-item">
                    <a href="https://www.fukuokabaseball.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo3.webp')); ?>" alt="スポンサー3" class="footer__sponsor-img">
                    </a>
                </div>
                <div class="footer__sponsor-item">
                            <a href="https://www.fukuokabaseball.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/sponser-logo4.webp')); ?>" alt="スポンサー4" class="footer__sponsor-img">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer__content">
            <div class="footer__logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/logo-white.webp')); ?>" alt="福岡ベースボールクラブ" class="footer__logo-img">
                <h2 class="footer__logo-text">福岡ベースボールクラブ</h2>
            </div>
            
            <nav class="footer__nav">
                <ul class="footer__nav-list">
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('about')); ?>" class="footer__nav-link">チーム紹介</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('players')); ?>" class="footer__nav-link">選手・スタッフ</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('game-info')); ?>" class="footer__nav-link">試合日程</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('game-info')); ?>" class="footer__nav-link">試合結果</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="footer__nav-link">ニュース</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="footer__nav-link">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="footer__bottom">
            <p class="footer__copyright">&copy; <?php echo date('Y'); ?> 福岡ベースボールクラブ All Rights Reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>