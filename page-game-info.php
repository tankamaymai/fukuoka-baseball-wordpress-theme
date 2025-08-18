<?php get_header(); ?>

<main>
    <!-- ヒーローセクション -->
    <section class="game-info-hero">
        <div class="game-info-hero__inner">
            <div class="game-info-hero__content">
                <h1 class="game-info-hero__title">試合情報</h1>
                <p class="game-info-hero__subtitle">試合結果と日程をご覧いただけます</p>
            </div>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <div class="game-info-main">
        <div class="inner">
            
            <!-- タブナビゲーション -->
            <div class="game-info-tabs">
                <div class="game-info-tabs__nav">
                    <button class="game-info-tabs__button active" data-tab="results">試合結果</button>
                    <button class="game-info-tabs__button" data-tab="schedule">試合日程</button>
                </div>
            </div>

            <!-- 試合結果タブ -->
            <div class="game-info-tab-content active" id="results-tab">
                <section class="game-results">
                    <div class="game-results__header">
                        <h2 class="game-results__title">最新の試合結果</h2>
                    </div>
                    
                    <div class="game-results-list">
                        <?php
                        $results_query = new WP_Query(array(
                            'post_type' => 'game_result',
                            'posts_per_page' => 10,
                            'meta_key' => 'game_date',
                            'orderby' => 'meta_value',
                            'order' => 'DESC',
                        ));

                        if ($results_query->have_posts()):
                            while ($results_query->have_posts()): $results_query->the_post();
                                $game_date = get_post_meta(get_the_ID(), 'game_date', true);
                                $opponent = get_post_meta(get_the_ID(), 'opponent', true);
                                $our_score = get_post_meta(get_the_ID(), 'our_score', true);
                                $opponent_score = get_post_meta(get_the_ID(), 'opponent_score', true);
                                $game_result = get_post_meta(get_the_ID(), 'game_result', true);
                                $game_location = get_post_meta(get_the_ID(), 'game_location', true);
                        ?>
                            <div class="game-result-card">
                                <div class="game-result-card__header">
                                    <div class="game-result-card__date">
                                        <?php echo $game_date ? date('Y年m月d日', strtotime($game_date)) : '日付未設定'; ?>
                                    </div>
                                    <?php if ($game_location): ?>
                                        <div class="game-result-card__location"><?php echo esc_html($game_location); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="game-result-card__match">
                                    <div class="game-result-card__teams">
                                        <div class="game-result-card__team our-team">
                                            <span class="team-name">福岡ベースボールクラブ</span>
                                            <span class="team-score"><?php echo $our_score !== '' ? esc_html($our_score) : '-'; ?></span>
                                        </div>
                                        <div class="game-result-card__vs">VS</div>
                                        <div class="game-result-card__team opponent-team">
                                            <span class="team-name"><?php echo $opponent ? esc_html($opponent) : '対戦相手未設定'; ?></span>
                                            <span class="team-score"><?php echo $opponent_score !== '' ? esc_html($opponent_score) : '-'; ?></span>
                                        </div>
                                    </div>
                                    
                                    <?php if ($game_result): ?>
                                        <div class="game-result-card__result <?php echo esc_attr(strtolower($game_result)); ?>">
                                            <?php echo esc_html($game_result); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if (get_the_content()): ?>
                                    <div class="game-result-card__content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                        ?>
                            <div class="no-results">
                                <p>まだ試合結果がありません。</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            </div>

            <!-- 試合日程タブ -->
            <div class="game-info-tab-content" id="schedule-tab">
                <section class="game-schedule">
                    <div class="game-schedule__header">
                        <h2 class="game-schedule__title">試合日程</h2>
                    </div>
                    
                    <div class="game-schedule-calendar">
                        <div class="calendar-container">
                            <div class="calendar-header">
                                <button class="calendar-nav-btn prev" id="prevMonth">&lt;</button>
                                <h3 id="calendarTitle"></h3>
                                <button class="calendar-nav-btn next" id="nextMonth">&gt;</button>
                            </div>
                            
                            <div class="calendar-grid">
                                <div class="calendar-weekdays">
                                    <div class="weekday">日</div>
                                    <div class="weekday">月</div>
                                    <div class="weekday">火</div>
                                    <div class="weekday">水</div>
                                    <div class="weekday">木</div>
                                    <div class="weekday">金</div>
                                    <div class="weekday">土</div>
                                </div>
                                
                                <div class="calendar-days" id="calendarDays">
                                    <!-- カレンダーの日付はJavaScriptで動的に生成 -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- 今後の試合リスト -->
                        <div class="upcoming-games">
                            <h3>今後の試合予定</h3>
                            <div class="upcoming-games-list">
                                <?php
                                $upcoming_query = new WP_Query(array(
                                    'post_type' => 'game_schedule',
                                    'posts_per_page' => 5,
                                    'meta_key' => 'schedule_date',
                                    'orderby' => 'meta_value',
                                    'order' => 'ASC',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'schedule_date',
                                            'value' => date('Y-m-d'),
                                            'compare' => '>='
                                        )
                                    )
                                ));
                                
                                if ($upcoming_query->have_posts()):
                                    while ($upcoming_query->have_posts()): $upcoming_query->the_post();
                                        $schedule_date = get_post_meta(get_the_ID(), 'schedule_date', true);
                                        $schedule_time = get_post_meta(get_the_ID(), 'schedule_time', true);
                                        $schedule_opponent = get_post_meta(get_the_ID(), 'schedule_opponent', true);
                                        $schedule_location = get_post_meta(get_the_ID(), 'schedule_location', true);
                                ?>
                                    <div class="upcoming-game-item">
                                        <div class="upcoming-game-date">
                                            <?php echo $schedule_date ? date('m月d日', strtotime($schedule_date)) : '日付未設定'; ?>
                                            <?php if ($schedule_time): ?>
                                                <span class="time"><?php echo date('H:i', strtotime($schedule_time)); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="upcoming-game-details">
                                            <div class="upcoming-game-teams">
                                                福岡ベースボールクラブ vs <?php echo $schedule_opponent ? esc_html($schedule_opponent) : '対戦相手未設定'; ?>
                                            </div>
                                            <?php if ($schedule_location): ?>
                                                <div class="upcoming-game-location"><?php echo esc_html($schedule_location); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                ?>
                                    <div class="no-upcoming-games">
                                        <p>今後の試合予定はありません。</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // タブ機能
    const tabButtons = document.querySelectorAll('.game-info-tabs__button');
    const tabContents = document.querySelectorAll('.game-info-tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // すべてのタブボタンとコンテンツから active クラスを削除
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // クリックされたタブボタンとコンテンツに active クラスを追加
            this.classList.add('active');
            document.getElementById(targetTab + '-tab').classList.add('active');
            
            // 試合日程タブが開かれたときにカレンダーを初期化
            if (targetTab === 'schedule') {
                initCalendar();
            }
        });
    });

    // カレンダー機能
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth();
    let scheduleData = {};

    // 試合日程データを取得
    async function fetchScheduleData() {
        try {
            const response = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=get_schedule_data'
            });
            const data = await response.json();
            if (data.success) {
                scheduleData = data.data;
            }
        } catch (error) {
            console.error('Failed to fetch schedule data:', error);
        }
    }

    function initCalendar() {
        fetchScheduleData().then(() => {
            generateCalendar(currentYear, currentMonth);
        });
    }

    function generateCalendar(year, month) {
        const calendarTitle = document.getElementById('calendarTitle');
        const calendarDays = document.getElementById('calendarDays');
        
        if (!calendarTitle || !calendarDays) return;
        
        // タイトル更新
        calendarTitle.textContent = `${year}年${month + 1}月`;
        
        // カレンダー日付をクリア
        calendarDays.innerHTML = '';
        
        // 月の最初の日と最後の日を取得
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const firstDayOfWeek = firstDay.getDay();
        const daysInMonth = lastDay.getDate();
        
        // 前月の空白を追加
        for (let i = 0; i < firstDayOfWeek; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'calendar-day empty';
            calendarDays.appendChild(emptyDay);
        }
        
        // 日付を追加
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement('div');
            const currentDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const hasGame = scheduleData[currentDate];
            const isToday = currentDate === new Date().toISOString().split('T')[0];
            
            let className = 'calendar-day';
            if (hasGame) className += ' has-game';
            if (isToday) className += ' today';
            
            dayElement.className = className;
            dayElement.setAttribute('data-date', currentDate);
            
            // 日付番号
            const dayNumber = document.createElement('span');
            dayNumber.className = 'day-number';
            dayNumber.textContent = day;
            dayElement.appendChild(dayNumber);
            
            // 試合情報
            if (hasGame) {
                hasGame.forEach(game => {
                    const gameInfo = document.createElement('div');
                    gameInfo.className = 'game-info';
                    
                    const opponent = document.createElement('div');
                    opponent.className = 'game-opponent';
                    opponent.textContent = game.opponent;
                    gameInfo.appendChild(opponent);
                    
                    if (game.time) {
                        const time = document.createElement('div');
                        time.className = 'game-time';
                        time.textContent = game.time;
                        gameInfo.appendChild(time);
                    }
                    
                    dayElement.appendChild(gameInfo);
                });
            }
            
            calendarDays.appendChild(dayElement);
        }
    }

    // 前月・翌月ボタンのイベントリスナー
    document.getElementById('prevMonth').addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    document.getElementById('nextMonth').addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });

    // 初期表示
    if (document.querySelector('.game-info-tabs__button[data-tab="schedule"]').classList.contains('active')) {
        initCalendar();
    }
});
</script>

<?php get_footer(); ?>