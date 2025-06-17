<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="<?php wp_title('|', true, 'right');bloginfo('name'); ?>">
<meta name="description" content="<?php echo esc_html(meta_description()); ?>">

<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php if(is_home() || is_front_page()) { ?>
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:type" content="article">
<?php } ?>
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:title" content="<?php wp_title('|', true, 'right');bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo esc_html(meta_description()); ?>">
<meta property="og:image" content="<?php
if (is_page() || is_single()) {
	if(has_post_thumbnail()) {
		$img = wp_get_attachment_image_src(get_post_thumbnail_id());
		echo esc_url($img[0]);
	} else {
		echo esc_url(get_template_directory_uri()); ?>/img/ogp.jpg <?php
	}
} else {
	echo esc_url(get_template_directory_uri()); ?>/img/ogp.jpg
<?php } ?>">

<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.svg" />
<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Unico" />
<link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/site.webmanifest" />

<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">

<!-- Scroll Hint CDN -->
<link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>

<?php wp_head(); ?>