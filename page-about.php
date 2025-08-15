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
                <div class="feature-card">
                    <div class="feature-card__icon">⚾</div>
                    <h3 class="feature-card__title">高いレベルでの技術指導</h3>
                    <p class="feature-card__description">元プロ野球選手を含む経験豊富な指導陣が、個々のレベルに合わせた丁寧な技術指導を行います。基礎から応用まで、総合的な野球技術の向上を図ります。</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">🏆</div>
                    <h3 class="feature-card__title">豊富な試合経験</h3>
                    <p class="feature-card__description">年間100試合以上の試合を通じて、実戦経験を積み重ねます。九州リーグをはじめ、全国大会への参加機会も豊富に用意しています。</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">💪</div>
                    <h3 class="feature-card__title">充実したトレーニング環境</h3>
                    <p class="feature-card__description">専用グラウンド、室内練習場、最新のトレーニング機器を完備。天候に左右されることなく、年間を通じて質の高い練習を行うことができます。</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">🎯</div>
                    <h3 class="feature-card__title">プロ志向のサポート</h3>
                    <p class="feature-card__description">プロ野球球団とのパイプを活かし、スカウト陣への推薦やトライアウト情報の提供など、プロ入りを目指す選手を全面的にサポートします。</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">🤝</div>
                    <h3 class="feature-card__title">人間性重視の教育</h3>
                    <p class="feature-card__description">野球技術だけでなく、礼儀や協調性、責任感などの人間性を重視した指導を行い、社会人として通用する人材の育成に力を入れています。</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">📚</div>
                    <h3 class="feature-card__title">進路サポート</h3>
                    <p class="feature-card__description">プロ野球だけでなく、大学進学や一般企業への就職など、多様な進路選択をサポート。選手一人ひとりの将来を見据えたキャリア形成を支援します。</p>
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