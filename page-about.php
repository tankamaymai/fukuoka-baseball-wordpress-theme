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
        <div class="inner">
            <h2 class="section-title">チームの特徴</h2>
            <div class="features-grid">
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga7.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga3.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga7.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">まだ終われない人の、再スタートの場所</h3>
                        <p class="feature-card__description">大学・社会人の枠から漏れても、情熱はまだ燃えている——その想いを受け止める受け皿が福岡ベースボールクラブです。公式野球を本気で続けたい人に、実戦機会と成長の導線を用意しています。</p>
                        <ul class="feature-card__points">
                            <li>個別の課題に向き合える練習設計で、もう一段うまくなる</li>
                            <li>試合出場のチャンスが多く、実戦で伸びる</li>
                            <li>「まだいける」を成果に変えるサポート体制</li>
                        </ul>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga8.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga11.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga8.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga11.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">上のカテゴリーへ——次のステージを狙える環境</h3>
                        <p class="feature-card__description">技術・戦術・メンタルを総合的に鍛え、独立リーグ／プロ／社会人野球など上位カテゴリーでプレーする選手も多数。次を目指すための道筋があります。</p>
                        <ul class="feature-card__points">
                            <li>成長指標が見えるトレーニングで実力を可視化</li>
                            <li>対外試合や発信でチャンスに届く露出を確保</li>
                            <li>挑戦と継続を支えるチーム文化</li>
                        </ul>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga9.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga12.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga9.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga12.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">スポンサー『たしろジム』通い放題</h3>
                        <p class="feature-card__description">協賛いただく「たしろジム」さんの設備をいつでも利用可能。練習日以外も体づくりを継続でき、パフォーマンスの土台を強化できます。</p>
                        <ul class="feature-card__points">
                            <li>シーズンを通してコンディションを安定化</li>
                            <li>競技に必要な基礎筋力と可動域を強化</li>
                            <li>自主トレの質と量を両立</li>
                        </ul>
                    </div>
                </div>
                <div class="feature-card" data-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga10.webp')); ?>" data-hover-bg="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga13.webp')); ?>">
                    <div class="feature-card__bg">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga10.webp')); ?>" alt="" class="feature-card__bg-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/fukuoka-b-ga13.webp')); ?>" alt="" class="feature-card__bg-img feature-card__bg-img--hover">
                    </div>
                    <div class="feature-card__overlay"></div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">就職支援制度あり——競技とキャリアの両立</h3>
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
                        <p>私たちのチームは「好きこそ無敵。」をスローガンに掲げ、野球への情熱を持った選手たちが日々練習に取り組んでいます。技術の向上はもちろんのこと、人間性を重視した指導を心がけており、野球を通じて人として成長できる環境作りに努めています。</p>
                        <p>プロ野球選手として培った経験と、これまで15年間の指導経験を活かし、選手一人ひとりの可能性を最大限に引き出すことを使命として取り組んでおります。</p>
                        <p>夢に向かって努力する若者たちを、チーム一丸となってサポートしてまいります。今後とも福岡ベースボールクラブへの応援をよろしくお願いいたします。</p>
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

</main>

<?php get_footer(); ?>