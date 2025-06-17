<nav class="l-header">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" class="l-header__logo-img" alt="Unico"></a></div>
	<ul class="l-header__menu">
		<?php if(is_front_page()) { ?>
		<li class="l-header__menu-item" id="navService">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">SERVICE</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">サービス</span>
		</li>
		<li class="l-header__menu-item" id="navNews">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">NEWS</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">ニュース</span>
		</li>
		<li class="l-header__menu-item" id="navPlan">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">PLAN</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">料金案内</span>
		</li>
		<li class="l-header__menu-item" id="navLocation">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">LOCATION</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">店舗一覧</span>
		</li>
		<li class="l-header__menu-item" id="navFaq">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">FAQ</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">よくある質問</span>
		</li>
		<?php } else { ?>
		<li class="l-header__menu-item"><a href="<?php echo esc_url(home_url('/#service')); ?>">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">SERVICE</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">サービス</span>
		</a></li>
		<li class="l-header__menu-item"><a href="<?php echo esc_url(home_url('/#news')); ?>">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">NEWS</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">ニュース</span>
		</a></li>
		<li class="l-header__menu-item"><a href="<?php echo esc_url(home_url('/#plan')); ?>">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">PLAN</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">料金案内</span>
		</a></li>
		<li class="l-header__menu-item"><a href="<?php echo esc_url(home_url('/#location')); ?>">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">LOCATION</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">店舗一覧</span>
		</a></li>
		<li class="l-header__menu-item"><a href="<?php echo esc_url(home_url('/#faq')); ?>">
			<span class="l-header__menu-item-text l-header__menu-item-text--en">FAQ</span>
			<span class="l-header__menu-item-text l-header__menu-item-text--jp">よくある質問</span>
		</a></li>
		<?php } ?>
	</ul>
	<div class="l-header__button">
		<a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="l-header__button-inner l-header__button-inner--blog">
			<span class="l-header__button-inner-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/blog.svg" class="l-header__button-inner-icon-img"></span>
			<span class="l-header__button-inner-text">BLOG</span>
		</a>
		<a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="l-header__button-inner l-header__button-inner--contact">
			<span class="l-header__button-inner-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/contact.svg" class="l-header__button-inner-icon-img"></span>
			<span class="l-header__button-inner-text">無料体験申込<br>お問い合わせ</span>
		</a>
	</div>
	<div id="burger" class="l-header__burger"><div id="burgerInner" class="l-header__burger-inner"></div></div>
</nav>

<div id="spmenu" class="l-spmenu">
	<ul class="l-spmenu__list">
		<?php if(is_front_page()) { ?>
		<li class="l-spmenu__list-item" id="spNavService">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">SERVICE</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">サービス</span>
		</li>
		<li class="l-spmenu__list-item" id="spNavNews">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">NEWS</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">ニュース</span>
		</li>
		<li class="l-spmenu__list-item" id="spNavPlan">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">PLAN</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">料金案内</span>
		</li>
		<li class="l-spmenu__list-item" id="spNavLocation">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">LOCATION</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">店舗一覧</span>
		</li>
		<li class="l-spmenu__list-item" id="spNavFaq">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">FAQ</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">よくある質問</span>
		</li>
		<?php } else { ?>
		<li class="l-spmenu__list-item"><a href="<?php echo esc_url(home_url('/#service')); ?>">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">SERVICE</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">サービス</span>
		</a></li>
		<li class="l-spmenu__list-item"><a href="<?php echo esc_url(home_url('/#news')); ?>">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">NEWS</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">ニュース</span>
		</a></li>
		<li class="l-spmenu__list-item"><a href="<?php echo esc_url(home_url('/#plan')); ?>">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">PLAN</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">料金案内</span>
		</a></li>
		<li class="l-spmenu__list-item"><a href="<?php echo esc_url(home_url('/#location')); ?>">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">LOCATION</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">店舗一覧</span>
		</a></li>
		<li class="l-spmenu__list-item"><a href="<?php echo esc_url(home_url('/#faq')); ?>">
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--en">FAQ</span>
			<span class="l-spmenu__list-item-text l-spmenu__list-item-text--jp">よくある質問</span>
		</a></li>
		<?php } ?>
	</ul>
	<div class="l-spmenu__sns">
		<a href="https://lin.ee/x5e9egE" target=”_blank” class="l-spmenu__sns-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/line.png" alt="LINE" class="l-spmenu__sns-icon-img"></a>
		<a href="https://www.instagram.com/unico_personal.gym/?utm_source=ig_web_button_share_sheet" target=”_blank” class="l-spmenu__sns-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/instagram.png" alt="Instagram" class="l-spmenu__sns-icon-img"></a>
	</div>
</div>