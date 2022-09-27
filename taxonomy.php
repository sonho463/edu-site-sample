<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__result">
	<main>
		<div class="ly_main">



			<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
			<!-- main visual -->
			<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
			<section class="ly_hero ly_hero__category-archive">
				<div class="bl_cat-archive">
					<h1 class="bl_cat-archive_heading_text">
						<?php
						$title = single_term_title('', false);
						echo single_term_title('', false);
						?>
					</h1>
				</div>

			</section>


			<!-- // パンくずリスト-------------------- -->

			<div class="bl_breadcrumb_wrapper">
				<?php breadcrumb('', $title); ?>
			</div>


			<!-- メインコンテンツ ------------------------->


			<section class="bl_result_cards">
				<?php
				if (have_posts()) :
				?>
					<ul class="bl_card_unit">
						<?php
						while (have_posts()) :
							the_post();
						?>
							<li class="bl_card_wrapper">
								<?php if(is_tax('news_category')): ?>
								<a href="<?php the_permalink(); ?>" class="el_card" style="background-color: #fff; border-color: #dcdcdc;">
								<?php else: ?>
								<a href="<?php the_permalink(); ?>" class="el_card">
								<?php endif; ?>
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
												<?php get_template_part('includes/get_post_thumbnail'); ?>
											</figure>
										</div>
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php the_title(); ?>
												</h3>
												<p class="el_card_desc">
													<?php
													$cont = get_the_excerpt();
													$cont = 	wp_strip_all_tags($cont);
													echo $cont;
													?>
													<?php $lessons_overview = scf::get('lessons_overview');
													$lessons_overview = wp_trim_words($lessons_overview, 50, '...');
													echo $lessons_overview; ?>
												</p>
												<div class="el_tagUnit">
													<?php
													$terms = get_the_terms($id, 'achievements_category');
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
													<?php
													$terms = get_the_terms($id, 'lessons_category');
													?>
													<?php
													if ($terms) {
														foreach ($terms as $term) :
															echo '<object>';
															echo '<a href="' . $home . '/lessons_category/' . $term->slug . '">';
															echo '<span class="el_card_badge el_tag">' . $term->name . '</span></a></object>';
														endforeach;
													}
													?>
												</div>
											</div>
										</div>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					</ul>
				<?php else : ?>
					<p class="el_no-article">
						表示する記事がありません。
					</p>
				<?php endif ?>
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
		<div id="nav-to-top" class="el_navToTop el_navToTop__result">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
			</figure>
			<p class="el_navToTop_txt">
				Page Top
			</p>
		</div>
	</main>
</div>

<?php
get_template_part('includes/footer');
get_footer();
?>
