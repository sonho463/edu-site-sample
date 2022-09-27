<?php get_header(); ?>
<?php get_template_part('includes/header'); ?>

<!-- // パンくずリスト-------------------- -->
<div class="bl_breadcrumb_wrapper un_breadcrumb_wrapper__c-detail">
	<?php breadcrumb('', ''); ?>
</div>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- ドロップダウンメニュー -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<?php get_template_part('includes/ddMenu') ?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<section class="ly_hero ly_hero__class-detail">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="un_classDetailMv_wrapper">
				<div class="un_classDetailMv">
					<div class="un_classDetailMv_cont">
						<div class="un_classDetailMv_txtWrapper">
							<div class="un_classDetailMv_headingUnit">
								<div class="el_tagUnit">
									<?php
									$terms = get_the_terms($id, 'lessons_category');
									$home = get_home_url(); ?>
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
								<h1>
									<?php the_title(); ?>
								</h1>
							</div>
						</div><!-- /.mv_txtWrapper -->

						<div class="un_classDetailMv_eyecatch_wrapper">
							<figure class="un_classDetailMv_eyecatch">
								<?php get_template_part('includes/get_post_thumbnail'); ?>
							</figure><!-- /.el_eyecatch -->
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>



<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__class-detail">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<main>
				<div class="ly_main">

					<!-- メニューバー ------------------------->
					<section class="bl_menuBar">
						<div class="bl_menuBar_inner">
							<ul>
								<li class="bl_menuBar_item">
									<a href="#claass-outline">
										<p class="bl_menuBar_text">
											授業概要
										</p><!-- /.bl_menuBar_text -->
										<figure class="bl_menuBar_arrow">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
										</figure><!-- /.bl_menuBar_arrow -->
									</a>

								</li>
								<li class="bl_menuBar_item">
									<a href="#material">
										<p class="bl_menuBar_text">
											教材
										</p><!-- /.bl_menuBar_text -->
										<figure class="bl_menuBar_arrow">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
										</figure><!-- /.bl_menuBar_arrow -->
									</a>

								</li>
								<li class="bl_menuBar_item">
									<a href="#userVoice">
										<p class="bl_menuBar_text">
											利用者の声
										</p><!-- /.bl_menuBar_text -->
										<figure class="bl_menuBar_arrow">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
										</figure><!-- /.bl_menuBar_arrow -->
									</a>

								</li>
							</ul>

						</div><!-- /.bl_menu-bar_inner -->

					</section><!-- /.bl_menu-bar -->



					<!-- メインコンテンツ ------------------------->

					<section class="bl_class-outline" id="claass-outline">
						<section class="bl_class-detail_headingUnit">
							<h3 class="el_subPage_heading bl_class-detail_heading">
								授業概要
							</h3>
							<p class="el_subPage_lead bl_class-detail_lead">
								<?php $lessons_overview = scf::get('lessons_overview');
								echo $lessons_overview; ?>
							</p>
						</section>

						<section class="bl_learningGoal" id="learningGoal">
							<div class="bl_containerBgYellow">
								<div class="bl_containerBgYellow_inner">
									<ul>
										<li class="bl_containerBgYellow_heading">
											<h2>学習目標</h2>
										</li>
										<li>
											<ul class="bl_containerBgYellow_desc">
												<?php
												$lessons_goals = SCF::get('lessons_goals');
												foreach ($lessons_goals as $fields) {
												?>
													<li>
														<p>
															<?php echo $fields['lesson_goal']; ?>
														</p>
													</li>
												<?php } ?>
											</ul><!-- /.bl_containerBgYellow_desc -->
										</li>
									</ul>
								</div><!-- /.containerBgYellow_inner -->
							</div><!-- /.bl_containerBgYellow -->
						</section>
					</section><!-- /.classes-outline -->
					<?php
					$data = get_page_by_path('sexual-diversity-s-pptx', OBJECT, 'materials');
					?>
					<section class="bl_material" id="material">
						<section class="bl_class-detail_headingUnit">
							<h3 class="el_subPage_heading bl_class-detail_heading">
								教材
							</h3>
							<p class="el_subPage_lead bl_class-detail_lead">
								パワーポイントのスライドやハンドブック、ワークシート、動画授業、事前・事後アンケートなどの教材データをご活用ください。
							</p>
						</section>

						<section class="bl_sampleMovie">
							<div class="bl_sampleMovie_text">
								<h3>動画授業サンプル</h3>
							</div>

							<div class="bl_sampleMovie_movie_wrapper">
								<div class="bl_sampleMovie_movie">
									<?php $sample_video = scf::get('sample_video');
									echo $sample_video; ?>
								</div>
							</div>
						</section><!-- /.bl_sampleMovie -->
					</section><!-- /.bl_material -->

					<?php if (SwpmMemberUtils::is_member_logged_in()) : ?>
						<?php /* 会員枠 */ ?>
						<section class="bl_movieMaterials">
							<div class="el_mat_mark">
								<div class="el_mat_mark_inner">
									<div class="el_mat_heading">
										<h3>動画授業を視聴する</h3>
									</div>
								</div>
							</div>
							<section class="bl_movieMaterials_content_wrapper">
								<?php
								$slug = $post->post_name;
								$lessons_movies = SCF::get('lessons_movies');
								foreach ($lessons_movies as $field_name => $field_value) {
								?>
									<a href="<?php echo home_url(); ?>/video/<?php echo $slug . '-' . $field_name; ?>" class="bl_movieMaterials_content">
										<span class="bl_movieMaterials_content_heading_outer">
											<span class="bl_movieMaterials_content_heading">
												<h3><?php echo $field_value['title']; ?></h3>
											</span>
										</span>
										<div class="bl_movieMaterials_content_time">
											<p><?php echo $field_value['time']; ?></p>
										</div>
									</a>
								<?php	} ?>
							</section>
						</section>

						<?php
						// このページのスラッグ 取得
						$slug = $post->post_name;
						?>
						<section class="bl_downloadMaterials">
							<div class="el_mat_mark">
								<div class="el_mat_mark_inner">
									<div class="el_mat_heading">
										<h3>ダウンロード教材</h3>
									</div>
								</div>
							</div>
							<section class="bl_downloadMaterials_content_wrapper">
								<?php
								$slugFlow = $slug . "-flow";
								$lesson_download_flow = get_page_by_path($slugFlow, OBJECT, 'materials');
								if (!empty($lesson_download_flow)) {
								?>
									<a href="<?php echo home_url(); ?>/materials/<?php echo $slug . '-flow'; ?>" class="bl_downloadMaterials_content_item">
										<div class="bl_downloadMaterials_content_item_inner">
											<div class="bl_downloadMaterials_content_mark">
												<p class="bl_downloadMaterials_content_heading">授業の流れ</p>
											</div>
											<div class="bl_downloadMaterials_content_tag">
												<span class="bl_downloadMaterials_content_tag_text">PDF</span>
											</div>
										</div>
									</a>
								<?php } ?>
								<?php
								$slugPpt = $slug . "-ppt";
								$lesson_download_ppt =
									get_page_by_path($slugPpt, OBJECT, 'materials');
								if (!empty($lesson_download_ppt)) {
								?>
									<a href="<?php echo home_url(); ?>/materials/<?php echo $slug . '-ppt'; ?>" class="bl_downloadMaterials_content_item">
										<div class="bl_downloadMaterials_content_item_inner">
											<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__slide">
												<p class="bl_downloadMaterials_content_heading">スライド(PPT)</p>
											</div>
											<div class="bl_downloadMaterials_content_tag">
												<span class="bl_downloadMaterials_content_tag_text">PPT</span>
											</div>
										</div>
									</a>
								<?php } ?>
								<?php
								$slugPdf = $slug . "-pdf";
								$lesson_download_pdf =
									get_page_by_path($slugPdf, OBJECT, 'materials');
								if (!empty($lesson_download_pdf)) {
								?>
									<a href="<?php echo home_url(); ?>/materials/<?php echo $slug . '-pdf'; ?>" class="bl_downloadMaterials_content_item">
										<div class="bl_downloadMaterials_content_item_inner">
											<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__slide">
												<p class="bl_downloadMaterials_content_heading">スライド(PDF)</p>
											</div>
											<div class="bl_downloadMaterials_content_tag">
												<span class="bl_downloadMaterials_content_tag_text">PDF</span>
											</div>
										</div>
									</a>
								<?php } ?>
								<?php
								$slugWorksheet = $slug . "-worksheet";
								$lesson_download_ws =
									get_page_by_path($slugWorksheet, OBJECT, 'materials');
								if (!empty($lesson_download_ws)) {
								?>
									<a href="<?php echo home_url(); ?>/materials/<?php echo $slug . '-worksheet'; ?>" class="bl_downloadMaterials_content_item">
										<div class="bl_downloadMaterials_content_item_inner">
											<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__worksheet">
												<p class="bl_downloadMaterials_content_heading">ワークシート</p>
											</div>
											<div class="bl_downloadMaterials_content_tag">
												<span class="bl_downloadMaterials_content_tag_text">PDF</span>
											</div>
										</div>
									</a>
								<?php } ?>
								<?php
								$slugSurveys = $slug . "-surveys";
								$lesson_download_survey =
									get_page_by_path($slugSurveys, OBJECT, 'materials');
								if (!empty($lesson_download_survey)) {
								?>
									<a href="<?php echo home_url(); ?>/materials/<?php echo $slug . '-surveys'; ?>" class="bl_downloadMaterials_content_item">
										<div class="bl_downloadMaterials_content_item_inner">
											<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__question">
												<p class="bl_downloadMaterials_content_heading">アンケート</p>
											</div>
											<div class="bl_downloadMaterials_content_tag">
												<span class="bl_downloadMaterials_content_tag_text">PDF</span>
											</div>
										</div>
									</a>
								<?php } ?>
							</section>

						</section>

						<?php /* /end 会員枠 */ ?>
					<?php else : ?>
						<?php /* 非会員枠 */ ?>
						<section class="bl_allMaterials">

							<section class="bl_movieMaterials">
								<div class="el_mat_mark">
									<div class="el_mat_mark_inner">
										<div class="el_mat_heading">
											<h3>動画授業を視聴する</h3>
										</div>
									</div>
								</div>
								<section class="bl_movieMaterials_content_wrapper">
									<?php
									$lessons_movies = SCF::get('lessons_movies');
									foreach ($lessons_movies as $fields) { ?>
										<a href="<?php echo home_url(); ?>/video/<?php echo $fields['video_url']; ?>" class="bl_movieMaterials_content disable">
											<span class="bl_movieMaterials_content_heading_outer">
												<span class="bl_movieMaterials_content_heading">
													<h3><?php echo $fields['title']; ?></h3>
												</span>
											</span>
											<div class="bl_movieMaterials_content_time">
												<p><?php echo $fields['time']; ?></p>
											</div>
										</a>
									<?php	} ?>
								</section>
							</section>

							<section class="bl_downloadMaterials">
								<div class="el_mat_mark">
									<div class="el_mat_mark_inner">
										<div class="el_mat_heading">
											<h3>ダウンロード教材</h3>
										</div>
									</div>
								</div>
								<section class="bl_downloadMaterials_content_wrapper">
									<?php
									$lesson_download_flow = scf::get('lesson_download_flow');
									if (!empty($lesson_download_flow)) {
									?>
										<a href="<?php echo wp_get_attachment_url($lesson_download_flow); ?>" class="bl_downloadMaterials_content_item disable" target="_blank" rel="nofollow noopener">
											<div class="bl_downloadMaterials_content_item_inner">
												<div class="bl_downloadMaterials_content_mark">
													<p class="bl_downloadMaterials_content_heading">授業の流れ</p>
												</div>
												<div class="bl_downloadMaterials_content_tag">
													<span class="bl_downloadMaterials_content_tag_text">PDF</span>
												</div>
											</div>
										</a>
									<?php } ?>
									<?php
									$lesson_download_ppt = scf::get('lesson_download_ppt');
									if (!empty($lesson_download_ppt)) {
									?>
										<a href="<?php echo wp_get_attachment_url($lesson_download_ppt); ?>" class="bl_downloadMaterials_content_item disable" target="_blank" rel="nofollow noopener">
											<div class="bl_downloadMaterials_content_item_inner">
												<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__slide">
													<p class="bl_downloadMaterials_content_heading">スライド(PPT)</p>
												</div>
												<div class="bl_downloadMaterials_content_tag">
													<span class="bl_downloadMaterials_content_tag_text">PPT</span>
												</div>
											</div>
										</a>
									<?php } ?>
									<?php
									$lesson_download_pdf = scf::get('lesson_download_pdf');
									if (!empty($lesson_download_pdf)) {
									?>
										<a href="<?php echo wp_get_attachment_url($lesson_download_pdf); ?>" class="bl_downloadMaterials_content_item disable" target="_blank" rel="nofollow noopener">
											<div class="bl_downloadMaterials_content_item_inner">
												<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__slide">
													<p class="bl_downloadMaterials_content_heading">スライド(PDF)</p>
												</div>
												<div class="bl_downloadMaterials_content_tag">
													<span class="bl_downloadMaterials_content_tag_text">PDF</span>
												</div>
											</div>
										</a>
									<?php } ?>
									<?php
									$lesson_download_ws = scf::get('lesson_download_ws');
									if (!empty($lesson_download_ws)) {
									?>
										<a href="<?php echo wp_get_attachment_url($lesson_download_ws); ?>" class="bl_downloadMaterials_content_item disable" target="_blank" rel="nofollow noopener">
											<div class="bl_downloadMaterials_content_item_inner">
												<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__worksheet">
													<p class="bl_downloadMaterials_content_heading">ワークシート</p>
												</div>
												<div class="bl_downloadMaterials_content_tag">
													<span class="bl_downloadMaterials_content_tag_text">PDF</span>
												</div>
											</div>
										</a>
									<?php } ?>
									<?php
									$lesson_download_survey = scf::get('lesson_download_survey');
									if (!empty($lesson_download_survey)) {
									?>
										<a href="<?php echo wp_get_attachment_url($lesson_download_survey); ?>" class="bl_downloadMaterials_content_item disable" target="_blank" rel="nofollow noopener">
											<div class="bl_downloadMaterials_content_item_inner">
												<div class="bl_downloadMaterials_content_mark bl_downloadMaterials_content_mark__question">
													<p class="bl_downloadMaterials_content_heading">アンケート</p>
												</div>
												<div class="bl_downloadMaterials_content_tag">
													<span class="bl_downloadMaterials_content_tag_text">PDF</span>
												</div>
											</div>
										</a>
									<?php } ?>
								</section>
							</section>

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
						</section>
						<?php /* /end 非会員枠 */ ?>
					<?php endif; ?>

					<?php
					$relation = SCF::get('relation');
					if (!empty($relation[0]['video_relation_title'])) :
					?>
						<section class="bl_related-movies">

							<section class="bl_class-detail_headingUnit">
								<h3 class="el_subPage_heading">
									関連動画
								</h3>
							</section>

							<div class="bl_related-movies_item_wrapper">
								<?php
								foreach ($relation as $fields) {
								?>
									<div class="bl_related-movies_item">

										<div class="bl_related-movies_heading">
											<p class="bl_related-movies_heading_text">
												<?php echo $fields['video_relation_title']; ?>
											</p>
										</div>
										<div class="bl_related-movies_movie_wrapper">
											<div class="bl_related-movies_movie bl_sampleMovie_movie">
												<?php echo $fields['video_relation']; ?>
											</div>
										</div>

									</div>
								<?php } ?>

							</div>
						</section>
					<?php endif; ?>

					<section class="bl_navArea bl_navArea__toQA">
						<div class="bl_navArea_inner">
							<p>授業・教材についてよくある質問はこちら</p>
							<div class="ly_oneBtn">
								<a href="<?php echo home_url(); ?>/me" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											Q&Aを見る
										</p>
									</div>
								</a>
							</div>
					</section><!-- /.bl_navArea -->

					<?php
					$users01_title = scf::get('users01_title');
					$users01_teacher = scf::get('users01_teacher');
					$users02_title = scf::get('users02_title');
					$users02_teacher = scf::get('users02_teacher');
					if (!empty($users01_title)) :
					?>
						<section class="bl_userVoice" id="userVoice">
							<section class="bl_class-detail_headingUnit">
								<h3 class="el_subPage_heading bl_class-detail_heading">
									利用者の声
								</h3>
							</section>
							<section class="bl_userVoice_group">
								<ul class="bl_userVoice_group_inner">
									<?php if (!empty($users01_title)) { ?>
										<li class="bl_userVoice_item">
											<div class="bl_userVoice_item_inner">
												<div class="bl_userVoice_imgBlock">
													<div class="bl_userVoice_imgBlock_inner">
														<figure class="bl_userVoice_imgBlock_img">
															<?php $users01_image = scf::get('users01_image'); ?>
															<?php echo wp_get_attachment_image($users01_image); ?>
														</figure>
													</div>
												</div>
												<div class="bl_userVoice_article">
													<div class="bl_userVoice_heading">
														<div class="bl_userVoice_school"><?php echo $users01_title; ?></div>
														<div class="bl_userVoice_teacher"><?php echo $users01_teacher; ?></div>
													</div><!-- /.bl_userVoice_heading -->
													<?php $users01_body = scf::get('users01_body'); ?>
													<div class="bl_userVoice_text">
														<p><?php echo $users01_body; ?></p>
													</div><!-- /.bl_userVoice_text -->
												</div><!-- /.bl_userVoice_article -->
											</div><!-- /.bl_userVoice_item_inner -->
										</li><!-- /.bl_userVoice_item -->
									<?php }; ?>
									<?php if (!empty($users02_title)) { ?>
										<li class="bl_userVoice_item">
											<div class="bl_userVoice_item_inner">
												<?php $users02_image = scf::get('users02_image'); ?>
												<div class="bl_userVoice_imgBlock">
													<div class="bl_userVoice_imgBlock_inner">
														<figure class="bl_userVoice_imgBlock_img">
															<?php echo wp_get_attachment_image($users02_image); ?>
														</figure>
													</div>
												</div>
												<div class="bl_userVoice_article">
													<div class="bl_userVoice_heading">
														<div class="bl_userVoice_school"><?php echo $users02_title; ?></div>
														<div class="bl_userVoice_teacher"><?php echo $users02_teacher; ?></div>
													</div><!-- /.bl_userVoice_heading -->
													<?php $users02_body = scf::get('users02_body'); ?>
													<div class="bl_userVoice_text">
														<p><?php echo $users02_body; ?></p>
													</div><!-- /.bl_userVoice_text -->
												</div><!-- /.bl_userVoice_article -->
											</div><!-- /.bl_userVoice_item_inner -->
										</li><!-- /.bl_userVoice_item -->
									<?php }; ?>
								</ul><!-- /.bl_userVoice_group_inner -->

							</section><!-- /.bl_userVoice_articles -->

						</section><!-- /.bl_userVoice -->
					<?php endif; ?>

				</div><!-- /.ly-main -->


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
		<?php endwhile; ?>
	<?php endif; ?>
	<?php get_template_part('includes/footer') ?>
	<?php get_footer(); ?>