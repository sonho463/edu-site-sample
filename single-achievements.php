<?php get_header(); ?>
<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/ddMenu') ?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<section class="ly_hero">
			<div class="bl_mv_subPage_wrapper">
				<div class="bl_mv_subPage bl_mv_subPage__single-achievements">
					<div class="bl_mv_subPage_cont">
						<div class="bl_mv_subPage_txtWrapper">
							<h1>
								<?php
								$achievements_title = SCF::get('achievements_title');
								echo $achievements_title;
								?>
							</h1>
						</div>

					</div>


				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>



<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="ly_cont ly_cont__white ly_cont__case-study">
			<main>
				<div class="ly_main">

					<!-- // パンくずリスト-------------------- -->

					<?php get_template_part('includes/get_breadcrumb'); ?>

					<!-- メインコンテンツ ------------------------->

					<section class="bl_case-study_headingUnit">
						<h2 class="el_subPage_lead bl_result_lead">
							<?php echo SCF::get('achievements_lead'); ?>
						</h2>
					</section>

					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
					<!-- 概要 -->
					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

					<section class="bl_ov-result">
						<div class="bl_ov-result_inner">
							<div class="bl_ov-result_article">
								<ul class="bl_ov-result_article_inner">
									<li>
										<div class="bl_ov-result_key-value_wrapper">
											<div class="bl_ov-result_key-value">
												<dl class="bl_ov-result_key-value_inner">
													<dt class="bl_ov-result_key key_schName">学校名</dt>
													<dd class="bl_ov-result_value">
														<?php echo SCF::get('school_name'); ?>
													</dd>
												</dl>
											</div><!-- /.bl_ov-result_key-value -->
										</div><!-- /.bl_ov-result_key-value_wrapper -->
									</li>
									<li>
										<div class="bl_ov-result_key-value_wrapper">
											<div class="bl_ov-result_key-value">
												<dl class="bl_ov-result_key-value_inner">
													<dt class="bl_ov-result_key key_schScale">学校規模</dt>
													<dd class="bl_ov-result_value">
														<?php echo SCF::get('school_size'); ?>
													</dd>
												</dl>
											</div><!-- /.bl_ov-result_key-value -->
										</div><!-- /.bl_ov-result_key-value_wrapper -->
									</li>
									<li>
										<div class="bl_ov-result_key-value_wrapper">
											<div class="bl_ov-result_key-value">
												<dl class="bl_ov-result_key-value_inner">
													<dt class="bl_ov-result_key key_classSelected">選択した授業</dt>
													<dd class="bl_ov-result_value">
														<?php echo SCF::get('selected_lesson'); ?>

													</dd>
												</dl>
											</div><!-- /.bl_ov-result_key-value -->
										</div><!-- /.bl_ov-result_key-value_wrapper -->
									</li>
									<li>
										<div class="bl_ov-result_key-value_wrapper">
											<div class="bl_ov-result_key-value">
												<dl class="bl_ov-result_key-value_inner">
													<dt class="bl_ov-result_key key_interviewedPerson">お話を伺った方</dt>
													<dd class="bl_ov-result_value">
														<?php echo SCF::get('person'); ?>

													</dd>
												</dl>
											</div><!-- /.bl_ov-result_key-value -->
										</div><!-- /.bl_ov-result_key-value_wrapper -->
									</li>
								</ul><!-- /.bl_ov-result_article -->
							</div><!-- /.bl_ov-result_article -->
							<figure class="bl_ov-result_img">
								<?php get_template_part('includes/get_post_thumbnail'); ?>
							</figure><!-- /.bl_ov-result_img -->
						</div><!-- /.bl_ov-result_inner -->
					</section><!-- /.bl_overview-result -->

					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
					<!-- 導入理由 -->
					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

					<section class="bl_reason">
						<div class="bl_containerBgYellow">
							<div class="bl_containerBgYellow_inner">
								<ul>
									<li class="bl_containerBgYellow_heading">
										<h2>導入理由</h2>
									</li>
									<li>
										<ul class="bl_containerBgYellow_desc">
											<?php
											$reasons = SCF::get('reasons');
											foreach ($reasons as $fields) {
												if ($fields['reason'] != '') {
													echo '<li><p>' . $fields['reason'] . '</p></li>';
												}
											}
											?>
										</ul><!-- /.bl_containerBgYellow_desc -->
									</li>
								</ul>
							</div><!-- /.containerBgYellow_inner -->
						</div><!-- /.bl_containerBgYellow -->
					</section>

					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
					<!-- インタビュー部分　-->
					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

					<section class="bl_case-study_interview">
						<div class="bl_case-study_interview_inner">
							<?php
							$contents = SCF::get('contents');
							foreach ($contents as $fields) :
							?>
								<div class="bl_case-study_interview_block">
									<div class="bl_case-study_interview_heading">
										<h3>
											<?php echo $fields['content_heading'] ?>
										</h3>
									</div><!-- /.bl_interview_heading -->
									<div class="bl_case-study_interview_content">
										<!-- 名前の部分は疑似要素で：を表示しているので、空の場合は表示しない対応 -->
										<div class="bl_case-study_interview_name">
											<?php if ($fields['content_name'] != '') : ?>
												<h4>
													<?php
													echo $fields['content_name']
													?>
												</h4>
											<?php endif; ?>
										</div><!-- /.interview_name -->
										<div class="bl_case-study_interview_answer">
											<p>
												<?php echo $fields['content_text'] ?>

											</p>
										</div><!-- /.interview_answer -->
									</div><!-- /.bl_interview_content -->
								</div><!-- /.bl_case-study_interview_block -->
							<?php endforeach; ?>
						</div><!-- /.bl_case-study_interview_inner -->
					</section><!-- /.bl_case-study_interview -->

					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
					<!-- 導入事例一覧に戻るボタン -->
					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

					<section class="bl_navArea bl_navArea_backToResult">
						<div class="bl_navArea_inner">
							<div class="ly_oneBtn">
								<a href="<?php echo home_url(); ?>/achievements" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											導入事例一覧に戻る
										</p>
									</div>
								</a>
							</div>
					</section><!-- /.bl_navArea -->

					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
					<!-- 検索ダウンロード、講演依頼へのナビ -->
					<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

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
								</section><!-- /.bl_navArea -->
							</div><!-- /.bl_guideGroup_item -->
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
								</div><!-- /.bl_guideGroup_desc -->
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
								</section><!-- /.bl_navArea -->
							</div><!-- /.bl_guideGroup_item -->
						</div><!-- /.bl_guideGroup_inner -->
					</section><!-- /.bl_guideGroup -->

					<section class="bl_recommendNav">
						<div class="bl_recommendNav_inner">
							<figure class="bullet-green">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-dl/bullet_green_dot.png" alt="">
							</figure><!-- /.bullet-green -->
							<div class="bl_recommendNav_txt">
								<div class="bl_recommendNav_txt_inner">
									<p class="bl_recommendNav_txt__PC">コマ数に応じたおすすめのコースは<a href="<?php echo home_url(); ?>/news/colum20210201">こちら</a></p>
									<p class="bl_recommendNav_txt__SP"><a href="<?php echo home_url(); ?>/news/colum20210201">コマ数に応じたおすすめのコースはこちら</a></p>
								</div><!-- /.bl_recommendNav_txt_inner -->
							</div><!-- /.bl_recommendNav_txt -->
						</div><!-- /.bl_recommendNav_inner -->
					</section><!-- /.bl_recommendNav -->
				</div><!-- /.ly-main -->
			</main>
		<?php endwhile; ?>
	<?php endif; ?>


	<div class="ly_cont ly_cont__yellow">
		<section class="bl_forRegister">
			<figure class="el_dot el_dot_case-study_01" id="el_dot_case-study01" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/dot_l.png" alt="">
			</figure>
			<figure class="el_dot el_dot_case-study_02" id="el_dot_case-study02" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/dot_r.svg" alt="">
			</figure>
			<div class="bl_forRegister_heading">
				<h2>会員登録をご検討の方へ</h2>
			</div><!-- /.bl_forRegister_heading -->
			<div class="bl_navArea_inner">
				<div class="ly_twoBtn">
					<a href="<?php echo home_url(); ?>/aboutus" class="el_navButton">
						<div class="el_navButton_inner">
							<p class="el_navButton_heading">
								私たちについてを見る
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/member/application" class="el_navButton el_navButton__textRed">
						<div class="el_navButton_inner">
							<p class="el_navButton_heading">
								会員登録をする
							</p>
						</div>
					</a>
				</div>
			</div><!-- /.bl_navArea_inner -->
		</section><!-- /.bl_navArea -->

		<section class="bl_navBtnBgRed">
			<div class="bl_navBtnBgRed_heading">
				<h2>授業、オンライン講演などの<br class="active_sp">ご相談は</h2>
			</div><!-- /.bl_forRegister_heading -->
			<section class="bl_navArea">
				<div class="bl_navArea_inner">
					<div class="ly_oneBtn">
						<a href="<?php echo home_url(); ?>/me" class="el_navButton el_navButton__bgRed">
							<div class="el_navButton_inner">
								<p class="el_navButton_heading">
									お問い合わせはこちら
								</p>
							</div>
						</a>
					</div>
				</div>
			</section><!-- /.bl_navArea -->
		</section><!-- /.bl_navBtnBgRed -->
		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop el_navToTop__case-study">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
			</figure><!-- /.el_navToTop_arrow -->
			<p class="el_navToTop_txt">
				Page Top
			</p><!-- /.el_navToTop_txt -->
		</div>
	</div><!-- /.ly_cont -->



	<?php get_template_part('includes/footer') ?>
	<?php get_footer(); ?>
