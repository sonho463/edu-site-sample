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
		<div class="bl_mv_subPage bl_mv_subPage__news">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>授業をする前に</h1>
				</div>

			</div>
			<div class="bl_mv_subPage_dotWrapper">
				<figure class="el_dot el_dot_before_01" id="el_dot__before_01">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/before-class/mvItem_01.svg" alt="">
				</figure>
				<figure class="el_dot el_dot_before_02" id="el_dot__before_02">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/before-class/mvItem_02.svg" alt="">
				</figure>
			</div>


		</div>
	</div>
</section>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__before-class">
	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<?php get_template_part('includes/get_breadcrumb'); ?>

			<section class="bl_before-class_headingUnit">
				<!-- <h3 class="el_subPage_heading bl_before-class_heading">
						授業を行う前に心がけて<br class="active_sp">
						ほしいポイント
					</h3> -->
				<p class="el_subPage_lead bl_before-class_lead">
					対面授業、オンライン授業の授業作りのポイント、教材の効果的な活用術<br class="active_pc">
					など授業に役立つ記事をご紹介します。
				</p>
			</section>


			<section class="bl_before-class_cards">
				<?php if (have_posts()) : ?>
					<ul class="bl_card_unit">
						<?php
						while (have_posts()) :
							the_post();
						?>
							<li class="bl_card_wrapper">
								<a href="<?php the_permalink() ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<div class="el_card_badge_wrapper">
												<?php
												$terms = get_the_terms($id, 'news_category');
												$home = get_home_url();
												?>

												<?php
												if ($terms) {
													foreach ($terms as $term) :
														echo '<object>';
														echo '<a href="' . $home . '/news_category/' . $term->slug . '">';
														echo '<span class="el_card_badge">' . $term->name . '</span></a></object>';
													endforeach;
												}
												?>

											</div>
											<figure class="el_card_img">
												<?php get_template_part('includes/get_post_thumbnail') ?>
											</figure>
										</div>
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php the_title() ?>
												</h3>
												<p class="el_card_desc">
													<?php
													$cont = get_the_excerpt();
													$cont = 	wp_strip_all_tags($cont);
													echo $cont;
													?>
												</p>
											</div>
										</div>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php else : ?>
					<p class="el_no-article">
						表示する記事がありません。
					</p>
				<?php endif; ?>
			</section>
		</div>

		<!-- ページネーション -->
		<nav class="navigation pagination pagination__before-class" role="navigation" aria-label="投稿">
			<?php
			if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
				pagination();
			} ?>
		</nav>


		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop el_navToTop__before">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
			</figure>
			<p class="el_navToTop_txt">
				Page Top
			</p>
		</div>
	</main>


	<?php
	get_template_part('includes/footer');
	get_footer();
	?>
