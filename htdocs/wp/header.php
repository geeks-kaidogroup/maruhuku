<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>テンプレート</title>
	<meta name="robots" content="index,follow">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="l-titlebar">
		<h1>東京都　品川区　大田区　目黒区の外壁塗装、塗替えなら職人直営専門店「塗替え丸福」（旧 ＳＡホーム 原田稔のお店）へ！</h1>
	</div>
	<header class="l-header">
		<div class="wrap">
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_logo.png" width="320" height="43" alt="ロゴ"></a>
				<div class="header-text">
					<p class="header-text-l">外壁塗装・屋根塗装・住宅塗装専門<br>
					創業平成17年　社会保険　労働保険　番号</p>
					<p class="header-text-r"><span class="name">全日本ベスト塗装店銀賞</span> 2009年度獲得！<br>
					<span class="name">全日本ベスト塗装店優秀賞</span> 2008年度獲得！<br>
					<span class="name">東京新聞、ＴＢＳテレビ</span>に掲載されました！</p>
				</div>
			</div>
			<div class="header-btn">
				<ul class="header-list float-list">
					<li><a href="<?php echo home_url('/price/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_price.png" width="207" height="90" alt="お見積もり"></a></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_tel.png" width="279" height="90" alt="電話"></li>
				</ul>
			</div>
		</div>
	</header><!-- /.l-header -->

	<section class="l-mv">
		<div class="wrap">
			<div class="mv-main">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_mv.jpg" width="741" height="370" alt="メイン画像">
			</div>
			<div class="mv-side">
				<ul class="mv-side-list">
					<li><a href="<?php echo home_url('/execution/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_mv_bnr_01.png" width="240" height="85" alt="施工実績2560件"></a></li>
					<li><a href="<?php echo home_url('/media/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_mv_bnr_02.png" width="240" height="85" alt="表彰実績"></a></li>
					<li><a href="<?php echo home_url('/advantage/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_mv_bnr_03.png" width="240" height="85" alt="塗替え丸福のこだわり"></a></li>
					<li><a href="<?php echo home_url('/price/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_mv_bnr_04.png" width="240" height="85" alt="丸福職人プラン"></a></li>
				</ul>
			</div>
		</div>
	</section>

	<nav class="l-navi">
		<ul class="navi-list float-list">
			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_01.png" width="144" height="46" alt="トップページ"></a></li>
			<li><a href="<?php echo home_url('/flow/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_02.png" width="142" height="46" alt="施工の流れ"></a></li>
			<li><a href="<?php echo home_url('/advantage/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_03.png" width="143" height="46" alt="丸福の強み"></a></li>
			<li><a href="<?php echo home_url('/flow/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_04.png" width="142" height="46" alt="丸福の施工"></a></li>
			<li><a href="<?php echo home_url('/warranty/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_05.png" width="143" height="46" alt="丸福の保証"></a></li>
			<li><a href="<?php echo home_url('/voice/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_06.png" width="142" height="46" alt="お客様が語る丸福"></a></li>
			<li><a href="<?php echo home_url('/execution/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_07.png" width="144" height="46" alt="ご近所の施工宅"></a></li>
		</ul>
	</nav><!-- /.l-navi -->