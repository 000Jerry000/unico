<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
	<?php get_header(); ?>
</head>
<body>
<header>
	<?php get_template_part('inc/header'); ?>
</header>

<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			$img = wp_get_attachment_image_src(get_post_thumbnail_id());
			if (empty($img)) {
				$img = [get_template_directory_uri().'/img/blog-bg.jpg'];
			}
?>

<section class="l-top l-top--page" style="background: url(<?php echo esc_html($img[0]); ?>) no-repeat center/cover">
	<div class="c-pagetitle">
		<h1 class="c-pagetitle__main"><?php the_title(); ?></h1>
		<p class="c-pagetitle__sub"><?php echo esc_html(get_post_meta($post->ID, 'title_sub', true)); ?></p>
	</div>
</section>

<main class="l-main">
	<section class="l-main__section l-main__section--page p-page">
		<div class="c-breadcrumb"><?php breadcrumb(); ?></div>

		<div class="p-page__content">
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php
		}
	}
?>

<footer>
	<?php get_template_part('inc/footer'); ?>
</footer>

<?php get_footer(); ?>
</body>
</html>