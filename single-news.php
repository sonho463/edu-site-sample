<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__case-study ly_cont__column">
	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<?php get_template_part('includes/get_breadcrumb'); ?>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="ly_columnWrapper">
						<section class="ly_columnBody">

							<section class="bl_c-article">
								<div class="bl_c-article_titleUnit">
									<h1 class="bl_c-article_title">
										<?php the_title(); ?>
									</h1>

									<div class="bl_c-article_rowWrapper">
										<div class="bl_c-article_badgeUnit">

											<?php
											$terms = get_the_terms($id, 'news_category');
											$home = get_home_url(); ?>
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
										<div class="bl_c-article_date">
											<p class="bl_c-article_date_text">
												<?php
												$year = get_the_date('Y');
												$month = get_the_date('m');
												$day = get_the_date('d');
												?>
												<span>
													<?php
													echo $year . '/' . $month . '/' . $day;
													?>
												</span>
											</p>
										</div>
									</div>

									<div class="bl_c-article_snsUnit">
										<a class="sns__facebook" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_fb_colored.png" alt="Facebookで共有">
											</figure>
										</a>
										<a class="sns__twitter" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_twitter_colored.png" alt="Twitterで共有">
											</figure>
										</a>
										<a class="sns__line" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_line_colored.png" alt="LINEで共有">
											</figure>
										</a>
										<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" class="sns__blogger" target="_blank" rel="nofollow">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_blogger_colored.png" alt="はてなブックマークで共有">
											</figure>
										</a>
									</div>
								</div>
								<div class="bl_c-article_imageWrapper">
									<figure class="bl_c-article_image">
										<?php get_template_part('includes/get_post_thumbnail') ?>
									</figure>
								</div>

								<!-- <div class="bl_c-article_lead">
									<p class="bl_c-article_lead_text">
										いざ性教育を始めようとしている方の中には、何をどのように伝えれば良いかわからずに困っている方もいらっしゃるかと思います。ここでは、性教育を始めるにあたって大切な<strong>対話による学びを深める探求型学習のポイント</strong>を4つにまとめました。
									</p>
								</div> -->
								<div class="bl_c-article_body">

									<?php the_content(); ?>

								</div>
							</section>
							<section class="bl_please-share">
								<div class="bl_please-share_inner">
									<p class="bl_please-share_text">この記事をシェア</p>
									<div class="bl_c-article_snsUnit">
										<a class="sns__facebook" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_fb_colored.png" alt="Facebookで共有">
											</figure>
										</a>
										<a class="sns__twitter" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_twitter_colored.png" alt="Twitterで共有">
											</figure>
										</a>
										<a class="sns__line" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_line_colored.png" alt="LINEで共有">
											</figure>
										</a>
										<a class="sns__blogger" href="https://b.hatena.ne.jp/entry/panel/?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
											<figure class="bl_c-article_snsUnit_item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/ico_blogger_colored.png" alt="Bloggerで共有">
											</figure>
										</a>
									</div>
								</div>
							</section>
							<section class="bl_related-article">
								<div class="bl_related-article_inner">
									<div class="bl_related-article_heading">
										<h2 class="bl_related-article_heading_text">
											関連記事
										</h2>
									</div>
									<?php

									$cats = get_the_terms($post->ID, 'news_category');
									$array_cats = array();

									if (!empty($cats)) :

										foreach ($cats as $cat) {
											array_push($array_cats, $cat->slug);
										};

										// $cats=array('lesson-point','guideline');

										$args = array(
											'posts_per_page' => 4, // 表示件数の指定
											'post_type' => 'news',
											'tax_query' => array(
												array(
													'taxonomy' => 'news_category',
													'field' => 'slug',
													'terms' => $array_cats,
												)
											)
										);

										$posts = get_posts($args);

									endif;

									?>

									<ul class="bl_related-article_group">
										<?php if (!empty($cats)) : ?>
											<?php foreach ($posts as $post) : ?>
												<?php setup_postdata($post); ?>
												<li class="bl_related-article_item">
													<a href="<?php the_permalink(); ?>" class="bl_recent-post_content">
														<div class="bl_recent-post_content_inner">
															<figure class="bl_recent-post_image_wrapper">
																<?php get_template_part('includes/get_post_thumbnail'); ?>
															</figure>
															<div class="bl_recent-post_title_outer">
																<div class="bl_recent-post_title">
																	<p class="bl_recent-post_title_text">
																		<?php the_title(); ?>
																	</p>
																</div>
															</div>
														</div>
													</a>
												</li>
											<?php endforeach; ?>
											<?php wp_reset_postdata(); ?>
										<?php else : ?>
											<p class="el_no-article">表示する記事がありません</p>
										<?php endif; ?>
									</ul>
								</div>
							</section>

							<section class="bl_guideGroup">
								<div class="bl_guideGroup_inner">
									<div class="bl_guideGroup_item">
										<div class="bl_guideGroup_headingUnit">
											<figure class="bl_guideGroup_img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_search.svg" alt="">
											</figure>
											<div class="bl_guideGroup_heading">
												<h3>
													授業、教材を探す
												</h3>
											</div>
										</div>
										<div class="bl_guideGroup_desc">
											<p>
												授業のハンドブックには若者の体験談や、グループディスカッションの進め方など、講座を実施する上で役立つ情報が掲載！ </p>
										</div>
										<section class="bl_navArea">
											<div class="bl_navArea_inner">
												<div class="ly_oneBtn">
													<a href="<?php echo home_url(); ?>/lessons" class="el_navButton el_navButton__long">
														<div class="el_navButton_inner">
															<p class="el_navButton_heading">
																教材検索ダウンロードを見る
															</p>
														</div>
													</a>
												</div>
											</div>
										</section>
									</div>
									<div class="bl_guideGroup_item bl_guideGroup_item__right">
										<div class="bl_guideGroup_headingUnit">
											<figure class="bl_guideGroup_img bl_guideGroup_img__seminar">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_seminar.svg" alt="">
											</figure>
											<div class="bl_guideGroup_heading bl_guideGroup_heading__green">
												<h3>
													ダミー団体名講演を依頼
												</h3>
											</div>
										</div>
										<div class="bl_guideGroup_desc">
											<p>
												高校生、保護者、児童養護施設職員の方や教員、子どもに関わる方を対象とする性の健康教育の講演を行っています。
											</p>
										</div>
										<section class="bl_navArea">
											<div class="bl_navArea_inner">
												<div class="ly_oneBtn">
													<a href="<?php echo home_url(); ?>/me#contact-form" class="el_navButton el_navButton__long">
														<div class="el_navButton_inner">
															<p class="el_navButton_heading">
																ダミー団体名講演を依頼する
															</p>
														</div>
													</a>
												</div>
										</section>
									</div>
								</div>
							</section>

							<section class="bl_recommendNav">
								<div class="bl_recommendNav_inner">
									<figure class="bullet-green">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-dl/bullet_green_dot.png" alt="">
									</figure>
									<div class="bl_recommendNav_txt">
										<div class="bl_recommendNav_txt_inner">
											<p class="bl_recommendNav_txt__PC">コマ数に応じたおすすめのコースは<a href="<?php echo home_url(); ?>/news/colum20210201">こちら</a></p>
											<p class="bl_recommendNav_txt__SP"><a href="<?php echo home_url(); ?>/news/colum20210201">コマ数に応じたおすすめのコースはこちら</a></p>
										</div>
									</div>
								</div>
							</section>

						</section>
						<section class="ly_c-aside">
							<section class="bl_recent-post">
								<div class="bl_recent-post_heading">
									<div class="el_c-aside_heading">
										<div class="el_c-aside_heading_inner">
											<h3 class="el_c-aside_heading_text">最近の投稿</h3>
										</div>
									</div>
								</div>

								<ul class="bl_recent-post_content_wrapper">
									<?php
									$args = array(
										'posts_per_page' => 4, // 表示件数の指定
										'post_type' => 'news',
									);
									$posts = get_posts($args);
									foreach ($posts as $post) : // ループの開始
										setup_postdata($post); // 記事データの取得
									?>
										<li class="bl_recent-post_content_outer">
											<a href="<?php the_permalink(); ?>" class="bl_recent-post_content">
												<div class="bl_recent-post_content_inner">
													<figure class="bl_recent-post_image_wrapper">
														<?php get_template_part('includes/get_post_thumbnail') ?>
													</figure>
													<div class="bl_recent-post_title_outer">
														<div class="bl_recent-post_title">
															<p class="bl_recent-post_title_text">
																<?php the_title(); ?>
															</p>
														</div>
													</div>
												</div>
											</a>
										</li>
									<?php
									endforeach; // ループの終了
									wp_reset_postdata(); // 直前のクエリを復元する
									?>
								</ul>

							</section>

							<section class="bl_category">
								<div class="bl_category_heading">
									<div class="el_c-aside_heading">
										<div class="el_c-aside_heading_inner">
											<h3 class="el_c-aside_heading_text">カテゴリー</h3>
										</div>
									</div>
								</div>
								<ul class="bl_category_group">
									<li class="bl_category_item">
										<a href="<?php echo home_url(); ?>/news_category/news" class="bl_category_item_inner">
											<div class="bl_category_list">
												<div class="bl_category_list_inner">
													<p class="bl_category_list_text">
														お知らせ
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="bl_category_item">
										<a href="<?php echo home_url(); ?>/news_category/guidelines" class="bl_category_item_inner">

											<div class="bl_category_list">
												<div class="bl_category_list_inner">
													<p class="bl_category_list_text">
														ガイドライン
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="bl_category_item">
										<a href="<?php echo home_url(); ?>/news_category/know-how" class="bl_category_item_inner">
											<div class="bl_category_list">
												<div class="bl_category_list_inner">
													<p class="bl_category_list_text">
														授業のポイント
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="bl_category_item">
										<a href="<?php echo home_url(); ?>/news_category/approach" class="bl_category_item_inner">
											<div class="bl_category_list">
												<div class="bl_category_list_inner">
													<p class="bl_category_list_text">
														学校づくり
													</p>
												</div>
											</div>
										</a>
									</li>


								</ul>


							</section>
						</section>

					</div>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</main>



	<!-- ページトップへのナビゲーション -->
	<div id="nav-to-top" class="el_navToTop el_navToTop__case-study">
		<figure class="el_navToTop_arrow">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
		</figure>
		<p class="el_navToTop_txt">
			Page Top
		</p>
	</div>
</div>

<?php
get_template_part('includes/footer');
get_footer();
?>
