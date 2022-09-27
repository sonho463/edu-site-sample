<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>


<section class="ly_hero ly_hero__application">
	<div class="bl_mv_subPage_wrapper bl_mv_subPage_wrapper__conv">
		<div class="bl_mv_subPage">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>会員登録</h1>
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

			<section class="bl_appDesc">
				<div class="bl_appDesc_lead">
					<p>会員登録をすると</p>
				</div>
				<div class="bl_appDesc_text">
					<h2>ライフデザインオンラインの<br class="active_sp"><span>すべての教材をご利用</span><br class="active_sp">いただけます</h2>
				</div>

			</section>
			<section class="bl_appDesc_illustrated">
				<ul class="bl_appDesc_illustrated_inner">
					<li class="bl_appDesc_illustrated_item bl_appDesc_illustrated_item__text">
						<h3>
							テキスト<br>スライド資料
						</h3>
					</li>
					<li class="bl_appDesc_illustrated_item bl_appDesc_illustrated_item__movie">
						<h3>動画授業</h3>
					</li>
					<li class="bl_appDesc_illustrated_item bl_appDesc_illustrated_item__worksheet">
						<h3>ワークシート</h3>
					</li>
					<li class="bl_appDesc_illustrated_item bl_appDesc_illustrated_item__questionary">
						<h3>アンケート</h3>
					</li>
				</ul>
			</section>
			<div class="triangle">

			</div>
			<section class="bl_appDesc_close">
				<div class="bl_appDesc_close_inner">
					<p>教材を全部まとめて、<br class="active_sp">いつでもなんどでも<br>無料（教員のみ）</p>
					<p>※現在、教員以外の方は会員登録いただくことができません。</p>
				</div>
			</section>

			<section class="bl_appForm">
				<section class="bl_appFrom_heading el_subPage_heading">
					会員登録<br class="active_sp">お申込みフォーム
				</section>
				<section class="bl_appForm_flow">
					<ul class="bl_appForm_flowUnit">
						<li class="bl_appForm_flowUnit_item_wrapper">
							<div class="bl_appForm_flowUnit_item bl_appForm_flowUnit_item__active">
								<div class="bl_appForm_flowUnit_item_inner ">
									<p class="bl_appForm_flowUnit_text">お申込み<br class="active_sp">フォーム</p>
									<p class="bl_appForm_flowUnit_text active_sp">①</p>
								</div>
							</div>
						</li>
						<li class="bl_appForm_flowUnit_item_wrapper">
							<div class="bl_appForm_flowUnit_item">
								<div class="bl_appForm_flowUnit_item_inner ">
									<p class="bl_appForm_flowUnit_text">
										メールの<br>
										本登録画面への<br>
										リンクをクリック
									</p>
									<p class="bl_appForm_flowUnit_text active_sp">②</p>

								</div>
							</div>
						</li>
						<li class="bl_appForm_flowUnit_item_wrapper">
							<div class="bl_appForm_flowUnit_item">
								<div class="bl_appForm_flowUnit_item_inner ">
									<p class="bl_appForm_flowUnit_text">会員登録<br class="active_sp">情報を入力</p>
									<p class="bl_appForm_flowUnit_text active_sp">③</p>

								</div>
							</div>
						</li>
						<li class="bl_appForm_flowUnit_item_wrapper">
							<div class="bl_appForm_flowUnit_item">
								<div class="bl_appForm_flowUnit_item_inner ">
									<p class="bl_appForm_flowUnit_text">登録申込み<br class="active_sp">完了</p>
									<p class="bl_appForm_flowUnit_text active_sp">④</p>

								</div>
							</div>
						</li>


					</ul>

				</section>
				<section class="bl_appForm_desc">
					<p class="bl_appForm_txt">
						皆様にご記入いただいた情報が許可なく外部に公表されることは一切ございません。<br>
						なお、ご登録内容によっては、確認のご連絡をさせていただくことがございますので、予めご了承のほど宜しくお願いいたします。
					</p>
				</section>

				<?php the_content(); ?>

				<!-- ページトップへのナビゲーション -->
				<div id="nav-to-top" class="el_navToTop">
					<figure class="el_navToTop_arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
					</figure><!-- /.el_navToTop_arrow -->
					<p class="el_navToTop_txt">
						Page Top
					</p><!-- /.el_navToTop_txt -->
				</div>
			</section>

		</div>
	</main>
</div>

<?php
get_template_part('includes/footer'); ?>
<script>
	const selectBox = document.querySelector('#history');
	console.log(selectBox);
	// selectBox.setAttribute('required');
	selectBox.required = true;

	const optionLabel = selectBox.firstElementChild
	console.log(optionLabel);
	optionLabel.disabled = true;
	optionLabel.selected = true;
</script>
<?php get_footer();
?>
