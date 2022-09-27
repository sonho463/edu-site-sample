<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<section class="ly_hero ly_hero__application">
	<div class="bl_mv_subPage_wrapper bl_mv_subPage_wrapper__conv">
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>ログイン</h1>
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

			<section class="bl_forMember">
				<section class="el_subPage_heading">
					会員の方
				</section>
				<section class="bl_login_desc">
					<p class="bl_login_txt">
						ユーザーID(メールアドレス)とパスワードを入力してログインしてください。
					</p>
				</section>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile;
				endif; ?>
				<div class="swpm-join-us-link">
					<a id="register" class="swpm-login-form-register-link" href="<?php echo home_url(); ?>/member/profile/">プロフィール編集</a>
				</div>
			</section>
			<?php if (!SwpmMemberUtils::is_member_logged_in()) : ?>
				<section class="bl_forNewbie">
					<section class="el_subPage_heading">
						はじめてご利用の方<span class="active_tb-pc">・</span><br class="active_sp">会員以外の方
					</section>
					<section class="bl_login_desc">
						<p class="bl_login_txt">
							会員登録がお済みでない方は、こちらから会員登録を行ってください。<br>
							会員登録をすると、すべての教材をご利用いただけます。
						</p>
					</section>
					<div class="bl_navArea">
						<div class="ly_oneBtn">
							<button class="el_navButton el_navButton__bgRed" onclick="location.href='<?php echo home_url(); ?>/member/application/';">
								<div class="el_navButton_inner">
									<p class="el_navButton_heading">
										会員登録をする
									</p>
								</div>
							</button>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<!-- ページトップへのナビゲーション -->
			<div id="nav-to-top" class="el_navToTop">
				<figure class="el_navToTop_arrow">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
				</figure><!-- /.el_navToTop_arrow -->
				<p class="el_navToTop_txt">
					Page Top
				</p><!-- /.el_navToTop_txt -->
			</div>
		</div>
	</main>
</div>



<?php
get_template_part('includes/footer');
get_footer();
?>