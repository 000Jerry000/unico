<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
	<?php get_header(); ?>
</head>
<body>
<header>
	<?php get_template_part('inc/header'); ?>
</header>

<section class="l-top l-top--top">
	<h1 style="visibility: hidden; position: absolute; top: 0; left: 50%; z-index: -10;">Unico</h1>
	<div class="l-top__view">
		<div class="l-top__view-img">
			<div class="l-top__view-img-inner" style="background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/top.jpg) no-repeat center/cover"></div>
		</div>
		<?php $banner_query = new WP_Query(array(
			'post_type' => 'blog',
			'posts_per_page' => 1,
			'post_status' => 'publish',
			'post__in' => get_option('sticky_posts')
		));
		$sticky_posts = get_option('sticky_posts');
		while($banner_query->have_posts()): $banner_query->the_post(); ?>
		<div class="l-top__view-banner">
			<a href="<?php the_permalink(); ?>" class="l-top__view-banner-link">
				<span class="l-top__view-banner-link-span"><?php the_title(); ?></span>
				<span class="l-top__view-banner-link-span l-top__view-banner-link-span--detail">詳しくはこちら<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/pointer.svg" class="l-top__view-banner-link-span-img"></span>
			</a>
		</div>
		<?php endwhile;
		wp_reset_postdata(); ?>
		<div class="l-top__view-message">
			<span class="l-top__view-message-text l-top__view-message-text--lg">月額<span>38,500</span>円〜 <br>通い放題のパーソナルジム</span>
			<span class="l-top__view-message-text l-top__view-message-text--gray">Achieve your ideal body</span>
			<span class="l-top__view-message-ribbon"><spam class="l-top__view-message-ribbon-inner">女性トレーナー在籍しています！</spam></span>
		</div>
		<div class="l-top__view-button">
			<a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="l-top__view-button-inner">無料体験トレーニング<br>お申し込みはこちらから</a>
		</div>
	</div>
	<div class="l-top__scroll"><span class="l-top__scroll-inner">SCROLL</span></div>
</section>

<main class="l-main">
<section id="service" class="l-main__section l-main__section--top p-top">
	<h2 class="p-top__heading">OUR SERVICE</h2>
	<div class="p-top__container">
		<p class="p-top__container-text">日々の疲れやストレスに負けない、<wbr>しなやかで健やかな身体へ。<br>専門的なケアとあなたに寄り添うサポートで、<wbr>心と体のバランスを整え、自分らしく輝ける毎日を。<br>唯一無二のあなたの体を、もっと好きになるために。<br>Unicoが、あなたの健康と美しさを支えます。</p>
	</div>
</section>

