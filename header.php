<!DOCTYPE html>
<html lang="ja">

<?php
if (is_front_page()) :
	$pageTitle = 'TOP';
elseif (is_archive()) :
	$pageTitle =  wp_strip_all_tags(get_the_archive_title());
elseif (is_search()) :
	$pageTitle =  '「' . get_search_query() . '」の検索結果';
else :
	$pageTitle = get_the_title();
endif;
?>

<head prefix=”og: http://ogp.me/ns#”>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name=“robots” content=“noindex” />
	<!-- リセットcss destyle.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendors/destyle.css">
	<!-- slick.js -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" />
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- メインのcss -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/build/style.css">
	<title><?php echo $pageTitle ?>｜WEBSON</title>
	<link rel="icon" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

	<!-- OGP -->


	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src=“https://www.googletagmanager.com/gtag/js?id=G-8MT4YMJJ6Z”></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		};
		gtag('js', new Date());
		gtag('config', 'G - 8 MT4YMJJ6Z');
	</script>

</head>


<!-- ボディにクラス名を付与 -->
<?PHP get_template_part('includes/get_bodyClass'); ?>
