<?php
if (has_post_thumbnail()) {
	the_post_thumbnail();
} else { ?>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default02.jpg" alt="デフォルト画像">
<?php
}
?>
