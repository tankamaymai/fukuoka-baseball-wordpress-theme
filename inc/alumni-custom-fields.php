<?php
/**
 * 排出選手管理用カスタム投稿タイプとカスタムフィールド
 */

// カスタム投稿タイプ「排出選手」を作成
function create_alumni_post_type() {
    register_post_type('alumni_player',
        array(
            'labels' => array(
                'name' => '排出選手',
                'singular_name' => '排出選手',
                'add_new' => '新規追加',
                'add_new_item' => '新しい排出選手を追加',
                'edit_item' => '排出選手を編集',
                'new_item' => '新しい排出選手',
                'view_item' => '排出選手を表示',
                'search_items' => '排出選手を検索',
                'not_found' => '排出選手が見つかりませんでした',
                'not_found_in_trash' => 'ゴミ箱に排出選手はありません',
                'menu_name' => '排出選手管理'
            ),
            'public' => true,
            'has_archive' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => false,
            'query_var' => false,
            'show_in_rest' => true
        )
    );
}
add_action('init', 'create_alumni_post_type');

// カスタムフィールドの追加
function add_alumni_custom_fields() {
    add_meta_box(
        'alumni_details',
        '選手詳細情報',
        'alumni_custom_fields_callback',
        'alumni_player',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_alumni_custom_fields');

// カスタムフィールドのHTML出力
function alumni_custom_fields_callback($post) {
    // セキュリティのためのnonce
    wp_nonce_field('alumni_save_meta_box_data', 'alumni_meta_box_nonce');
    
    // 既存のデータを取得
    $year = get_post_meta($post->ID, '_alumni_year', true);
    $position = get_post_meta($post->ID, '_alumni_position', true);
    $destination = get_post_meta($post->ID, '_alumni_destination', true);
    $team = get_post_meta($post->ID, '_alumni_team', true);
    $display_order = get_post_meta($post->ID, '_alumni_display_order', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="alumni_year">排出年</label></th>
            <td>
                <input type="number" id="alumni_year" name="alumni_year" value="<?php echo esc_attr($year); ?>" min="1900" max="<?php echo date('Y'); ?>" style="width: 100px;" />
                <p class="description">例: 2023</p>
            </td>
        </tr>
        <tr>
            <th><label for="alumni_position">ポジション</label></th>
            <td>
                <input type="text" id="alumni_position" name="alumni_position" value="<?php echo esc_attr($position); ?>" style="width: 200px;" />
                <p class="description">例: 投手、内野手、外野手、捕手</p>
            </td>
        </tr>
        <tr>
            <th><label for="alumni_destination">進路</label></th>
            <td>
                <input type="text" id="alumni_destination" name="alumni_destination" value="<?php echo esc_attr($destination); ?>" style="width: 300px;" />
                <p class="description">例: プロ野球選手、大学野球部、社会人野球</p>
            </td>
        </tr>
        <tr>
            <th><label for="alumni_team">所属チーム</label></th>
            <td>
                <input type="text" id="alumni_team" name="alumni_team" value="<?php echo esc_attr($team); ?>" style="width: 300px;" />
                <p class="description">例: 福岡ソフトバンクホークス、読売ジャイアンツ</p>
            </td>
        </tr>
        <tr>
            <th><label for="alumni_display_order">表示順序</label></th>
            <td>
                <input type="number" id="alumni_display_order" name="alumni_display_order" value="<?php echo esc_attr($display_order ?: 1); ?>" min="1" style="width: 100px;" />
                <p class="description">数字が小さいほど上に表示されます</p>
            </td>
        </tr>
    </table>
    
    <style>
        .form-table th {
            width: 150px;
            font-weight: bold;
        }
        .form-table td {
            padding: 10px 0;
        }
        .form-table input[type="text"],
        .form-table input[type="number"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-table .description {
            margin-top: 5px;
            color: #666;
            font-style: italic;
        }
    </style>
    <?php
}

// カスタムフィールドのデータ保存
function save_alumni_custom_fields($post_id) {
    // セキュリティチェック
    if (!isset($_POST['alumni_meta_box_nonce']) || !wp_verify_nonce($_POST['alumni_meta_box_nonce'], 'alumni_save_meta_box_data')) {
        return;
    }
    
    // 自動保存の場合はスキップ
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // 権限チェック
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // データの保存
    if (isset($_POST['alumni_year'])) {
        update_post_meta($post_id, '_alumni_year', sanitize_text_field($_POST['alumni_year']));
    }
    
    if (isset($_POST['alumni_position'])) {
        update_post_meta($post_id, '_alumni_position', sanitize_text_field($_POST['alumni_position']));
    }
    
    if (isset($_POST['alumni_destination'])) {
        update_post_meta($post_id, '_alumni_destination', sanitize_text_field($_POST['alumni_destination']));
    }
    
    if (isset($_POST['alumni_team'])) {
        update_post_meta($post_id, '_alumni_team', sanitize_text_field($_POST['alumni_team']));
    }
    
    if (isset($_POST['alumni_display_order'])) {
        update_post_meta($post_id, '_alumni_display_order', intval($_POST['alumni_display_order']));
    }
}
add_action('save_post', 'save_alumni_custom_fields');

// 管理画面の一覧でカスタムフィールドを表示
function add_alumni_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = '選手名';
    $new_columns['alumni_year'] = '排出年';
    $new_columns['alumni_position'] = 'ポジション';
    $new_columns['alumni_destination'] = '進路';
    $new_columns['alumni_team'] = '所属チーム';
    $new_columns['alumni_display_order'] = '表示順序';
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_alumni_player_posts_columns', 'add_alumni_columns');

// カスタムカラムの内容を表示
function show_alumni_columns($column, $post_id) {
    switch ($column) {
        case 'alumni_year':
            echo esc_html(get_post_meta($post_id, '_alumni_year', true));
            break;
        case 'alumni_position':
            echo esc_html(get_post_meta($post_id, '_alumni_position', true));
            break;
        case 'alumni_destination':
            echo esc_html(get_post_meta($post_id, '_alumni_destination', true));
            break;
        case 'alumni_team':
            echo esc_html(get_post_meta($post_id, '_alumni_team', true));
            break;
        case 'alumni_display_order':
            echo esc_html(get_post_meta($post_id, '_alumni_display_order', true) ?: '1');
            break;
    }
}
add_action('manage_alumni_player_posts_custom_column', 'show_alumni_columns', 10, 2);

// カスタムカラムでソート可能にする
function make_alumni_columns_sortable($columns) {
    $columns['alumni_year'] = 'alumni_year';
    $columns['alumni_display_order'] = 'alumni_display_order';
    return $columns;
}
add_filter('manage_edit-alumni_player_sortable_columns', 'make_alumni_columns_sortable');

// ソート処理
function alumni_custom_orderby($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }
    
    if ('alumni_year' === $query->get('orderby')) {
        $query->set('meta_key', '_alumni_year');
        $query->set('orderby', 'meta_value_num');
    }
    
    if ('alumni_display_order' === $query->get('orderby')) {
        $query->set('meta_key', '_alumni_display_order');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'alumni_custom_orderby');

// 管理画面に説明文を追加
function alumni_admin_notices() {
    $screen = get_current_screen();
    if ($screen->post_type === 'alumni_player') {
        echo '<div class="notice notice-info"><p><strong>排出選手管理:</strong> ここで追加・編集した選手情報は、フロントページの「主な排出選手」セクションに自動的に反映されます。表示順序で並び順を調整できます。</p></div>';
    }
}
add_action('admin_notices', 'alumni_admin_notices');
