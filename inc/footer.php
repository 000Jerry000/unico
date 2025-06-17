<div class="l-footer">
	<div class="l-footer__bg l-footer__bg--pink"></div>
	<div class="l-footer__bg l-footer__bg--gray"></div>
	<div class="l-footer__inner">
		<div class="l-footer__inner-contact">
			<button class="l-footer__inner-contact-button">
				<a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="l-footer__inner-contact-button-inner">無料体験申し込み<br><span class="l-footer__inner-contact-button-inner-marker">お問い合わせはコチラ</span></a>
			</button>
		</div>
		<div class="l-footer__inner-company">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__inner-company-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" class="l-footer__inner-company-logo-img" alt="Unico"></a>
			<!-- <p class="l-footer__inner-company-name">UNICO</p> -->
			<!-- <p class="l-footer__inner-company-address">&#12306;634-0063 <br class="u-spbr">奈良県橿原市久米町708<br>コレツィオーネ1F北</p> -->
		</div>
		<div class="l-footer__inner-sns">
			<a href="https://lin.ee/x5e9egE" target=”_blank” class="l-footer__inner-sns-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/line.png" alt="LINE" class="l-footer__inner-sns-icon-img"></a>
			<a href="https://www.instagram.com/unico_personal.gym/?utm_source=ig_web_button_share_sheet" target=”_blank” class="l-footer__inner-sns-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/instagram.png" alt="Instagram" class="l-footer__inner-sns-icon-img"></a>
		</div>
		<div class="l-footer__inner-privacy">
			<a href="<?php echo esc_url(get_the_permalink(3)); ?>" class="l-footer__inner-privacy-link">PRIVACY POLICY</a>
		</div>
		<div class="l-footer__inner-copyright">
			<p class="l-footer__inner-copyright-text">2025&copy;unico all rights reserved.</p>
		</div>
	</div>
</div>

<div class="c-pagebtn c-pagebtn--footer">
	<a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="c-pagebtn__button c-pagebtn__button--blog">
		<span class="c-pagebtn__button-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/blog.svg" class="c-pagebtn__button-icon-img"></span>
		<span class="c-pagebtn__button-text">BLOG</span>
	</a>
	<a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="c-pagebtn__button c-pagebtn__button--contact">
		<span class="c-pagebtn__button-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/contact.svg" class="c-pagebtn__button-icon-img"></span>
		<span class="c-pagebtn__button-text">無料体験申込<br>お問い合わせ</span>
	</a>
</div>