<?php



?>


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
					<h1>教材検索・ダウンロード</h1>
				</div>

			</div>
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


		</div>
	</div>
</section>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__lessons ly_cont__search-dl">
	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<?php get_template_part('includes/get_breadcrumb'); ?>

			<section class="bl_searchUnit">
				<?php get_search_form() ?>
			</section>

			<section id="tab_top" class="bl_tabNav">
				<ul id="bl_tabNav_tab" class="bl_tabNav_inner">
					<a href="<?php echo home_url(); ?>/lessons/#tab_top" id="all_tab" class="bl_tabNav_item current_tab">
						<p>すべての授業</p>
					</a>
					<a href="<?php echo home_url(); ?>/lessons_category/for-students/#tab_top" id="for_students_tab" class="bl_tabNav_item">
						<p>生徒に教える</p>
					</a>
					<a href="<?php echo home_url(); ?>/lessons_category/for-teachers/#tab_top" id="learn_teaching_tab" class="bl_tabNav_item">
						<p>教え方を学ぶ</p>
					</a>
				</ul>
			</section>

			<section class="bl_search-dl_content">
				<?php $home = get_home_url(); ?>

				<ul id="all_content" class="bl_card_unit current_content">
					<?php if (have_posts()) : ?>
						<?php
						while (have_posts()) :
							the_post();
						?>
							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
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
												</div>
											</div>
										</div>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
					<?php else : ?>
						<p class="el_no-article">
							表示する記事がありません。
						</p>
					<?php endif; ?>



				</ul>
				<ul id="for_teaching" class="bl_card_unit">
					<?php
					$tax_posts = get_posts(array(
						'post_type' => 'lessons',   //投稿タイプ
						// 'posts_per_page' => '3',
						'tax_query' => array(
							array(
								'taxonomy' => 'lessons_category', //カスタムタクソノミー
								'field' => 'slug',
								'terms' => array('for-students'), //タクソノミーターム
							)
						)
					));
					// var_dump($tax_posts)
					?>
					<?php if ($tax_posts) :

					?>
						<?php foreach ($tax_posts as $tax_post) :  setup_postdata($tax_post);
						?>

							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<figure class="el_card_img">
												<?php $image = get_the_post_thumbnail($tax_post->ID);
												if ($image != null) {
													echo get_the_post_thumbnail($tax_post->ID);
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default02.png" alt="デフォルト画像">
												<?php } ?>
											</figure>
										</div>
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php echo get_the_title($tax_post->ID) ?>
												</h3>
												<p class="el_card_desc">
													<?php
													$cont = get_the_content($tax_post->ID);
													$cont = 	wp_strip_all_tags($cont);
													echo $cont;
													?>
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
												</div>
											</div>
										</div>
									</div>
								</a>
							</li>
					<?php endforeach;
					endif; ?>
				</ul>
				<ul id="for_teaching" class="bl_card_unit">
					<?php
					$tax_posts = get_posts(array(
						'post_type' => 'lessons',   //投稿タイプ
						// 'posts_per_page' => '3',
						'tax_query' => array(
							array(
								'taxonomy' => 'lessons_category', //カスタムタクソノミー
								'field' => 'slug',
								'terms' => array('for-teachers'), //タクソノミーターム
							)
						)
					));
					// var_dump($tax_posts)
					?>
					<?php if ($tax_posts) :

					?>
						<?php foreach ($tax_posts as $tax_post) :  setup_postdata($tax_post);
						?>

							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<figure class="el_card_img">
												<?php $image = get_the_post_thumbnail($tax_post->ID);
												if ($image != null) {
													echo get_the_post_thumbnail($tax_post->ID);
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default02.png" alt="デフォルト画像">
												<?php } ?>
											</figure>
										</div>
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php echo get_the_title($tax_post->ID) ?>
												</h3>
												<p class="el_card_desc">
													<?php
													$cont = get_the_content($tax_post->ID);
													$cont = 	wp_strip_all_tags($cont);
													echo $cont;
													?>
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
												</div>
											</div>
										</div>
									</div>
								</a>
							</li>
					<?php endforeach;
					endif; ?>
				</ul>

			</section>

		</div>
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
				</section>
			</div>
		</section>


		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop">
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
