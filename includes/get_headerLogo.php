<?php if (is_front_page()) : ?>
	<h1 class="bl_hLogo_img_wrapper">
		<a href="<?php echo home_url(); ?>">
			<figure class="bl_hLogo_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_WEBSON.png" alt="ウェブソンロゴマーク">
			</figure><!-- /.bl_hLogo_i	mg -->
		</a>
	</h1>
<?php else : ?>
	<div class="bl_hLogo_img_wrapper">
		<a href="<?php echo home_url(); ?>">
			<figure class="bl_hLogo_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_WEBSON.png" alt="ウェブソンロゴマーク">
			</figure><!-- /.bl_hLogo_i	mg -->
		</a>
	</div>
<?php endif; ?>
