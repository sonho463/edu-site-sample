<?php get_header('white'); ?>
<div class="ly_cont ly_cont__white ly_cont__registration">

	<main>
		<div class="ly_main">

			<section class="bl_appForm">
				<section class="bl_appFrom_heading el_subPage_heading">
					新規会員登録
				</section>
				<section class="bl_appForm_lead">
					<p>下記の内容に必要事項をご記入の上、会員登録をお願いします。</p>
				</section>
				<section class="bl_appForm_flow">
					<ul class="bl_appForm_flowUnit">
						<li class="bl_appForm_flowUnit_item_wrapper">
							<div class="bl_appForm_flowUnit_item">
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
							<div class="bl_appForm_flowUnit_item bl_appForm_flowUnit_item__active">
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

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile;
				endif; ?>

			</section>

		</div>
	</main>
</div>
<?php get_footer('white'); ?>
