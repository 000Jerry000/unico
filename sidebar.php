<?php $post_type = get_post_type(); ?>
<div class="c-sidebar-group c-sidebar-group--archive">
	<p class="c-sidebar-group-header">カテゴリー</p>
	<ul>
		<?php
		if ($post_type == 'blog') {
			$categories = get_terms('blog_category');
		} else if ($post_type == 'news') {
			$categories = get_terms('news_category');
		}
		foreach ($categories as $category) {
		?>
		<li><a href="<?php echo esc_url(get_term_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></li>
		<?php
		}
		?>
	</ul>
	<ul>
		<li class="u-all"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>">すべて</a></li>
	</ul>
</div>

<?php if ($post_type == 'blog') { ?>
<div class="c-sidebar-group c-sidebar-group--archive">
	<p class="c-sidebar-group-header">キーワード</p>
	<ul>
		<?php
		$tags = get_terms('blog_tag');
		foreach ($tags as $tag) {
		?>
		<li><a href="<?php echo esc_url(get_category_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a></li>
		<?php
		}
		?>
	</ul>
	<ul>
		<li class="u-all"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>">すべて</a></li>
	</ul>
</div>
<?php } ?>