<section class="l-main__section l-main__section--top p-service">
	<div class="p-service__nav">
		<button id="navTraining" class="p-service__nav-button">パーソナルトレーニング</button>
		<button id="navConditioning" class="p-service__nav-button">コンディショニング</button>
		<button id="navCapsule" class="p-service__nav-button">酸素・水素カプセル</button>
	</div>
	<div class="p-service__block">
		<h2 id="training" class="p-service__block-headen">PERSONAL TRAINING</h2>
		<p class="p-service__block-headjp">パーソナルトレーニング</p>
		<div class="p-service__block-container">
			<div class="p-service__block-container-img">
				<div class="p-service__block-container-img-inner">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/personal-training.jpg" alt="Personal Training">
				</div>
			</div>
			<div class="p-service__block-container-inner">
				<div class="p-service__block-container-inner-box">
					<p class="p-service__block-container-inner-box-text">定額制の30分パーソナルトレーニングは、短時間で効率的に、60分のパーソナルトレーニングは肉体に更なる負荷をかけて運動できるサービスです。プロの指導で理想の体づくりをサポートします。</p>
				</div>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/personal-training.jpg" alt="Personal Training" class="p-service__block-container-inner-box-img">
				<div class="p-service__block-container-inner-box">
					<ul class="p-service__block-container-inner-box-list">
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">パーソナルトレーニングが1ヵ月通い放題</span></li>
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">1回30分だからこそ、運動・筋トレ初心者でも通いやすさ&#9678;</span></li>
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">経験者向けの1回1時間のトレーニングで、さらなる筋力アップ</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="p-service__block">
		<h2 id="conditioning" class="p-service__block-headen">CONDITIONING</h2>
		<p class="p-service__block-headjp">コンディショニング</p>
		<div class="p-service__block-container">
			<div class="p-service__block-container-img">
				<div class="p-service__block-container-img-inner">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/conditioning.jpg" alt="Conditioning">
				</div>
			</div>
			<div class="p-service__block-container-inner">
				<div class="p-service__block-container-inner-box">
					<p class="p-service__block-container-inner-box-text">30分コンディショニングは、短時間で体の調子を整えるプログラムです。プロによるストレッチや軽運動を通じて柔軟性や姿勢を改善し、日常の疲れや不調をケアします。</p>
				</div>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/conditioning.jpg" alt="Conditioning" class="p-service__block-container-inner-box-img">
				<div class="p-service__block-container-inner-box">
					<ul class="p-service__block-container-inner-box-list">
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">ケガの予防と身体機能の向上</span></li>
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">疲労回復とパフォーマンス向上</span></li>
						<li class="p-service__block-container-inner-box-list-item"><span class="p-service__block-container-inner-box-list-item-line">姿勢改善と体の歪みの修正</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="p-service__block">
		<h2 id="capsule" class="p-service__block-headen">Hydrogen / Oxygen Capsules</h2>
		<p class="p-service__block-headjp">酸素・水素カプセル</p>
		<div class="p-service__block-container">
			<picture>
				<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/capsules_sp.jpg" media="(max-width: 600px)">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/capsules.jpg" alt="Hydrogen / Oxygen Capsules" class="p-service__block-container-image">
			</picture>
		</div>
	</div>

	<div class="c-contact">
		<p class="c-contact__header">お気軽にご連絡ください！</p>
		<button class="c-contact__button"><a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="c-contact__button-inner"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/mail.svg" class="c-contact__button-inner-icon"><span class="c-contact__button-inner-text">体験申し込み<br><span class="c-contact__button-inner-text-line">お問い合わせはコチラ</span></span></a></button>
	</div>
</section>

<section id="news" class="l-main__section l-main__section--top p-news">
	<h2 class="c-header">NEWS<span class="c-header__jp">ニュース</span></h2>
	<div class="p-news__carousel js-scrollable">
		<?php
		$news_query = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 5,
			'post_status' => 'publish'
		));
		if ($news_query -> have_posts()) {
			while ($news_query -> have_posts()) {
				$news_query -> the_post();
				$img = wp_get_attachment_image_src(get_post_thumbnail_id());
				$category = get_the_terms(get_the_ID(), 'news_category');
				$category_color = get_field('category_color', 'news_category_'.$category[0]->term_id);
		?>
		<div class="p-news__carousel-container">
			<a href="<?php the_permalink(); ?>">
				<div class="p-news__carousel-container-img"><div class="p-news__carousel-container-img-inner" style="background: url(<?php echo esc_html($img[0]); ?>) no-repeat center/cover"></div></div>
				<div class="p-news__carousel-container-inner">
					<p class="p-news__carousel-container-inner-info">
						<time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>" class="p-news__carousel-container-inner-info-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
						<?php if (!empty($category)) { ?>
						<span class="p-news__carousel-container-inner-info-category" style="background-color: <?php echo esc_attr($category_color); ?>"><?php echo esc_html($category[0] -> name); ?></span>
						<?php } ?>
					</p>
					<p class="p-news__carousel-container-inner-title"><?php the_title(); ?></p>
				</div>
			</a>
		</div>
		<?php
			}
			wp_reset_postdata();
		}
		?>
	</div>
</section>

