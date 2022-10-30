<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); wp_title('|', true, 'right'); ?></title>
	<meta name="description" content="おからと玄米粉を使ったグルテンフリースイーツの店、Don de dieu。栃木県足利市。オーガニック食材を使用し、白砂糖、生クリーム不使用。なるべく添加物を使わずお作りしています。" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Noto+Serif+JP:wght@200;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
	<h1 style="display:none;">don de dieu ドンデデュー｜足利市グルテンフリースイーツのお店</h1>
	
	<header class="header">
		<div class="header_inner">
			<div class="headerNav">
				<ul class="headerNavList">
					<li><a href="#menu">メニュー</a></li>
					<li><a href="#access">アクセス</a></li>					
				</ul>
				<div class="headerNav_logo">
					<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ドンデデュ"></a></span>
				</div>
				<ul class="headerNavList">
					<li><a href="#about">スイーツについて</a></li>
					<li><a href="#order">ご注文</a></li>					
				</ul>
			</div>
			<div class="spHeader">
				<div class="spHeader_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ドンデデュ"></a>
				</div>
				<div class="spHeaderToggle js-headerToggle">
					<span></span><span></span><span></span>
				</div>
			</div>
		</div>
	</header>

	<div class="spHeaderMenu js-headerToggleMenu">
		<ul class="spHeaderMenuList">
			<li><a href="#menu">メニュー</a></li>
			<li><a href="#access">アクセス</a></li>
			<li><a href="#about">スイーツについて</a></li>
			<li><a href="#order">ご注文</a></li>	
			<li class="spHeaderMenuClose js-spHeaderMenuClose"><span><a href="#">閉じる</a></span></li>
		</ul>
	</div>