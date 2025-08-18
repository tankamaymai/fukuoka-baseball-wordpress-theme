<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.js', "", "1.0.1");
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', "", "1.0.1", true );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), 'false', 'all');
    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', "", "1.0.1", true );
    wp_enqueue_script( 'ScrollTrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', "", "1.0.1", true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// 選手カスタム投稿タイプを登録
function create_player_post_type() {
    register_post_type('player',
        array(
            'labels' => array(
                'name' => '選手',
                'singular_name' => '選手',
                'add_new' => '新しい選手を追加',
                'add_new_item' => '新しい選手を追加',
                'edit_item' => '選手を編集',
                'new_item' => '新しい選手',
                'view_item' => '選手を表示',
                'search_items' => '選手を検索',
                'not_found' => '選手が見つかりませんでした',
                'not_found_in_trash' => 'ゴミ箱に選手はありません'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'players'),
        )
    );
}
add_action('init', 'create_player_post_type');

// ポジション用カスタムタクソノミーを登録
function create_position_taxonomy() {
    register_taxonomy(
        'position',
        'player',
        array(
            'labels' => array(
                'name' => 'ポジション',
                'singular_name' => 'ポジション',
                'add_new_item' => '新しいポジションを追加',
                'edit_item' => 'ポジションを編集',
                'view_item' => 'ポジションを表示',
                'search_items' => 'ポジションを検索',
                'not_found' => 'ポジションが見つかりませんでした'
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'position'),
        )
    );
}
add_action('init', 'create_position_taxonomy');

// 選手用カスタムフィールドを追加
function add_player_meta_boxes() {
    add_meta_box(
        'player_details',
        '選手詳細情報',
        'player_details_callback',
        'player',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_player_meta_boxes');

// カスタムフィールドの表示
function player_details_callback($post) {
    wp_nonce_field('save_player_details', 'player_details_nonce');
    
    $player_number = get_post_meta($post->ID, 'player_number', true);
    $player_birth_date = get_post_meta($post->ID, 'player_birth_date', true);
    $player_throwing_batting = get_post_meta($post->ID, 'player_throwing_batting', true);
    $player_career = get_post_meta($post->ID, 'player_career', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="player_number">背番号</label></th>';
    echo '<td><input type="number" id="player_number" name="player_number" value="' . esc_attr($player_number) . '" min="1" max="99" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="player_birth_date">生年月日</label></th>';
    echo '<td><input type="date" id="player_birth_date" name="player_birth_date" value="' . esc_attr($player_birth_date) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="player_throwing_batting">投打</label></th>';
    echo '<td>';
    echo '<select id="player_throwing_batting" name="player_throwing_batting">';
    echo '<option value="">選択してください</option>';
    echo '<option value="右投・右打"' . selected($player_throwing_batting, '右投・右打', false) . '>右投・右打</option>';
    echo '<option value="右投・左打"' . selected($player_throwing_batting, '右投・左打', false) . '>右投・左打</option>';
    echo '<option value="左投・右打"' . selected($player_throwing_batting, '左投・右打', false) . '>左投・右打</option>';
    echo '<option value="左投・左打"' . selected($player_throwing_batting, '左投・左打', false) . '>左投・左打</option>';
    echo '<option value="右投・両打"' . selected($player_throwing_batting, '右投・両打', false) . '>右投・両打</option>';
    echo '<option value="左投・両打"' . selected($player_throwing_batting, '左投・両打', false) . '>左投・両打</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="player_career">球歴</label></th>';
    echo '<td><textarea id="player_career" name="player_career" rows="3" cols="50">' . esc_textarea($player_career) . '</textarea></td>';
    echo '</tr>';
    echo '</table>';
}

// カスタムフィールドの保存
function save_player_details($post_id) {
    if (!isset($_POST['player_details_nonce']) || !wp_verify_nonce($_POST['player_details_nonce'], 'save_player_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['player_number'])) {
        update_post_meta($post_id, 'player_number', sanitize_text_field($_POST['player_number']));
    }

    if (isset($_POST['player_birth_date'])) {
        update_post_meta($post_id, 'player_birth_date', sanitize_text_field($_POST['player_birth_date']));
    }

    if (isset($_POST['player_throwing_batting'])) {
        update_post_meta($post_id, 'player_throwing_batting', sanitize_text_field($_POST['player_throwing_batting']));
    }

    if (isset($_POST['player_career'])) {
        update_post_meta($post_id, 'player_career', sanitize_textarea_field($_POST['player_career']));
    }
}
add_action('save_post', 'save_player_details');

// 管理画面での選手一覧にカスタムカラムを追加
function add_player_admin_columns($columns) {
    $new_columns = array();
    $new_columns['title'] = $columns['title'];
    $new_columns['player_number'] = '背番号';
    $new_columns['position'] = 'ポジション';
    $new_columns['player_throwing_batting'] = '投打';
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter('manage_player_posts_columns', 'add_player_admin_columns');

// カスタムカラムにデータを表示
function show_player_admin_columns($column, $post_id) {
    switch ($column) {
        case 'player_number':
            echo get_post_meta($post_id, 'player_number', true);
            break;
        case 'position':
            $terms = get_the_terms($post_id, 'position');
            if ($terms && !is_wp_error($terms)) {
                $position_names = wp_list_pluck($terms, 'name');
                echo implode(', ', $position_names);
            } else {
                echo '未設定';
            }
            break;
        case 'player_throwing_batting':
            echo get_post_meta($post_id, 'player_throwing_batting', true);
            break;
    }
}
add_action('manage_player_posts_custom_column', 'show_player_admin_columns', 10, 2);

// 管理画面での選手一覧を背番号順でソート
function player_admin_posts_orderby($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->get('post_type') == 'player') {
        $query->set('meta_key', 'player_number');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'player_admin_posts_orderby');

// 試合結果カスタム投稿タイプを登録
function create_game_result_post_type() {
    register_post_type('game_result',
        array(
            'labels' => array(
                'name' => '試合結果',
                'singular_name' => '試合結果',
                'add_new' => '新しい試合結果を追加',
                'add_new_item' => '新しい試合結果を追加',
                'edit_item' => '試合結果を編集',
                'new_item' => '新しい試合結果',
                'view_item' => '試合結果を表示',
                'search_items' => '試合結果を検索',
                'not_found' => '試合結果が見つかりませんでした',
                'not_found_in_trash' => 'ゴミ箱に試合結果はありません'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-awards',
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'game-results'),
        )
    );
}
add_action('init', 'create_game_result_post_type');

// 試合日程カスタム投稿タイプを登録
function create_game_schedule_post_type() {
    register_post_type('game_schedule',
        array(
            'labels' => array(
                'name' => '試合日程',
                'singular_name' => '試合日程',
                'add_new' => '新しい試合日程を追加',
                'add_new_item' => '新しい試合日程を追加',
                'edit_item' => '試合日程を編集',
                'new_item' => '新しい試合日程',
                'view_item' => '試合日程を表示',
                'search_items' => '試合日程を検索',
                'not_found' => '試合日程が見つかりませんでした',
                'not_found_in_trash' => 'ゴミ箱に試合日程はありません'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'game-schedule'),
        )
    );
}
add_action('init', 'create_game_schedule_post_type');

// 試合結果用カスタムフィールドを追加
function add_game_result_meta_boxes() {
    add_meta_box(
        'game_result_details',
        '試合詳細情報',
        'game_result_details_callback',
        'game_result',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_game_result_meta_boxes');

// 試合結果カスタムフィールドの表示
function game_result_details_callback($post) {
    wp_nonce_field('save_game_result_details', 'game_result_details_nonce');
    
    $game_date = get_post_meta($post->ID, 'game_date', true);
    $opponent = get_post_meta($post->ID, 'opponent', true);
    $our_score = get_post_meta($post->ID, 'our_score', true);
    $opponent_score = get_post_meta($post->ID, 'opponent_score', true);
    $game_result = get_post_meta($post->ID, 'game_result', true);
    $game_location = get_post_meta($post->ID, 'game_location', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="game_date">試合日</label></th>';
    echo '<td><input type="date" id="game_date" name="game_date" value="' . esc_attr($game_date) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="opponent">対戦相手</label></th>';
    echo '<td><input type="text" id="opponent" name="opponent" value="' . esc_attr($opponent) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="our_score">我々の得点</label></th>';
    echo '<td><input type="number" id="our_score" name="our_score" value="' . esc_attr($our_score) . '" min="0" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="opponent_score">相手の得点</label></th>';
    echo '<td><input type="number" id="opponent_score" name="opponent_score" value="' . esc_attr($opponent_score) . '" min="0" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="game_result">結果</label></th>';
    echo '<td>';
    echo '<select id="game_result" name="game_result">';
    echo '<option value="">選択してください</option>';
    echo '<option value="勝利"' . selected($game_result, '勝利', false) . '>勝利</option>';
    echo '<option value="敗北"' . selected($game_result, '敗北', false) . '>敗北</option>';
    echo '<option value="引き分け"' . selected($game_result, '引き分け', false) . '>引き分け</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="game_location">試合会場</label></th>';
    echo '<td><input type="text" id="game_location" name="game_location" value="' . esc_attr($game_location) . '" size="50" /></td>';
    echo '</tr>';
    echo '</table>';
}

// 試合結果カスタムフィールドの保存
function save_game_result_details($post_id) {
    if (!isset($_POST['game_result_details_nonce']) || !wp_verify_nonce($_POST['game_result_details_nonce'], 'save_game_result_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('game_date', 'opponent', 'our_score', 'opponent_score', 'game_result', 'game_location');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_game_result_details');

// 試合日程用カスタムフィールドを追加
function add_game_schedule_meta_boxes() {
    add_meta_box(
        'game_schedule_details',
        '試合日程詳細情報',
        'game_schedule_details_callback',
        'game_schedule',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_game_schedule_meta_boxes');

// 試合日程カスタムフィールドの表示
function game_schedule_details_callback($post) {
    wp_nonce_field('save_game_schedule_details', 'game_schedule_details_nonce');
    
    $schedule_date = get_post_meta($post->ID, 'schedule_date', true);
    $schedule_time = get_post_meta($post->ID, 'schedule_time', true);
    $schedule_opponent = get_post_meta($post->ID, 'schedule_opponent', true);
    $schedule_location = get_post_meta($post->ID, 'schedule_location', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="schedule_date">試合日</label></th>';
    echo '<td><input type="date" id="schedule_date" name="schedule_date" value="' . esc_attr($schedule_date) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="schedule_time">試合時間</label></th>';
    echo '<td><input type="time" id="schedule_time" name="schedule_time" value="' . esc_attr($schedule_time) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="schedule_opponent">対戦相手</label></th>';
    echo '<td><input type="text" id="schedule_opponent" name="schedule_opponent" value="' . esc_attr($schedule_opponent) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="schedule_location">試合会場</label></th>';
    echo '<td><input type="text" id="schedule_location" name="schedule_location" value="' . esc_attr($schedule_location) . '" size="50" /></td>';
    echo '</tr>';
    echo '</table>';
}

// 試合日程カスタムフィールドの保存
function save_game_schedule_details($post_id) {
    if (!isset($_POST['game_schedule_details_nonce']) || !wp_verify_nonce($_POST['game_schedule_details_nonce'], 'save_game_schedule_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('schedule_date', 'schedule_time', 'schedule_opponent', 'schedule_location');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_game_schedule_details');

// 管理画面での試合結果一覧にカスタムカラムを追加
function add_game_result_admin_columns($columns) {
    $new_columns = array();
    $new_columns['title'] = $columns['title'];
    $new_columns['game_date'] = '試合日';
    $new_columns['opponent'] = '対戦相手';
    $new_columns['score'] = 'スコア';
    $new_columns['game_result'] = '結果';
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter('manage_game_result_posts_columns', 'add_game_result_admin_columns');

// 試合結果カスタムカラムにデータを表示
function show_game_result_admin_columns($column, $post_id) {
    switch ($column) {
        case 'game_date':
            $date = get_post_meta($post_id, 'game_date', true);
            echo $date ? date('Y/m/d', strtotime($date)) : '未設定';
            break;
        case 'opponent':
            echo get_post_meta($post_id, 'opponent', true) ?: '未設定';
            break;
        case 'score':
            $our_score = get_post_meta($post_id, 'our_score', true);
            $opponent_score = get_post_meta($post_id, 'opponent_score', true);
            if ($our_score !== '' && $opponent_score !== '') {
                echo $our_score . ' - ' . $opponent_score;
            } else {
                echo '未設定';
            }
            break;
        case 'game_result':
            $result = get_post_meta($post_id, 'game_result', true);
            if ($result) {
                $class = '';
                switch ($result) {
                    case '勝利':
                        $class = 'style="color: #28a745; font-weight: bold;"';
                        break;
                    case '敗北':
                        $class = 'style="color: #dc3545; font-weight: bold;"';
                        break;
                    case '引き分け':
                        $class = 'style="color: #ffc107; font-weight: bold;"';
                        break;
                }
                echo '<span ' . $class . '>' . $result . '</span>';
            } else {
                echo '未設定';
            }
            break;
    }
}
add_action('manage_game_result_posts_custom_column', 'show_game_result_admin_columns', 10, 2);

// 管理画面での試合日程一覧にカスタムカラムを追加
function add_game_schedule_admin_columns($columns) {
    $new_columns = array();
    $new_columns['title'] = $columns['title'];
    $new_columns['schedule_date'] = '試合日';
    $new_columns['schedule_time'] = '時間';
    $new_columns['schedule_opponent'] = '対戦相手';
    $new_columns['schedule_location'] = '会場';
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter('manage_game_schedule_posts_columns', 'add_game_schedule_admin_columns');

// 試合日程カスタムカラムにデータを表示
function show_game_schedule_admin_columns($column, $post_id) {
    switch ($column) {
        case 'schedule_date':
            $date = get_post_meta($post_id, 'schedule_date', true);
            echo $date ? date('Y/m/d', strtotime($date)) : '未設定';
            break;
        case 'schedule_time':
            $time = get_post_meta($post_id, 'schedule_time', true);
            echo $time ? date('H:i', strtotime($time)) : '未設定';
            break;
        case 'schedule_opponent':
            echo get_post_meta($post_id, 'schedule_opponent', true) ?: '未設定';
            break;
        case 'schedule_location':
            echo get_post_meta($post_id, 'schedule_location', true) ?: '未設定';
            break;
    }
}
add_action('manage_game_schedule_posts_custom_column', 'show_game_schedule_admin_columns', 10, 2);

// 試合結果を日付順でソート
function game_result_admin_posts_orderby($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->get('post_type') == 'game_result') {
        $query->set('meta_key', 'game_date');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'DESC');
    }
    
    if ($query->get('post_type') == 'game_schedule') {
        $query->set('meta_key', 'schedule_date');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'game_result_admin_posts_orderby');

// Ajax: 試合日程データを取得
function get_schedule_data_ajax() {
    $schedule_query = new WP_Query(array(
        'post_type' => 'game_schedule',
        'posts_per_page' => -1,
        'meta_key' => 'schedule_date',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    ));
    
    $schedule_data = array();
    if ($schedule_query->have_posts()) {
        while ($schedule_query->have_posts()) {
            $schedule_query->the_post();
            $schedule_date = get_post_meta(get_the_ID(), 'schedule_date', true);
            $schedule_time = get_post_meta(get_the_ID(), 'schedule_time', true);
            $schedule_opponent = get_post_meta(get_the_ID(), 'schedule_opponent', true);
            $schedule_location = get_post_meta(get_the_ID(), 'schedule_location', true);
            
            if ($schedule_date) {
                if (!isset($schedule_data[$schedule_date])) {
                    $schedule_data[$schedule_date] = array();
                }
                
                $schedule_data[$schedule_date][] = array(
                    'time' => $schedule_time ? date('H:i', strtotime($schedule_time)) : '',
                    'opponent' => $schedule_opponent,
                    'location' => $schedule_location,
                    'title' => get_the_title()
                );
            }
        }
        wp_reset_postdata();
    }
    
    wp_send_json_success($schedule_data);
}
add_action('wp_ajax_get_schedule_data', 'get_schedule_data_ajax');
add_action('wp_ajax_nopriv_get_schedule_data', 'get_schedule_data_ajax');
