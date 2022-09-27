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
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>検索結果一覧</h1>
				</div><!-- /.mv_txtWrapper -->
				<div class="bl_mv_subPage_dotWrapper">
					<figure class="el_dot el_dot_search-dl_01" id="el_dot__search-dl_01">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-dl/mvItem_01.svg" alt="">
					</figure>
					<figure class="el_dot el_dot_search-dl_01__SP" id="el_dot__search-dl_01__SP">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-dl/mvItem_01__SP.svg" alt="">
					</figure>
					<figure class="el_dot el_dot_search-dl_02" id="el_dot__search-dl_02">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-dl/mvItem_02.svg" alt="">
					</figure>
				</div>
			</div><!-- /.bl_mv_subPageCont -->
		</div><!-- /.bl_mv -->
	</div><!-- /.bl_mv_wrapper -->
</section><!-- /.ly_hero -->

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__lessons ly_cont__search-dl ly_cont__search-result">
	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<?php get_template_part('includes/get_breadcrumb'); ?>
			<!-- bl_searchUnit------------------------ -->

			<section class="bl_searchUnit">
				<div class="ly_oneBtn">
					<a href="<?php echo home_url(); ?>/lessons" class="el_navButton el_navButton__bgGreen">
						<div class="el_navButton_inner">
							<p class="el_navButton_heading">
								教材検索・ダウンロードに戻る
							</p>
						</div>
					</a>
				</div>

				<?php get_search_form() ?>
			</section>



			<section class="bl_search-dl_content">
				<?php if (have_posts()) : ?>
					<?php
					if (isset($_GET['s']) && empty($_GET['s'])) {
						echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
					} else {
						echo '<p class="bl_search-dl_resultText">“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件</p>'; // 検索キーワードと該当件数を表示
					};
					?>

					<ul id="all_content" class="bl_card_unit current_content">
						<?php while (have_posts()) : the_post(); ?>
							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<figure class="el_card_img">
												<?php get_template_part('includes/get_post_thumbnail'); ?>
											</figure><!-- /.el_card_img -->
										</div><!-- /.el_card_imgBlock -->
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php the_title(); ?>
												</h3><!-- /.el_card_heading -->
												<p class="el_card_desc">
													<?php $lessons_overview = scf::get('lessons_overview');
													$lessons_overview = wp_trim_words($lessons_overview, 50, '...');
													echo $lessons_overview; ?>
												</p>
												<div class="el_tagUnit">
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
												</div><!-- /.el_tag -->
											</div><!-- /.el_card_tct_inner -->
										</div><!-- /.el_card_txt -->
									</div><!-- /.el_card_inner -->
								</a><!-- / .el_card -->
							</li><!-- /.bl_card_wrapper -->
						<?php endwhile; ?>


					</ul>
				<?php else : ?>
					検索されたキーワードにマッチする記事はありませんでした
				<?php endif; ?>
				<!--bl_card_unit-->
			</section><!-- bl_search-dl_content-->
		</div><!-- /.ly-main -->

		<!-- ページネーション -->
		<nav class="navigation pagination pagination__before-class" role="navigation" aria-label="投稿">
			<?php
			if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
				pagination();
			} ?>
		</nav>

		<section class="bl_recommendNav">
			<div class="bl_recommendNav_inner">
				<div class="bl_recommendNav_heading">
					<h3>
						コマ数に応じたコースを探す
					</h3>
				</div>
				<div class="bl_recommendNav_desc">
					<p>
						まずはここから知っておきたい。そんな授業を集めたコースもご用意しています。どの授業からはじめたらいい？どの授業を選択したらいいかわからない方はコースのご利用をおすすめします。
					</p>
				</div>
				<section class="bl_navArea">
					<div class="bl_navArea_inner">
						<div class="ly_oneBtn">
							<a href="<?php echo home_url(); ?>/news/colum20210201" class="el_navButton">
								<div class="el_navButton_inner">
									<p class="el_navButton_heading">
										おすすめのコースを見る
									</p>
								</div>
							</a>
						</div>
				</section><!-- /.bl_navArea -->
			</div><!-- /.bl_recommendNav_inner -->
		</section><!-- /.bl_recommendNav -->




		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
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