<section id="plan" class="l-main__section l-main__section--top p-plan">
	<h2 class="c-header">PLAN<span class="c-header__jp">料金プラン</span></h2>
	<div class="p-plan__container">
		<p class="p-plan__container-header">30分パーソナルトレーニング<wbr>通い放題</p>
		<div class="p-plan__container-body">
			<div class="js-scrollable">
				<table class="p-plan__container-body-table p-plan__container-body-table--lg">
					<thead>
						<tr>
							<th></th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">1ヶ月プラン</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">6ヶ月プラン</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">12ヶ月プラン</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">入会金</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">33,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">16,500<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-vallg">0<span class="p-plan__container-body-table-value-flex-vallgsm">円</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">月会費</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">38,500<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">36,575<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">34,650<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="p-plan__container-body-caption">
				<p class="p-plan__container-body-caption-linetext">
					<span class="p-plan__container-body-caption-linetext-inner">追加2万円（税込）で酸素・水素カプセル<wbr>25分入り放題プランあり！</span>
				</p>
			</div>
		</div>
	</div>
	<div class="p-plan__container">
		<p class="p-plan__container-header">60分パーソナルトレーニング通い放題</p>
		<div class="p-plan__container-body">
			<div class="js-scrollable">
				<table class="p-plan__container-body-table p-plan__container-body-table--lg">
					<thead>
						<tr>
							<th></th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">1ヶ月プラン</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">3ヶ月プラン</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">6ヶ月プラン</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">入会金</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">33,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">16,500<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-vallg">0<span class="p-plan__container-body-table-value-flex-vallgsm">円</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">月会費</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">55,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">53,625<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">52,250<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="p-plan__container-body-caption">
				<p class="p-plan__container-body-caption-linetext">
					<span class="p-plan__container-body-caption-linetext-inner">追加2万円（税込）で酸素・水素カプセル<wbr>25分入り放題プランあり！</span>
				</p>
				<!-- <ul class="p-plan__container-body-caption-list">
					<li class="p-plan__container-body-caption-list-item">・3ヶ月間の契約となります</li>
					<li class="p-plan__container-body-caption-list-item">・酸素・水素カプセル3回分をプレゼント（1回25分）</li>
				</ul> -->
			</div>
		</div>
	</div>
	<div class="p-plan__container">
		<p class="p-plan__container-header">チケットコース（ビジタープラン）</p>
		<div class="p-plan__container-body">
			<table class="p-plan__container-body-table p-plan__container-body-table--single">
				<tbody>
					<tr>
						<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">1時間<wbr>パーソナル</th>
						<td class="p-plan__container-body-table-value">
							<div class="p-plan__container-body-table-value-flex">
								<p class="p-plan__container-body-table-value-flex-valmd">6,600<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）/ 回</span></p>
							</div>
						</td>
					</tr>
					<tr>
						<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">30分<wbr>パーソナル<br>ストレッチ</th>
						<td class="p-plan__container-body-table-value">
							<div class="p-plan__container-body-table-value-flex">
								<p class="p-plan__container-body-table-value-flex-valmd">3,300<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）/ 回</span></p>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="p-plan__container">
		<p class="p-plan__container-header">酸素・水素カプセル料金</p>
		<div class="p-plan__container-body">
			<div class="js-scrollable">
				<table class="p-plan__container-body-table p-plan__container-body-table--sm">
					<thead>
						<tr>
							<th></th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">パーソナルジム会員様</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">ビジター様</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">25分</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">2,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込2,200円）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">3,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込3,300円）</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--green">50分</th>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">4,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込4,400円）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">5,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込5,500円）</span></p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="p-plan__container-body-caption">
				<p class="p-plan__container-body-caption-text">&#8251;お得な回数券もございますので、<wbr>お問い合わせください！</p>
			</div>
		</div>
	</div>
	<div class="c-contact">
		<p class="c-contact__header">お気軽にご連絡ください！</p>
		<button class="c-contact__button"><a href="<?php echo esc_url(get_the_permalink(7)); ?>" class="c-contact__button-inner"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/mail.svg" class="c-contact__button-inner-icon"><span class="c-contact__button-inner-text">体験申し込み<br><span class="c-contact__button-inner-text-line">お問い合わせはコチラ</span></span></a></button>
	</div>
	<div class="p-plan__container p-plan__container--lightpink">
		<p class="p-plan__container-header">他社比較</p>
		<div class="p-plan__container-body p-plan__container-body--lightpink">
			<div class="js-scrollable">
				<table class="p-plan__container-body-table p-plan__container-body-table--lg">
					<thead>
						<tr>
							<th></th>
							<th rowspan="2" class="p-plan__container-body-table-head p-plan__container-body-table-head--lightpink p-plan__container-body-table-head--unico"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg"></th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<th></th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">Bジム</th>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">Cジム</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">サービス</th>
							<td class="p-plan__container-body-table-value p-plan__container-body-table-value--lightpink">
								<div class="p-plan__container-body-table-value-flex">
									<span class="p-plan__container-body-table-value-flex-valsm">パーソナルトレーニング</span>
									<span class="p-plan__container-body-table-value-flex-valmdsm">＋</span>
									<span class="p-plan__container-body-table-value-flex-valsm">酸素・水素浴</span>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<span class="p-plan__container-body-table-value-flex-valmdsm">パーソナルトレーニング</span>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<span class="p-plan__container-body-table-value-flex-valmdsm">パーソナルトレーニング</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">月会費</th>
							<td class="p-plan__container-body-table-value p-plan__container-body-table-value--lightpink">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">38,500<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">100,320<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">120,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">回数</th>
							<td class="p-plan__container-body-table-value p-plan__container-body-table-value--lightpink">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">通い放題</p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">12<span class="p-plan__container-body-table-value-flex-valsm">回</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">8<span class="p-plan__container-body-table-value-flex-valsm">回</span></p>
								</div>
							</td>
						</tr>
						<tr>
							<th class="p-plan__container-body-table-head p-plan__container-body-table-head--gray">1回あたりの金額</th>
							<td class="p-plan__container-body-table-value p-plan__container-body-table-value--lightpink">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">3,208<span class="p-plan__container-body-table-value-flex-valmdsm">円/回</span></p>
									<span class="p-plan__container-body-table-value-flex-valmdsm">※月12回利用した場合</span>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">7,600<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
							<td class="p-plan__container-body-table-value">
								<div class="p-plan__container-body-table-value-flex">
									<p class="p-plan__container-body-table-value-flex-valmd">15,000<span class="p-plan__container-body-table-value-flex-valmdsm">円（税込）</span></p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<section id="location" class="l-main__section l-main__section--top p-location">
	<h2 class="c-header">LOCATION<span class="c-header__jp">店舗一覧</span></h2>
	<div class="p-location__head">
		<p class="p-location__head-text">UNICO 橿原神宮前店</p>
		<button class="p-location__head-button js-location">店舗詳細</button>
	</div>
	<div class="p-location__container">
		<div class="p-location__container-inner p-location__container-inner--map">
			<div class="p-location__container-inner-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2680.479327747533!2d135.79439306576975!3d34.48662146525802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6006ccda3572c07b%3A0x173f1820533f701!2z5pel5pys44CB44CSNjM0LTAwNjMg5aWI6Imv55yM5qm_5Y6f5biC5LmF57Gz55S677yX77yQ77yYIOOCs-ODrOODhOOCo-OCquODvOODjQ!5e0!3m2!1sja!2ssg!4v1739104647929!5m2!1sja!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="p-location__container-inner p-location__container-inner--table">
			<table class="p-location__container-inner-table">
				<tr>
					<th class="p-location__container-inner-table-head">店舗名</th>
					<td class="p-location__container-inner-table-data">UNICO 橿原神宮前店</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">住所</th>
					<td class="p-location__container-inner-table-data">&#12306;634-0063　奈良県橿原市久米町708<br>コレツィオーネ1F北</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">アクセス</th>
					<td class="p-location__container-inner-table-data">橿原神宮前駅　徒歩5分<br>駐車場/駐輪場あり</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">営業時間</th>
					<td class="p-location__container-inner-table-data">平日　　１０：００〜２１：３０<br>土日祝　９：３０〜１９：３０<br>&#8251;水曜日のみ酸素・水素浴専用営業<br>&#8251;営業時間は、今後変更となる可能性もございます</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="p-location__head">
		<p class="p-location__head-text">UNICO JR奈良店</p>
		<button class="p-location__head-button js-location">店舗詳細</button>
	</div>
	<div class="p-location__container">
		<div class="p-location__container-inner p-location__container-inner--map">
			<div class="p-location__container-inner-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2336.1517524167234!2d135.8205321331221!3d34.680020323767906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013bb2c6f0957f%3A0xd15da457d7733e15!2z576O5bm444K344OG44Kj44Oe44Oz44K344On44Oz77yS!5e0!3m2!1sen!2ssg!4v1741492045451!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="p-location__container-inner p-location__container-inner--table">
			<table class="p-location__container-inner-table">
				<tr>
					<th class="p-location__container-inner-table-head">店舗名</th>
					<td class="p-location__container-inner-table-data">UNICO JR奈良店</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">住所</th>
					<td class="p-location__container-inner-table-data">&#12306;630-8244　奈良県奈良市三条町606-99<br>ミユキシティーマンション102</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">アクセス</th>
					<td class="p-location__container-inner-table-data">JR奈良駅　徒歩4分<br>駐車場/駐輪場あり</td>
				</tr>
				<tr>
					<th class="p-location__container-inner-table-head">営業時間</th>
					<td class="p-location__container-inner-table-data">平日　　１０：００〜２１：３０<br>土日祝　９：３０〜１９：３０<br>&#8251;水曜日のみ酸素・水素浴専用営業<br>&#8251;営業時間は、今後変更となる可能性もございます</td>
				</tr>
			</table>
		</div>
	</div>
