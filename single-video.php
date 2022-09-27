<?php get_header(); ?>
<?php get_template_part('includes/header'); ?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- ドロップダウンメニュー -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<?php get_template_part('includes/ddMenu') ?>



<div class="ly_cont ly_cont__white ly_cont__viewer">
	<main>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
				// このページのスラッグ 取得
				$slug = $post->post_name;
				// 後ろから２文字取得
				$str = substr($slug, -2, 2);
				// 授業ページのスラッグ 取得
				$slug = str_replace($str, '', $slug);
				// 授業ページのスラッグ 動画の番号取得
				$num = str_replace('-', '', $str);
				// 授業ページのpost id取得
				$data = get_page_by_path($slug, OBJECT, 'lessons');
				$post_id = $data->ID;
				?>



				<div class="ly_main">
					<!-- // パンくずリスト-------------------- -->
					<div class="bl_breadcrumb_wrapper">
						<section class="bl_breadcrumb">
							<ul class="bl_breadcrumb_inner">
								<li><a href="<?php echo home_url(); ?>">HOME</a></li>
								<li class="separator">&nbsp;&gt;&nbsp;</li>
								<li><?php the_title(); ?></li>
							</ul><!-- /.bl_breadcrumb_inner -->
						</section><!-- /.bread_crumb -->
					</div><!-- /.bl_breadcrumb_wrapper -->


					<?php if (SwpmMemberUtils::is_member_logged_in()) : ?>
						<?php /* 会員枠 */ ?>


						<section class="bl_sampleMovie">
							<?php
							//授業ページのカスタムフィールドで入力したものを取得
							$group_set = SCF::get('lessons_movies', $post_id);
							?>
							<div class="bl_sampleMovie_text">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="bl_sampleMovie_movie_wrapper">
								<div class="bl_sampleMovie_movie">
									<?php echo $group_set[$num]['video']; ?>
								</div>
							</div>
							<div class="bl_sampleMovie_time">
								<p><?php echo $group_set[$num]['time']; ?></p>
							</div>
							<div class="bl_navArea_inner" _>
								<div class="ly_oneBtn">
									<a href="<?php echo home_url(); ?>/lessons/<?php echo $slug; ?>" class="el_navButton">
										<div class="el_navButton_inner">
											<p class="el_navButton_heading">
												<?php echo $group_set[$num]['title']; ?>
											</p>
										</div>
									</a>
								</div>
							</div>
						</section><!-- /.bl_sampleMovie -->

						<?php /* /end 会員枠 */ ?>
					<?php else : ?>
						<?php /* 非会員枠 */ ?>

						<section class="bl_restrictions">
							<div class="bl_restrictions_info">
								<div class="bl_restrictions_info_inner">
									<div class="bl_restrictions_info_heading">
										<h2>こちらのコンテンツは会員の方が<br class="active_sp">ご利用いただけます。</h2>
									</div>

									<div class="bl_restrictions_boxUnit">
										<div class="bl_restrictions_box_wrapper">

											<div class="bl_restrictions_box">
												<div class="bl_restrictions_box_heading">
													<p>会員の方</p>
												</div>
												<div class="bl_restrictions_box_desc">
													<p>会員登録がお済みの方は、ログインしてご利用ください。</p>
												</div>
												<nav class="bl_restrictions_nav">
													<div class="ly_oneBtn">
														<a href="<?php echo home_url(); ?>/member/login" class="el_navButton">
															<div class="el_navButton_inner">
																<p class="el_navButton_heading">
																	ログインする
																</p>
															</div>
														</a>
													</div>
												</nav>
											</div>
										</div>
										<div class="bl_restrictions_box_wrapper">
											<div class="bl_restrictions_box">
												<div class="bl_restrictions_box_heading">
													<p>会員登録がお済みでない方</p>
												</div>
												<div class="bl_restrictions_box_desc">
													<p>はじめてご利用の方、会員登録がお済みでない方はこちらからご登録ください。</p>
												</div>
												<nav class="bl_restrictions_nav">
													<div class="ly_oneBtn">
														<a href="<?php echo home_url(); ?>/member/application" class="el_navButton el_navButton__textRed">
															<div class="el_navButton_inner">
																<p class="el_navButton_heading">
																	会員登録をする
																</p>
															</div>
														</a>
													</div>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>

						</section>

						<?php /* /end 非会員枠 */ ?>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
</div>


<?php get_footer('white'); ?>