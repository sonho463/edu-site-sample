<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<section class="ly_hero ly_hero__application">
	<div class="bl_mv_subPage_wrapper">
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>お探しのページは<br class="active_sp">見つかりませんでした。</h1>
				</div>
			</div>
			<figure class="el_dot" id="el_dot__about_01">
				<img src="./assets/images/about/el_dot__about_01.svg" alt="">
			</figure>
			<figure class="el_dot" id="el_dot__about_02">
				<img src="./assets/images/about/el_dot__about_02.svg" alt="">
			</figure>
		</div>
	</div>
</section>

<div class="ly_cont ly_cont__white ly_cont__terms">
	<main>
		<div class="ly_main">
			<!-- // パンくずリスト-------------------- -->
			<?php get_template_part('includes/get_breadcrumb'); ?>



			<div class="ly_404">
				<div class="bl_404">
					<p class="bl_404_text">
						お客様がお探しのページはページが削除されたか、<br>
						URLが変更された可能性があります。<br><br>
						お手数をおかけいたしますが、<a href="<?php echo home_url(); ?>/" class="bl_404_link">
							<span class="bl_404_text__red">TOPページ</span>または上部のメニューより、<br>
							目的のページをお探しいただきますようお願いいたします。
						</a>
					</p>
				</div>

			</div>


		</div>
	</main>
</div>

<?php
get_template_part('includes/footer');
get_footer();
?>
