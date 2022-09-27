<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- ドロップダウンメニュー -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<?php get_template_part('includes/ddMenu') ?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<section class="ly_hero ly_hero__application">
	<div class="bl_mv_subPage_wrapper bl_mv_subPage_wrapper__conv">
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>Q&A</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="ly_cont ly_cont__white">

	<main>
		<div class="ly_main">

			<!-- // パンくずリスト-------------------- -->

			<?php get_template_part('includes/get_breadcrumb'); ?>

			<!-- メニューバー ------------------------->
			<section class="bl_menuBar">
				<div class="bl_menuBar_inner">
					<ul>
						<li class="bl_menuBar_item">
							<a href="#FAQ">
								<p class="bl_menuBar_text">
									よくある質問
								</p><!-- /.bl_menuBar_text -->
								<figure class="bl_menuBar_arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
								</figure><!-- /.bl_menuBar_arrow -->
							</a>

						</li>
						<li class="bl_menuBar_item">
							<a href="#contact-form">
								<p class="bl_menuBar_text">
									お問い合わせ
								</p><!-- /.bl_menuBar_text -->
								<figure class="bl_menuBar_arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
								</figure><!-- /.bl_menuBar_arrow -->
							</a>

						</li>
					</ul>

				</div><!-- /.bl_menu-bar_inner -->

			</section><!-- /.bl_menu-bar -->


			<?php if (have_posts()) : ?>

				<?php $groupNames = [
					'member',
					'login',
					'lesson',
					'payment',
					'service',
					'others',
					'spare01',
					'spare02',
					'spare03'
				] ?>


				<section id="FAQ" class="bl_FAQ">
					<section class="bl_FAQ_heading">
						<h2 class="el_subPage_heading">
							よくある質問
						</h2>
					</section>

					<section class="bl_FAQ_categoryNav">

						<div class="bl_FAQ_categoryNav_inner">
							<div class="ly_threeBtn">
								<?php while (have_posts()) : the_post(); ?>
									<?php foreach ($groupNames as $groupName) : ?>
										<?php
										$qa = SCF::get($groupName);
										$title = SCF::get($groupName . '-title');
										$question = 'q-' . $groupName;
										?>
										<?php
										// var_dump($qa);
										if ($qa[0][$question] !== '') :
										?>
											<a href="<?php echo '#FAQ_' . $groupName; ?>" class="el_navButton">
												<div class="el_navButton_inner">
													<p class="el_navButton_heading">
														<?php echo $title; ?>
													</p>
												</div>
											</a>
										<?php endif; ?>
									<?php endforeach; ?>
								<?php endwhile; ?>
								<!-- <a href="#FAQ_member" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											会員について
										</p>
									</div>
								</a>
								<a href="#FAQ_login" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											ログインについて
										</p>
									</div>
								</a>
								<a href="#FAQ_lessons" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											教材・授業について
										</p>
									</div>
								</a>
								<a href="#FAQ_payment" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											お支払いについて
										</p>
									</div>
								</a>
								<a href="#FAQ_service" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											サービス概要・仕様
										</p>
									</div>
								</a>
								<a href="#FAQ_etc" class="el_navButton">
									<div class="el_navButton_inner">
										<p class="el_navButton_heading">
											その他
										</p>
									</div>
								</a> -->

							</div>
						</div>
					</section>


					<section class="bl_FAQ_articleUnit">
						<?php while (have_posts()) : the_post(); ?>
							<?php foreach ($groupNames as $groupName) : ?>
								<?php
								$qa = SCF::get($groupName);
								$title = SCF::get($groupName . '-title');
								$question = 'q-' . $groupName;
								$answer = 'a-' . $groupName;
								?>
								<?php
								// var_dump($qa);
								if ($qa[0][$question] !== '') :
								?>
									<!-- 会員について -->
									<section id="<?php echo 'FAQ_' . $groupName; ?>" class="bl_FAQ_article">
										<div class="bl_FAQ_heading2_wrapper">
											<h3 class="bl_FAQ_heading2">
												<?php echo $title; ?>
											</h3>
										</div>
										<div class="bl_FAQ_article_item_wrapper">
											<?php
											foreach ($qa as $fields) :
											?>
												<div class="bl_FAQ_article_item">
													<div class="bl_FAQ_article_question">
														<h3 class="bl_FAQ_article_question_text">
															<?php echo $fields[$question] ?>
														</h3>
													</div>
													<div class="bl_FAQ_article_answer">
														<div class="bl_FAQ_article_answer_inner">
															<div class="bl_FAQ_article_answer_text">
																<?php echo $fields[$answer] ?>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
									</section>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endwhile; ?>
					<?php endif; ?>



					<section id="contact-form" class="bl_contact">
						<section class="bl_contact_heading">
							<h2 class="el_subPage_heading">
								お問い合わせ
							</h2>
							<p class="bl_contact_lead">
								ご質問、ご意見、ご感想などお気軽にお聞かせください。<br>ダミー団体名講演のお問い合わせ、ご依頼の際は、日時・場所・対象の方・ご予算をあわせてご記載ください。 </p>
							</p>
						</section>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<?php endwhile;
						endif; ?>


					</section>
					</section>
				</section>
		</div>
		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop el_navToTop__case-study">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
			</figure><!-- /.el_navToTop_arrow -->
			<p class="el_navToTop_txt">
				Page Top
			</p><!-- /.el_navToTop_txt -->
		</div>
	</main>
</div>

<?php get_template_part('includes/footer') ?>
<?php get_footer(); ?>
