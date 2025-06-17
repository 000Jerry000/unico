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
<section class="l-top l-top--archive" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/news-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">NEWS</p>
		<p class="c-pagetitle__sub">ニュース</p>
	</div>
</section>
<?php
} else if ($post_type == 'blog') {
?>
<section class="l-top l-top--archive" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/blog-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">BLOG</p>
		<p class="c-pagetitle__sub">ブログ</p>
	</div>
</section>
<?php
} else {
?>
<section class="l-top l-top--archive" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/blog-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">NO NAME</p>
		<p class="c-pagetitle__sub">未設定</p>
	</div>
</section>
<?php
}
?>

<main class="l-main l-main--archive">
	<section class="l-main__section l-main__section--archive p-archive">
		<div class="c-breadcrumb"><?php breadcrumb(); ?></div>

		<div class="p-archive__wrap">
			<div class="p-archive__wrap-content">
				<div class="p-archive__wrap-content-main">
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
					<div class="p-archive__wrap-content-main-container">
						<a href="<?php the_permalink(); ?>">
							<div class="p-archive__wrap-content-main-container-img" style="background: url(<?php echo esc_html($img[0]); ?>) no-repeat center/cover"></div>
							<div class="p-archive__wrap-content-main-container-info">
								<span class="p-archive__wrap-content-main-container-info-time"><time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time></span>
								<?php if (!empty($category)) { ?>
								<span class="p-archive__wrap-content-main-container-info-category" style="background-color: <?php echo esc_attr($category_color); ?>"><?php echo esc_html($category[0] -> name); ?></span>
								<?php } ?>
							</div>
							<h2 class="p-archive__wrap-content-main-container-title">
							<?php
							if (mb_strlen($post -> post_title) > 36) {
								echo esc_html(mb_substr($post -> post_title, 0, 36).'...');
							} else {
								the_title();
							}
							?>
							</h2>
							<?php if ($tags) { ?>
							<ul class="p-archive__wrap-content-main-container-tag">
								<?php foreach ($tags as $tag) { ?>
								<li class="p-archive__wrap-content-main-container-tag-item"><?php echo esc_html($tag -> name); ?></li>
								<?php } ?>
							</ul>
							<?php } ?>
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="p-archive__wrap-content-pagination">
					<?php global $wp_query;
					echo paginate_links(array(
						'mid_size' => 1,
						'prev_next' => true,
						'prev_text' => '<img src="'.get_template_directory_uri().'/img/icon/arrow.svg">',
						'next_text' => '<img src="'.get_template_directory_uri().'/img/icon/arrow.svg">',
						'current' => max(1, get_query_var('paged')),
						'total' => $wp_query -> max_num_pages
					));?>
				</div>
				<?php } ?>
			</div>
			<div class="c-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>

<footer>
	<?php get_template_part('inc/footer'); ?>
</footer>

<?php get_footer(); ?>
</body>
</html>