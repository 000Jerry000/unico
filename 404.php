<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
	<?php get_header(); ?>
</head>
<body>
<header>
	<?php get_template_part('inc/header'); ?>
</header>

<section class="l-top l-top--single" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/blog-bg.jpg) no-repeat center/cover">
	<div class="c-pagetitle">
		<p class="c-pagetitle__main">404 ERROR</p>
		<p class="c-pagetitle__sub">404エラー</p>
	</div>
</section>

<main class="l-main l-main--single">
	<section class="l-main__section l-main__section--single p-single">
		<div class="c-breadcrumb"><?php breadcrumb(); ?></div>

		<div class="p-single__wrap">
			<div class="p-single__wrap-content">
				<h1 class="p-single__wrap-content-title">404ページ</h1>
				<div class="p-single__wrap-content-body">
					<p>お探しのページは見つかりませんでした。</p>
				</div>
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