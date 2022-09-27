<?php if (is_user_logged_in()) : ?>
	<style type="text/css">
		.top-head {
			margin-top: 32px;
		}

		@media screen and (max-width: 780px) {
			.top-head {
				margin-top: 46px;
			}
		}

		@media screen and (max-width: 600px) {
			#wpadminbar {
				position: fixed !important;
			}
		}
	</style>
<?php endif; ?>



<div class="ly_fixedWrapper top-head">
	<div class="ly_header_wrapper">
		<header id="top" class="ly_header">
			<div class="ly_header_inner">
				<div class="bl_hLogo_wrapper">
					<?php get_template_part('includes/get_headerLogo'); ?>
				</div>
			</div>
		</header>
		<button class="el_hamburgerBtn_wrapper" id="ham">
			<div class="el_hamburgerBtn" id="hamBtn">
				<div class="el_hamburgerBtn_inner">
					<span class="el_hamburgerBtn_line"></span>
					<span class="el_hamburgerBtn_line"></span>
					<span class="el_hamburgerBtn_line"></span>
				</div>
			</div>
		</button>
		<section class="bl_navUnit" id="navUnit">
			<nav class="bl_convNav">
				<ul class="bl_convNav_inner">
					<li class="bl_convNav_desc">
						「自分の人生をデザインする」<br>
						探究型学習教材サイト
					</li>
					<li class="bl_convNav_unitSp_wrapper">
						<ul class="bl_convNav_unitSp">
							<?php if (SwpmMemberUtils::is_member_logged_in()) : ?>
								<li>
									<a class="bl_convNav_item bl_convNav_item__login" href="<?php echo home_url(); ?>?swpm-logout=true">ログアウト</a>
								</li>
								<li>
									<a class="bl_convNav_btn__login el_spBtn" href="<?php echo home_url(); ?>?swpm-logout=true">ログアウト</a>
								</li>
								<li class="el_btn_wrapper">
									<a class="el_btn el_btn__join el_btn__profile el_spBtn" href="<?php echo home_url(); ?>/member/profile/">プロフィール編集</a>
								</li>
								<!-- <a href="?swpm-logout=true">logout</a> -->
							<?php else : ?>
								<li>
									<a class="bl_convNav_item bl_convNav_item__login" href="<?php echo home_url(); ?>/member/login">ログイン</a>
								</li>
								<li>
									<a class="bl_convNav_btn__login el_spBtn" href="<?php echo home_url(); ?>/member/login">ログイン</a>
								</li>
								<li class="el_btn_wrapper">
									<a class="el_btn el_btn__join el_spBtn" href="<?php echo home_url(); ?>/member/application">会員登録</a>
								</li>
							<?php endif; ?>
						</ul>
					</li>
					<li class="el_btn_wrapper el_btn_wrapper_contact">
						<a class="el_btn el_btn__contact el_spBtn" href="<?php echo home_url(); ?>/me#contact-form">お問い合わせ</a>
					</li>
					<li class="bl_convNav_forHelp">
						<a class="bl_convNav_item bl_convNav_item__forHelp" href="#" target="_blank" rel=”noopener noreferrer”>相談先・支援団体一覧</a>
					</li>
				</ul>
			</nav>
			<nav class="bl_globalNav">
				<ul class="bl_globalNav_inner">
					<li class="bl_globalNav_item_wrapper">
						<div id="nav_material-dd" class="ddMenuWrapper">
							<!-- <a class="bl_globalNav_item" href="/pilcon/lessons"> -->
							<a class="bl_globalNav_item" href="javascript:void(0)">
								教材検索・ダウンロード
								<figure class="bl_globalNav_arrow" id="globalNav_arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d.png" alt="">
								</figure>
							</a>
						</div>
						<div class="bl_globalNav_nested_wrapper">
							<ul class="bl_globalNav_nested" id="globalNavNested">
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons">授業・コースを検索する</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=sexual-diversity&value02=gender">性の多様性・ジェンダー</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=body-image&value02=media-literacy">ボディイメージ・メディアリテラシー</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=consent&value02=personal-safety">同意・性暴力</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=information-ethics&value02=relationships">情報モラル・健康的な人間関係</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=sti">性感染症</a>
								</li>
								<li class="bl_globalNav_item_wrapper bl_globalNav_item_wrapper__bgWhite">
									<a class="bl_globalNav_item bl_globalNav_item__bgWhite" href="<?php echo home_url(); ?>/lessons?value01=pregnancy&value02=contraception&value03=life-plan">妊娠・避妊・ライフプラン</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="bl_globalNav_item_wrapper">
						<a class="bl_globalNav_item" href="<?php echo home_url(); ?>/news">授業をする前に</a>
					</li>
					<li class="bl_globalNav_item_wrapper">
						<a class="bl_globalNav_item" href="<?php echo home_url(); ?>/achievements">導入実績</a>
					</li>
					<li class="bl_globalNav_item_wrapper">
						<a class="bl_globalNav_item" href="<?php echo home_url(); ?>/aboutus">私たちについて</a>
					</li>
					<li class="bl_globalNav_item_wrapper">
						<a class="bl_globalNav_item" href="<?php echo home_url(); ?>/me">Q&A</a>
					</li>
					<li class="bl_globalNav_sns">
						<ul class="el_sns_wrapper">
							<li class="el_sns_item">
								<a href="https://twitter.com/pilcon_jp" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_twitter.png" alt="">
								</a>
							</li>
							<li class="el_sns_item">
								<a href="https://www.instagram.com/pilcon_jp/" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_instagram.png" alt="">
								</a>
							</li>
							<li class="el_sns_item">
								<a href="https://www.facebook.com/pilcon.jp" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_facebook.png" alt="">
								</a>
							</li>
							<li class="el_sns_item">
								<a href="https://www.youtube.com/c/pilconvideo" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_youtube.png" alt="">
								</a>
							</li>
							<li class="el_sns_item">
								<a href="https://note.com/pilcon_jp" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_note.png" alt="">
								</a>
							</li>
						</ul>
						<div class="bl_closeSpMenu">
							<a class="bl_closeSpMenu_link" id="closeSpMenu" href="javascript:void(0)">メニューを閉じる</a>
						</div>
					</li>
				</ul>
			</nav>
		</section>
	</div>
</div>
