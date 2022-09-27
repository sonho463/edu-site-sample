<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<section class="ly_hero ly_hero__application">
	<div class="bl_mv_subPage_wrapper bl_mv_subPage_wrapper__conv">
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>プロフィール編集</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="ly_cont ly_cont__white">

	<main>
		<div class="ly_main">

			<section class="bl_appForm">
				<section class="bl_appFrom_heading el_subPage_heading">
					プロフィール編集
				</section>
				<section class="bl_appForm_lead">
					<p>ご登録されたプロフィール情報の確認や編集ができます。</p>
				</section>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile;
				endif; ?>

			</section>

		</div>
	</main>
</div>

<?php
get_template_part('includes/footer');
get_footer();
?>