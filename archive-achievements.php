<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<section class="ly_hero">
	<div class="bl_mv_subPage_wrapper">
		<div class="bl_mv_subPage bl_mv_subPage__achievements">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>導入実績</h1>
				</div>

			</div>
			<div class="bl_mv_subPage_dotWrapper">
				<figure class="el_dot el_dot_result_01" id="el_dot__result_01">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/result/mvItem_01.svg" alt="">
				</figure>
				<figure class="el_dot el_dot_result_02" id="el_dot__result_02">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/result/mvItem_02.svg" alt="">
				</figure>
			</div>


		</div>
	</div>
</section>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__result">
	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<div class="bl_breadcrumb_wrapper">
				<?php get_template_part('includes/get_breadcrumb') ?>
			</div>
			<!-- メインコンテンツ ------------------------->

			<section class="bl_result_headingUnit">
				<p class="el_subPage_lead bl_result_lead">
					ライフデザインオンラインの教材を活用した授業事例と、<br class="active_tb-pc">
					先生のインタビューをご紹介します。
				</p>
				<h3 class="el_subPage_heading bl_result_heading">
					事例一覧
				</h3>
			</section>


			<section class="bl_result_cards">
				<?php if (have_posts()) : ?>
					<ul class="bl_card_unit">
						<?php while (have_posts()) : the_post(); ?>
							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<figure class="el_card_img">
												<?php get_template_part('includes/get_post_thumbnail') ?>
											</figure><!-- /.el_card_img -->
										</div><!-- /.el_card_imgBlock -->
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php the_title(); ?>
												</h3><!-- /.el_card_heading -->
												<p class="el_card_desc">
													<?php $achievements_lead = scf::get('achievements_lead');
													$achievements_lead = wp_trim_words($achievements_lead, 50, '...');
													echo $achievements_lead; ?>
												</p>
												<div class="el_tagUnit">
													<?php
													$terms = get_the_terms($id, 'achievements_category');
													$home = get_home_url();
													?>
													<?php
													if ($terms) {
														foreach ($terms as $term) :
															echo '<object>';
															echo '<a href="' . $home . '/achievements_category/' . $term->slug . '">';
															echo '<span class="el_card_badge el_tag">' . $term->name . '</span></a></object>';
														endforeach;
													}
													?>
												</div><!-- /.el_tag -->
											</div><!-- /.el_card_tct_inner -->
										</div><!-- /.el_card_txt -->
									</div><!-- /.el_card_inner -->
								</a><!-- / .el_card -->
							</li><!-- /.bl_card_wrapper -->
						<?php endwhile; ?>
					</ul><!-- /.bl_card_unit -->
				<?php else : ?>
					<p class="el_no-article">
						表示する記事がありません。
					</p>
				<?php endif; ?>
			</section><!-- /.bl_topics -->
		</div><!-- /.ly-main -->

		<!-- ページネーション -->
		<nav class="navigation pagination pagination__before-class" role="navigation" aria-label="投稿">
			<?php
			if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
				pagination();
			} ?>
		</nav>


		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop el_navToTop__result">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d.png" alt="">
			</figure><!-- /.el_navToTop_arrow -->
			<p class="el_navToTop_txt">
				Page Top
			</p><!-- /.el_navToTop_txt -->
		</div>
	</main>
	<?php
	get_template_part('includes/footer');
	get_footer();
	?>
