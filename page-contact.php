<?php get_header(); ?>

<main>
    <!-- ヒーローセクション -->
    <section class="contact-hero">
        <div class="contact-hero__inner">
            <div class="contact-hero__content">
                <h1 class="contact-hero__title">お問い合わせ</h1>
                <p class="contact-hero__subtitle">福岡ベースボールクラブへのご質問・ご相談はこちら</p>
            </div>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <div class="contact-main">
        <div class="inner">
            <div class="contact-content">
                
                <!-- お問い合わせフォーム -->
                <section class="contact-section">
                    <div class="contact-section__header">
                        <h2 class="contact-section__title">お問い合わせフォーム</h2>
                        <p class="contact-section__description">
                            下記のフォームにご入力いただき、送信ボタンを押してください。<br>
                            お急ぎの場合は、お電話でのお問い合わせも承っております。
                        </p>
                    </div>
                    
                    <div class="contact-form-wrapper">
                        <?php 
                        // Contact Form 7のショートコードを表示
                        // 管理画面で作成したフォームのIDに変更してください
                        echo do_shortcode('[contact-form-7 id="87727f8" title="お問い合わせフォーム"]'); 
                        ?>
                    </div>
                </section>



            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>