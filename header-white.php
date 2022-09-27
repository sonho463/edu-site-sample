<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- リセットcss destyle.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendors/destyle.css">
	<!-- slick.js -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" />
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- メインのcss -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/build/style.css">
	<title><?php echo $pageTitle ?>｜ライフデザインONLINE</title>
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

<body body_class();>

	<div class="ly_fixedWrapper">
		<div class="ly_header_wrapper">
			<header id="top" class="ly_header">
				<div class="ly_header_inner">
					<div class="bl_hLogo_wrapper">
						<h1 class="bl_hLogo_img_wrapper">
							<a href="<?php echo home_url(); ?>">
								<figure class="bl_hLogo_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_lifedesign.svg" alt="ライフデザインONLINEロゴマーク">
								</figure><!-- /.bl_hLogo_i	mg -->
							</a>
						</h1>
					</div><!-- /.bl_hLogo_wrapper -->
				</div><!-- /.ly_header_inner -->
			</header><!-- /.ly_header -->
		</div><!-- /.header_wrapper -->
	</div>
