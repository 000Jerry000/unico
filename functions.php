<?php
add_action('init', function() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_post_type_support('page', 'excerpt');

	register_post_type('blog', [
		'label' => 'BLOG',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-edit',
		'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
		'has_archive' => true,
		'show_in_rest' => true
	]);
	register_taxonomy('blog_category', 'blog', [
		'label' => 'カテゴリー',
		'hierarchical' => 'true',
		'show_in_rest' => true
	]);
	register_taxonomy('blog_tag', 'blog', [
		'label' => 'キーワード',
		'hierarchical' => 'false',
		'show_in_rest' => true,
		'update_count_callback' => '_update_post_term_count'
	]);

	register_post_type('news', [
		'label' => 'NEWS',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-media-text',
		'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		'has_archive' => true,
		'show_in_rest' => true
	]);
	register_taxonomy('news_category', 'news', [
		'label' => 'カテゴリー',
		'hierarchical' => 'true',
		'show_in_rest' => true
	]);
});

function meta_description() {
	$default = '通い放題のパーソナルジムで理想の自分へ。専門的なケアとあなたに寄り添うサポートで、心と体のバランスを整え、自分らしく輝ける毎日を。unicoが、あなたの健康と美しさを支えます。';
	if(is_single() || is_page()) {
		$description = get_the_excerpt();
		if(empty($description)) {
			$description = $default;
		}
	} else {
		$description = $default;
	}
	return $description;
}

// Custom Field on post-type 'page'
add_action('admin_menu', 'title_sub_hooks');
add_action('save_post', 'save_title_sub');
function title_sub_hooks() {
	add_meta_box('title_sub', 'サブタイトル', 'title_sub_input', 'page', 'normal');
}
function title_sub_input() {
	global $post;
	echo '<input type="text" name="title_sub" value="'.get_post_meta($post->ID,'title_sub',true).'" size="50" />';
}
function save_title_sub($post_id) {
	if(!empty($_POST['title_sub'])) {
		update_post_meta($post_id, 'title_sub', $_POST['title_sub']);
	} else {
		delete_post_meta($post_id, 'title_sub');
	}
}

// Create Breadcrumb
function breadcrumb() {
	if(is_front_page()) {}
	$wp_obj = get_queried_object();
	echo '<ul class="c-breadcrumb__list">';
	echo '<li class="c-breadcrumb__list-item"><a href="'.esc_url(home_url('/')).'">TOP</a></li>';
	if(is_single()) {
		$post_type = $wp_obj -> post_type;
		$post_title = $wp_obj -> post_title;
		// In case of custom post
		if($post_type !== 'post') {
			$post_type_link = esc_url(get_post_type_archive_link($post_type));
			$post_type_label = esc_html(get_post_type_object($post_type) -> label);
			echo '<li class="c-breadcrumb__list-item"><a href="'.$post_type_link.'">'.$post_type_label.'</a></li>';
		}
		echo '<li class="c-breadcrumb__list-item">'.esc_html($post_title).'</li>';
	} else if(is_page()) {
		$post_title = $wp_obj -> post_title;
		echo '<li class="c-breadcrumb__list-item">'.esc_html($post_title).'</li>';
	} else if(is_archive()) {
		$post_type = get_post_type();
		if($post_type !== 'post') {
			$post_type_label = esc_html(get_post_type_object($post_type) -> label);
			$post_type_link = esc_url(get_post_type_archive_link($post_type));
			echo '<li class="c-breadcrumb__list-item"><a href="'.$post_type_link.'">'.$post_type_label.'</a></li>';
		}

		if($post_type == 'blog') {
			$term_name = $wp_obj -> name;
			if ($term_name != 'blog') {
				echo '<li class="c-breadcrumb__list-item">'.esc_html($term_name).'</li>';
			}
		} else if($post_type == 'news') {
			$term_name = $wp_obj -> name;
			if ($term_name != 'news') {
				echo '<li class="c-breadcrumb__list-item">'.esc_html($term_name).'</li>';
			}
		}
	} else if(is_search()) {
		echo '<li class="c-breadcrumb__list-item">「'.get_search_query().'」の検索結果</li>';
	} else if(is_404()) {
		echo '<li class="c-breadcrumb__list-item">お探しのページは見つかりませんでした</li>';
	}
	echo '</ul>';
}

// Add original menu
add_action('admin_menu', 'original_menu');
function original_menu() {
	add_menu_page('キャンペーン', 'キャンペーン', 'manage_options', 'original_menu', 'add_original_menu', 'dashicons-star-empty', 8);
	add_action('admin_init', 'register_original_menu');
}

function add_original_menu() {
	?>
	<div class="wrap">
		<?php
			if(isset($_GET['settings-updated']) && $_GET['settings-updated']){
				echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました</strong></p></div>';
			}
		?>
		<h2>キャンペーンバナー</h2>
		<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
		settings_fields('original_menu_1');
		do_settings_sections('original_menu_1');
		?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class='hndle'>バナー情報</h3>
				<div class="inside">
					<div class="main">
						<p class="setting_description">お問い合わせフォームの上部に表示させるキャンペーンバナーを編集できます。</p>
						<h4>テキスト</h4>
						<input type="text" name="text" value="<?php echo esc_html(get_option('text')); ?>" style="width:100%;">
						<h4>文字色</h4>
						<input type="color" name="color" value="<?php echo esc_html(get_option('color')); ?>">
						<h4>背景色</h4>
						<input type="color" name="bgcolor" value="<?php echo esc_html(get_option('bgcolor')); ?>">
					</div>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

function register_original_menu() {
	register_setting('original_menu_1', 'text');
	register_setting('original_menu_1', 'color');
	register_setting('original_menu_1', 'bgcolor');
}

add_shortcode("banner", "banner_shortcode");
function banner_shortcode() {
	$text = esc_html(get_option('text'));
	$color = esc_html(get_option('color'));
	$bgcolor = esc_html(get_option('bgcolor'));
	return '<div class="c-banner" style="background-color:'.$bgcolor.';"><p class="c-banner__text" style="color:'.$color.';">'.$text.'</p></div>';
}
?>