<?php
if (is_page('application')) {
	echo '<footer class="ly_footer ly_cont__white">';
} else {
	echo '<footer class="ly_footer">';
}
?>
<div class="ly_footer_inner">
	<ul class="bl_footerMenu">
		<li class="bl_footerMenu_item"><a href="#" class="bl_footerMenu_link" target="_blank" rel=”noopener noreferrer”>NPO法人ダミー団体名</a>

		</li>
		<!-- <li class="bl_footerMenu_item"><a href="#" class="bl_footerMenu_link">特定商取引法</a>
				</li> -->
		<li class="bl_footerMenu_item"><a href="<?php echo home_url(); ?>/terms" class="bl_footerMenu_link">利用規約</a>
		</li>
		<li class="bl_footerMenu_item"><a href="#" class="bl_footerMenu_link" target="_blank" rel=”noopener noreferrer”>プライバシーポリシー</a>

		</li>
		<li class="bl_footerMenu_item"><a href="<?php echo home_url(); ?>/me" class="bl_footerMenu_link">お問い合わせ</a>
		</li>
	</ul>
	<div class="bl_footer_logo-sns">
		<div class="bl_logo_footer">
			<a href="<?php echo home_url(); ?>" class="el_logoUnit">
				<div class="el_logoUnit_inner">
					<p class="el_logoUnit_text">
						Produced by LoremIpsum
					</p>
					<figure class="el_logoUnit_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_WEBSON.png" alt="">
					</figure>
				</div>
			</a>
		</div>
		<div class="bl_footer_subHeading">
		ダミーテキストダミーテキスト<br>
		ダミーテキスト
		</div>
		<div class="bl_footer_sns-copyright">
			<div class="bl_footer_sns">
				<ul class="el_sns_wrapper">
					<li class="el_sns_item">
						<a href="https://twitter.com/horumont" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_twitter.png" alt="">
						</a>
					</li>
					<li class="el_sns_item">
						<a href="https://www.instagram.com/horumont" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_instagram.png" alt="">
						</a>
					</li>
					<li class="el_sns_item">
						<a href="https://www.facebook.com/horumont" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_facebook.png" alt="">
						</a>
					</li>
					<li class="el_sns_item">
						<a href="https://www.youtube.com/channel/UChUQasMoEuBQ73wxuTq0_ZA" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_youtube.png" alt="">
						</a>
					</li>
					<li class="el_sns_item">
						<a href="https://note.com/horumont" class="el_sns_link" target="_blank" rel=”noopener noreferrer”>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/icon_note.png" alt="">
						</a>
					</li>
				</ul>
			</div>
			<div class="bl_footer_copyright_wrapper">
				<p class="bl_footer_copyright">
					<span style="font-family:'Times New Roman', 'Times';">&copy;</span> 2022 Lorem.
				</p>
			</div>
		</div>
	</div>
	<div class="bl_footer_copyright_wrapper bl_footer_copyright_wrapper__sp">
		<p class="bl_footer_copyright">
			<span style="font-family:'Times New Roman', 'Times';">&copy;</span> 2022 Lorem.
		</p>
	</div>
</div>
</footer>
</div>
