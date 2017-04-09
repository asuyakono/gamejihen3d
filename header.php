<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="description" content="ものづくりが好きなゲーマー3人が、ゲームの話を中心にいろんな話題をまったりと語らうPodcastです。">
<meta name="keywords" content="東京ゲーム事変,3D,podcast,ポッドキャスト,美大生,デザイナー,デザイン">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.1/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<!-- IE用 -->
<!--[if lte IE 8]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.backgroundSize.js"></script>
<script>
$(function() {
$(".top-visual").css( "background-size", "cover" );      //backgounrd-size:coverを使う場合//
});
</script>
<![endif]-->
<?php wp_head(); ?>
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
</head>

<body <?php body_class(); ?>>

<!-- header -->
<header class="header">
<h1 class="header__logo"><?php bloginfo('name'); ?></h1>
<p class="header__copy"><?php bloginfo('description'); ?></p>
<div class="header__description">
	<p>
		東京ゲーム事変3Dは、
		<br class="br-smartphone">
		ものづくりが好きなゲーマー3人が
		<br>
		ゲームの話を中心にいろんな話題を
		<br class="br-smartphone">
		まったりと語らうPodcastです。
	</p>
</div>
<div class="button">
	<a href="https://itunes.apple.com/jp/podcast/dong-jinggemu-shi-bian3d/id896349757?mt=2&uo=4" class="iTunes">iTunesで購読</a>
	<a href="https://docs.google.com/forms/d/e/1FAIpQLSdGBKfbwhp5oKRbv92qRJfunzRZEapgqrveNc7gvoIokQo9TA/viewform?usp=sf_link" class="rss">おたよりを送る</a>
</div>
</header>
