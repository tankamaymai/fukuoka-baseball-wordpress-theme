// ヒーローセクションのテキストアニメーション
document.addEventListener('DOMContentLoaded', function() {
    // GSAP Timeline for Hero Animations
    const heroTimeline = gsap.timeline();
    
    // 背景画像のズームイン効果
    heroTimeline.from('.hero__bg-img', {
        scale: 1.1,
        duration: 2,
        ease: "power2.out"
    });
    
    // メインタイトル「好きこそ無敵。」の文字ずつアニメーション
    const mainTitleText = '好きこそ無敵。';
    const mainTitleElement = document.querySelector('.js-hero-title');
    if (mainTitleElement) {
        // 文字を分割してspanで囲む
        mainTitleElement.innerHTML = mainTitleText.split('').map(char => 
            `<span class="char">${char}</span>`
        ).join('');
        
        // 文字ごとにアニメーション
        heroTimeline.from('.js-hero-title .char', {
            opacity: 0,
            y: 50,
            rotationX: -90,
            transformOrigin: "0% 50% -50px",
            duration: 0.8,
            stagger: 0.1,
            ease: "back.out(1.7)"
        }, "-=1.5");
    }
    
    // サブタイトル「福岡ベースボールクラブ」の滑らかなフェードイン
    heroTimeline.from('.js-hero-subtitle', {
        opacity: 0,
        y: 30,
        duration: 1.2,
        ease: "power2.out"
    }, "-=0.5");
    
    // ボタンの順次フェードイン
    heroTimeline.from('.js-hero-actions .btn', {
        opacity: 0,
        y: 20,
        duration: 0.8,
        stagger: 0.2,
        ease: "power2.out"
    }, "-=0.3");
    
    // ボタンのホバーエフェクト
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            gsap.to(this, {
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        btn.addEventListener('mouseleave', function() {
            gsap.to(this, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });
});

// ハンバーガーメニューのアニメーション
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.js-hamburger');
    const drawer = document.querySelector('.js-drawer');
    
    if (hamburger && drawer) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('is-active');
            drawer.classList.toggle('is-active');
        });
        
        // ドロワーの背景をクリックして閉じる
        drawer.addEventListener('click', function(e) {
            if (e.target === drawer) {
                hamburger.classList.remove('is-active');
                drawer.classList.remove('is-active');
            }
        });
    }
});

// ABOUTセクションのSwiperスライダー
document.addEventListener('DOMContentLoaded', function() {
    const aboutSwiper = new Swiper('.about-swiper', {
        // 基本設定
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: 'slide',
        fadeEffect: {
            crossFade: false
        },
        speed: 800,
        
        // レスポンシブ設定
        breakpoints: {
            768: {
                effect: 'slide',
                fadeEffect: {
                    crossFade: false
                }
            }
        },
        
        // イベント
        on: {
            slideChange: function () {
                // スライド変更時のアニメーション
                gsap.from('.swiper-slide-active .about-slide__image', {
                    scale: 1.1,
                    duration: 0.8,
                    ease: "power2.out"
                });
            }
        }
    });
});

