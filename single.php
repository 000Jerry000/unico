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
$post_type = get_post_type();
if ($post_type == 'news') {
?>
<section class="l-top l-top--single" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/news-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">NEWS</p>
		<p class="c-pagetitle__sub">ニュース</p>
	</div>
</section>
<?php
} else if ($post_type == 'blog') {
?>
<section class="l-top l-top--single" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/blog-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">BLOG</p>
		<p class="c-pagetitle__sub">ブログ</p>
	</div>
</section>
<?php
} else {
?>
<section class="l-top l-top--single" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/blog-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">NO NAME</p>
		<p class="c-pagetitle__sub">未設定</p>
	</div>
</section>
<?php
}
?>

<main class="l-main l-main--single">
	<?php if ($post_type == 'news') { ?>
	<section class="l-main__section l-main__section--page p-single">
	<?php } else { ?>
	<section class="l-main__section l-main__section--single p-single">
	<?php } ?>
		<div class="c-breadcrumb"><?php breadcrumb(); ?></div>

		<div class="p-single__wrap">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						$img = wp_get_attachment_image_src(get_post_thumbnail_id());
						if ($post_type == 'news') {
							$category = get_the_terms(get_the_ID(), 'news_category');
							$category_color = get_field('category_color', 'news_category_'.$category[0]->term_id);
							$tags = '';
						} else if ($post_type == 'blog'){
							$category = get_the_terms(get_the_ID(), 'blog_category');
							$category_color = get_field('category_color', 'blog_category_'.$category[0]->term_id);
							$tags = get_the_terms(get_the_ID(), 'blog_tag');
						} else {
							$category = get_the_category();
							$category_color = '#ACACAC';
							$tags = '';
						}
			?>
			<div class="p-single__wrap-content">
				<p class="p-single__wrap-content-date"><time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time></p>
				<div class="p-single__wrap-content-tax">
					<div class="p-single__wrap-content-tax-category">
						<?php if (!empty($category)) { ?>
							<a href="<?php echo esc_url(get_term_link($category[0])); ?>" class="p-single__wrap-content-tax-category-link" style="background-color: <?php echo esc_attr($category_color); ?>"><?php echo esc_html($category[0] -> name); ?></a>
						<?php } ?>
					</div>
					<div class="p-single__wrap-content-tax-tag">
						<?php if (!empty($tags)) {
							foreach ($tags as $tag) {
						?>
						<a href="<?php echo esc_url(get_term_link($tag)); ?>" class="p-single__wrap-content-tax-category-link"><?php echo esc_html($tag -> name); ?></a>
						<?php
							}
						} ?>
					</div>
				</div>
				<div class="p-single__wrap-content-title">
					<h1 class="p-single__wrap-content-title-text"><?php the_title(); ?></h1>
					<?php if (!empty($tags)) { ?>
					<div class="p-single__wrap-content-title-tag">
						<?php foreach ($tags as $tag) {?>
						<a href="<?php echo esc_url(get_term_link($tag)); ?>" class="p-single__wrap-content-title-tag-link"><?php echo esc_html($tag -> name); ?></a>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<?php if (!empty($img)) { ?>
				<div class="p-single__wrap-content-img"><div class="p-single__wrap-content-img-inner" style="background: url(<?php echo esc_html($img[0]); ?>) no-repeat center/cover"></div></div>
				<?php } ?>
				<div class="p-single__wrap-content-body">
					<?php the_content(); ?>
				</div>
				<div class="c-backbtn">
					<button class="c-backbtn__inner"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>" class="c-backbtn__inner-link">一覧へ戻る</a></button>
				</div>
			</div>
			<?php
					}
				}
			?>
			<?php if ($post_type != 'news') { ?>
			<div class="c-sidebar">
				<?php get_sidebar(); ?>
			</div>
			<?php } ?>
		</div>
	</section>
</main>

<footer>
	<?php get_template_part('inc/footer'); ?>
</footer>

<?php get_footer(); ?>
</body>
</html>