</section>

<section id="faq" class="l-main__section l-main__section--top p-faq">
	<h2 class="c-header">FAQ<span class="c-header__jp">よくある質問</span></h2>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">パーソナルジムは何をするの？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">あなたの目標や体力レベルに合わせてプロのトレーナーが最適なメニューを作成し、正しいフォームを指導、そして定期的なセッションによってモチベーションを保ちながら、プロのトレーナーとお客様の二人三脚で効率的に理想のカラダを目指します。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">マッチョではなく、綺麗なスラっとしたカラダになりたいのですが大丈夫？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">なれます。筋骨隆々なマッチョになる方法から、どうしたらそうならないかを熟知しております。トレーニングでインナーマッスルを中心に鍛えることで姿勢改善・代謝アップをしながら、適切な食事と有酸素運動、そして世界初の酸素水素浴により、最短ルートで理想の体へと導きます。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">トレーニングをしたことないけど大丈夫？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">全く心配ございません！通われるお客様のほとんどが運動経験の無い方です。むしろUnicoでは、初心者こそパーソナルトレーニングを受けるべきだと考えております。やみくもにトレーニングを行うことは、ダイエットの観点からも、ケガのリスクの観点からも、非常に効率が悪いからです。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">効果はどれくらいで出るの？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">だいたい1ヶ月で体重自体は落ちます。しかし、無理な食事制限などで体重を大幅に落としてしまうと、リバウンドする可能性が高いです。リバウンドしにくい、綺麗なカラダにしたいのであれば、2～3カ月が必要となります。食事・トレーニングを習慣化させるのにも2～3ヶ月くらい時間は必要ですが、筋肉を鍛えるのにも最低2～3ヶ月かかります。その中で1ヶ月で2~3kg、多くても5キロの減量を目指し、3カ月後に理想のカラダになるようにトレーニングを行います。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">リバウンドしませんか？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">リバウンドの原因は無理な食事制限による反動です。例えば、目標を達成したので、食事に気を使わなくなる、他にも、極端に糖質を減らすダイエットが原因で、痩せづらい体質になってしまうことです。Unicoは30分通い放題のトレーニングにより、生活習慣の見直しを行い、無理のないダイエットと太りづらい体質づくりを実施しております。正しい知識をお届けし、卒業後も続けることのできるライフスタイルの提供を行っています。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">酸素水素浴とはどういうものですか？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">今まであった酸素カプセルの効果（疲労回復、ケガの早期回復、冷え性など）に、水素の力を加えることにより、美肌、エイジングケア、病気の予防の効果がございます。弊社に設置してあるカプセルは、世界で唯一高気圧環境の中で酸素と水素を同時に吸収できる特許を取得している技術により、常に新鮮な水素を生成してカプセルに送り込み、体内で吸収することができます。ブログでより詳しく記載しておりますので、そちらもご覧ください。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">体験トレーニングでは何をするんですか？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">約60分間で、カウンセリング、2~3種目の体験トレーニングを行います。酸素水素浴の体験もご希望の方は約90分間の体験となります。</p>
		</div>
	</details>
	<details class="p-faq__container js-details">
		<summary class="p-faq__container-head js-details-summary">トレーニングには何を持っていけばいいですか？<span class="p-faq__container-head-plus"></span></summary>
		<div class="p-faq__container-body js-details-content">
			<p class="p-faq__container-body-text">トレーニングにはお飲み物とタオルをお持ちください。室内シューズ・運動服は貸し出しがございますので不要です。</p>
		</div>
	</details>
</section>
</main>

<footer>
	<?php get_template_part('inc/footer'); ?>
</footer>

<script>
new ScrollHint('.js-scrollable', {i18n: {scrollable: ''}});
</script>
<?php get_footer(); ?>
</body>
</html>