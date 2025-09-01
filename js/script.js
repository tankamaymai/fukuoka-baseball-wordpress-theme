// ヒーローSwiperスライダー
document.addEventListener('DOMContentLoaded', function() {
    
    // テキストアニメーション制御関数
    function animateSlideText(slideText) {
        // 全てのクラスをリセット
        slideText.classList.remove('hidden', 'animate', 'visible');
        
        // アニメーション開始
        slideText.classList.add('animate');
        
        // アニメーション完了後に固定状態に
        setTimeout(() => {
            slideText.classList.remove('animate');
            slideText.classList.add('visible');
        }, 1800); // タイトル(1.2s) + サブタイトル遅延(0.3s) + バッファ(0.3s)
    }
    
    function hideSlideText(slideText) {
        // アニメーションをリセットして非表示に
        slideText.classList.remove('animate', 'visible');
        slideText.classList.add('hidden');
    }
    
    const heroSwiper = new Swiper('.hero-swiper', {
        // 基本設定
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1500,
        
        // 自動再生
        autoplay: {
            delay: 5250,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
            waitForTransition: false,
            stopOnLastSlide: false,
        },
        
        // ナビゲーション（無効化）
        pagination: {
            el: '.hero-swiper-pagination',
            type: 'bullets',
            clickable: false,
            dynamicBullets: false,
        },
        
        navigation: {
            nextEl: '.hero-swiper-button-next',
            prevEl: '.hero-swiper-button-prev',
            enabled: false,
        },
        
        // パララックス効果
        parallax: true,
        
        // タッチ操作のみ無効化（自動再生は維持）
        allowTouchMove: false,
        simulateTouch: false,
        touchRatio: 0,
        resistanceRatio: 0,
        
        // スライド変更時のイベント
        on: {
            init: function() {
                // 初期化時にアクティブスライドのテキストアニメーション開始
                this.slides.forEach((slide, index) => {
                    const slideText = slide.querySelector('.hero-slide__text');
                    if (slideText) {
                        if (index === this.activeIndex) {
                            // アクティブスライドにアニメーション適用
                            setTimeout(() => {
                                animateSlideText(slideText);
                            }, 500);
                        } else {
                            // 非アクティブスライドは非表示
                            hideSlideText(slideText);
                        }
                    }
                });
                
                // 自動再生を確実に開始
                this.autoplay.start();
            },
            
            slideChangeTransitionStart: function() {
                // 全てのスライドのテキストを非表示に
                this.slides.forEach(slide => {
                    const slideText = slide.querySelector('.hero-slide__text');
                    if (slideText) {
                        hideSlideText(slideText);
                    }
                });
            },
            
            slideChangeTransitionEnd: function() {
                // 新しいアクティブスライドにアニメーション適用
                const activeSlide = this.slides[this.activeIndex];
                if (activeSlide) {
                    const slideText = activeSlide.querySelector('.hero-slide__text');
                    if (slideText) {
                        setTimeout(() => {
                            animateSlideText(slideText);
                        }, 200);
                    }
                }
            }
        },
        
        // レスポンシブ設定
        breakpoints: {
            768: {
                speed: 1200,
                autoplay: {
                    delay: 4500,
                },
            },
            480: {
                speed: 1000,
                autoplay: {
                    delay: 3750,
                },
            }
        }
    });
    
    // ボタンのホバーエフェクト
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px) scale(1.02)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.transition = 'transform 0.3s ease';
        });
    });
    
    // 画像の遅延読み込み対応
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '50px'
    };
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            }
        });
    }, observerOptions);
    
    // ヒーロー画像の監視
    document.querySelectorAll('.hero-slide__bg-img[data-src]').forEach(img => {
        imageObserver.observe(img);
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

// スポンサーセクションのSwiperスライダー（無限スライダー）
document.addEventListener('DOMContentLoaded', function() {
    const sponsorSwiper = new Swiper('.sponsor-swiper', {
        // 無限ループ
        loop: true,
        
        // 自動再生設定（連続スクロール）
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        
        // スライダーの基本設定
        speed: 5000,
        slidesPerView: "auto",
        spaceBetween: 40,
        allowTouchMove: false,
        
        // レスポンシブ設定
        breakpoints: {
            1024: {
                slidesPerView: "auto",
                spaceBetween: 40,
            },
            768: {
                slidesPerView: "auto", 
                spaceBetween: 30,
            },
            480: {
                slidesPerView: "auto",
                spaceBetween: 20,
            }
        },
        
        // ホバー時に一時停止
        on: {
            init: function() {
                this.el.addEventListener('mouseenter', () => {
                    this.autoplay.stop();
                });
                this.el.addEventListener('mouseleave', () => {
                    this.autoplay.start();
                });
            }
        }
    });
});

// 固定バナーの機能
document.addEventListener('DOMContentLoaded', function() {
    const fixedBanners = document.querySelector('.js-fixed-banners');
    
    if (fixedBanners) {
        // バナーのクリック時のアニメーション
        const bannerLinks = fixedBanners.querySelectorAll('.fixed-banner');
        
        bannerLinks.forEach(banner => {
            banner.addEventListener('click', function(e) {
                // クリック時のパルスアニメーション
                this.style.transform = 'scale(0.95)';
                this.style.transition = 'transform 0.1s ease';
                
                setTimeout(() => {
                    this.style.transform = '';
                    this.style.transition = 'all 0.3s ease';
                }, 100);
            });
            
            // ホバー時の追加エフェクト
            banner.addEventListener('mouseenter', function() {
                // SVGアイコンのアニメーション（就職支援制度バナー用）
                const icon = this.querySelector('.fixed-banner__icon svg');
                if (icon) {
                    icon.style.transform = 'rotate(10deg) scale(1.1)';
                    icon.style.transition = 'transform 0.3s ease';
                }
                
                // ロゴ画像のアニメーション（田代ジムバナー用）
                const logo = this.querySelector('.fixed-banner__logo-img');
                if (logo) {
                    logo.style.transform = 'scale(1.1)';
                    logo.style.transition = 'transform 0.3s ease';
                }
            });
            
            banner.addEventListener('mouseleave', function() {
                // SVGアイコンのリセット
                const icon = this.querySelector('.fixed-banner__icon svg');
                if (icon) {
                    icon.style.transform = 'rotate(0deg) scale(1)';
                    icon.style.transition = 'transform 0.3s ease';
                }
                
                // ロゴ画像のリセット
                const logo = this.querySelector('.fixed-banner__logo-img');
                if (logo) {
                    logo.style.transform = 'scale(1)';
                    logo.style.transition = 'transform 0.3s ease';
                }
            });
        });
        
        // スクロール時の表示制御（必要に応じて）
        let lastScrollY = window.scrollY;
        let ticking = false;
        
        function updateBannerVisibility() {
            const currentScrollY = window.scrollY;
            const isMobile = window.innerWidth <= 767;
            
            // モバイルでスクロール時に一時的に隠す（オプション）
            if (isMobile) {
                if (Math.abs(currentScrollY - lastScrollY) > 50) {
                    if (currentScrollY > lastScrollY) {
                        // 下スクロール時：少し透明に
                        fixedBanners.style.opacity = '0.7';
                    } else {
                        // 上スクロール時：元に戻す
                        fixedBanners.style.opacity = '1';
                    }
                }
            }
            
            lastScrollY = currentScrollY;
            ticking = false;
        }
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateBannerVisibility);
                ticking = true;
            }
        });
        
        // リサイズ時の処理
        window.addEventListener('resize', function() {
            // リサイズ時に透明度をリセット
            fixedBanners.style.opacity = '1';
        });
    }
});

