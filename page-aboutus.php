<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- ドロップダウンメニュー -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<?php get_template_part('includes/ddMenu') ?>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main visual -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<section class="ly_hero ly_hero__about">
	<div class="bl_mv_subPage_wrapper">
		<div class="bl_mv_subPage bl_mv_subPage__about">
			<div class="bl_mv_subPage_cont">
				<div class="bl_mv_subPage_txtWrapper">
					<h1>ダミーテキストダミーテキスト</h1>
				</div>
			</div>
			<div class="bl_mv_subPage_dotWrapper">
				<figure class="el_dot" id="el_dot__about_01">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/el_dot__about_01.svg" alt="">
				</figure>
				<figure class="el_dot" id="el_dot__about_02">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/el_dot__about_02.svg" alt="">
				</figure>
			</div>


		</div>
	</div>
</section>


<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_wrapAll">

	<div class="ly_cont ly_cont__white ly_cont__about">

		<main>
			<div class="ly_main">

				<!-- // パンくずリスト-------------------- -->

				<?php get_template_part('includes/get_breadcrumb'); ?>
				<!-- // メインコンテンツ　-------------------- -->
				<div class="ly_dot">
					<!-- PCのmvItem -->
					<figure class="el_dot el_dot_about0101" id="el_dot_about0101">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0101.svg" alt="">
					</figure>
				</div>

				<section class="bl_about_headingUnit">
					<h2 class="el_subPage_heading">
						私たちについて
					</h2>

					<p class="el_subPage_lead">
					ダミーテキストダミーテキストダミーテキスト<br class="active_pc">
					ダミーテキストダミーテキストダミーテキスト<br class="active_pc">
					ダミーテキストダミーテキスト

					</p>
				</section>


				<!-- スマホのドット背景 -->
				<figure class="el_dot__SP el_dot__SP_about01" id="el_dot_SP_about01">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_aboutSP_01.svg" alt="">
				</figure>


				<section class="bl_mediaAbout">
					<div class="bl_mediaAbout_inner">
						<div class="bl_mediaAbout_txt">
							<p>
							ダミーテキスト<br>
							ダミーテキストダミーテキスト<br>
							ダミーテキストダミーテキスト?<br><br>
							ダミーテキスト<br class="active_tb-pc">
							ダミーテキストダミーテキスト<br>
							ダミーテキストダミーテキスト<br>
								<br>
								ダミーテキストダミーテキストダミーテキスト
							</p>
						</div>
						<div class="bl_mediaAbout_wrapper">
							<div class="bl_mediaAbout_slide">
								<figure class="bl_mediaAbout_img">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/matthew-henry-3Bq5lBO1NsU-unsplash.jpg" alt="男性の教員が生徒に指導をする様子">
								</figure>
							</div>
							<div class="bl_mediaAbout_slide">
								<figure class="bl_mediaAbout_img">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/emmanuel-butron-zapata-qjUGI27bk_c-unsplash.jpg" alt="女性の先生と２人の生徒が路上で談笑する様子">
								</figure>
							</div>
							<div class="bl_mediaAbout_slide">
								<figure class="bl_mediaAbout_img">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/jc-gellidon-TPZNooS1Meg-unsplash.jpg" alt="４人の学生が楽しそうに走っている様子">
								</figure>
							</div>
						</div>
					</div>
				</section>

				<div class="ly_dot">
					<!-- PCのmvItem -->
					<figure class="el_dot el_dot_about0201" id="el_dot_about0201">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0201.svg" alt="">
					</figure>
					<figure class="el_dot el_dot_about0202" id="el_dot_about0202">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0202.svg" alt="">
					</figure>
				</div>

				<!-- スマホのドット背景 -->
				<figure class="el_dot__SP el_dot__SP_about02" id="el_dot_SP_about02">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_aboutSP_02.svg" alt="">
				</figure>


				<section class="bl_impAbout">
					<div class="el_subPage_heading bl_impAbout_heading">
						<h2>
							このプロジェクトで<br class="active_sp">大事にしていること
						</h2>
					</div>

					<ul class="bl_impAbout_cardUnit">

						<li class="bl_impAbout_item_wrapper">

							<div class="bl_impAbout_cardItem">
								<div class="bl_impAbout_cardItem_inner">
									<div class="bl_impAbout_cardBadge">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/imp/ico_video@2x.png" alt="">
									</div>
									<figure class="bl_impAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/impAbout_video@2x.jpg" alt="">
									</figure>
									<div class="bl_impAbout_txt">
										<h3>動画コンテンツが充実</h3>
									</div>
								</div>
							</div>

							<div class="bl_impAbout_cardItem">
								<div class="bl_impAbout_cardItem_inner">
									<div class="bl_impAbout_cardBadge">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/imp/ico_diversity@2x.png" alt="">
									</div>
									<figure class="bl_impAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/impAbout_diversity@2x.jpg" alt="">
									</figure>
									<div class="bl_impAbout_txt">
										<h3>ダミーテキストダミーテキスト</h3>
									</div>
								</div>
							</div>

						</li>
						<li class="bl_impAbout_item_wrapper">

							<div class="bl_impAbout_cardItem">
								<div class="bl_impAbout_cardItem_inner">
									<div class="bl_impAbout_cardBadge">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/imp/ico_specialist@2x.png" alt="">
									</div>
									<figure class="bl_impAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/impAbout_specialist@2x.jpg" alt="">
									</figure>
									<div class="bl_impAbout_txt">
										<h3>専門家が監修</h3>
									</div>
								</div>
							</div>

							<div class="bl_impAbout_cardItem">
								<div class="bl_impAbout_cardItem_inner">
									<div class="bl_impAbout_cardBadge">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/imp/ico_interactive@2x.png" alt="">
									</div>
									<figure class="bl_impAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/impAbout_interactive@2x.jpg" alt="">
									</figure>
									<div class="bl_impAbout_txt">
										<h3>対話的な学習プラン</h3>
									</div>
								</div>
							</div>

							<div class="bl_impAbout_cardItem">
								<div class="bl_impAbout_cardItem_inner">
									<div class="bl_impAbout_cardBadge">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/imp/ico_lecture@2x.png" alt="">
									</div>
									<figure class="bl_impAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/about/impAbout_lecture@2x.jpg" alt="">
									</figure>
									<div class="bl_impAbout_txt">
										<h3>講演依頼にも対応</h3>
									</div>
								</div>
							</div>

						</li>

					</ul>


					<!-- スマホのドット背景 -->
					<figure class="el_dot__SP el_dot__SP_about03" id="el_dot_SP_about03">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_aboutSP_03.svg" alt="">
					</figure>
				</section>




			</div>
			<div class="ly_cont ly_cont__yellow">
				<div class="ly_main">

					<div class="ly_dot">
						<!-- PCのmvItem -->
						<figure class="el_dot el_dot_about0301" id="el_dot_about0301">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0301.svg" alt="">
						</figure>
						<figure class="el_dot el_dot_about0302" id="el_dot_about0302">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0302.svg" alt="">
						</figure>
						<figure class="el_dot el_dot_about0401" id="el_dot_about0401">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0401.svg" alt="">
						</figure>
					</div>




					<section id="msgAbout" class="bl_msgAbout">
						<div class="el_subPage_heading bl_msgAbout_heading">
							<h2>
								制作者メッセージ
							</h2>
						</div>

						<div class="bl_msgAbout_article first">
							<div class="bl_msgAbout_article_inner">
								<div class="bl_msgAbout_creator">
									<figure class="bl_msgAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/nikita-kachanovsky-uWIxP_lBjik-unsplash.jpg" alt="">
									</figure>
									<div class="bl_msgAbout_nameUnit">
										<div class="bl_msgAbout_name">
											<h3>代表者の名前です</h3>
										</div>
										<div class="bl_msgAbout_desc">
											<p>
												プロジェクト ディレクター<br>
												代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール代表者プロフィール

											</p>
										</div>
									</div>
								</div>
								<div class="bl_msgAbout_messageUnit">
									<div class="bl_msgAbout_messageHeading">
										<h3>メッセージ</h3>
									</div>
									<div class="bl_msgAbout_messageContent">
										<p>
											代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ代表者メッセージ
										</p>
									</div>
								</div>
							</div>
						</div>


						<div class="bl_msgAbout_article">
							<div class="bl_msgAbout_article_inner">
								<div class="bl_msgAbout_creator">
									<figure class="bl_msgAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/kabo-NT07K1yI9TE-unsplash.jpg" alt="">
									</figure>
									<div class="bl_msgAbout_nameUnit">
										<div class="bl_msgAbout_name">
											<h3>制作者の名前１</h3>
										</div>
										<div class="bl_msgAbout_desc">
											<p>
												制作者の名前１役職<br>
												制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール

											</p>
										</div>
									</div>
								</div>
								<div class="bl_msgAbout_messageUnit">
									<div class="bl_msgAbout_messageHeading">
										<h3>メッセージ</h3>
									</div>
									<div class="bl_msgAbout_messageContent">
										<p>
											制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="bl_msgAbout_article">
							<div class="bl_msgAbout_article_inner">
								<div class="bl_msgAbout_creator">
									<figure class="bl_msgAbout_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/bruce-galpin-h7oZAHnS9_E-unsplash.jpg" alt="">
									</figure>
									<div class="bl_msgAbout_nameUnit">
										<div class="bl_msgAbout_name">
											<h3>制作者の名前</h3>
										</div>
										<div class="bl_msgAbout_desc">
											<p>
												プログラムプランナー<br>
												制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール制作者プロフィール
											</p>
										</div>
									</div>
								</div>
								<div class="bl_msgAbout_messageUnit">
									<div class="bl_msgAbout_messageHeading">
										<h3>メッセージ</h3>
									</div>
									<div class="bl_msgAbout_messageContent">
										<p>
											制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ制作者メッセージ
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="ly_dot">
						<!-- PCのmvItem -->
						<figure class="el_dot el_dot_about0402" id="el_dot_about0402">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0402.svg" alt="">
						</figure>
						<!-- <figure class="el_dot el_dot_about0501" id="el_dot_about0501">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0501.svg" alt="">
						</figure> -->
						<figure class="el_dot el_dot_about0502" id="el_dot_about0502">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0502.svg" alt="">
						</figure>
					</div>

				</div>
			</div>
			<div class="ly_cont ly_cont__white">
				<div class="ly_main">

					<div class="ly_dot">
						<!-- PCのmvItem -->
						<figure class="el_dot el_dot_about0601" id="el_dot_about0601">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0601.svg" alt="">
						</figure>
					</div>


					<section class="bl_intr-spvisor">
						<div class="el_subPage_heading bl_intr-spvisor_heading">
							<h2>
								監修者一覧
							</h2>
						</div>

						<div class="bl_intr-spvisor_article first">
							<div class="bl_intr-spvisor_article_inner">
								<div class="bl_intr-spvisor_creator">
									<figure class="bl_intr-spvisor_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/chris-benson-rVxDw6JtRJg-unsplash.jpg" alt="">
									</figure>
									<div class="bl_intr-spvisor_nameUnit">
										<div class="bl_intr-spvisor_name">
											<h3>監修者の名前</h3>
										</div>
										<div class="bl_intr-spvisor_title">
											<h4>監修者肩書</h4>
										</div>
										<div class="bl_intr-spvisor_desc">
											<p>
												監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール
											</p>
										</div>
										<div class="bl_msgAbout_messageUnit">
											<div class="bl_msgAbout_messageHeading">
												<h3>メッセージ</h3>
											</div>
											<div class="bl_msgAbout_messageContent">
												<p>
													監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
						<div class="bl_intr-spvisor_article">
							<div class="bl_intr-spvisor_article_inner">
								<div class="bl_intr-spvisor_creator">
									<figure class="bl_intr-spvisor_img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/dogs/geo-chierchia-Fkwlgk2vQdA-unsplash.jpg" alt="">
									</figure>
									<div class="bl_intr-spvisor_nameUnit">
										<div class="bl_intr-spvisor_name">
											<h3>監修者の名前</h3>
										</div>
										<div class="bl_intr-spvisor_title">
											<h4>監修者肩書</h4>
										</div>
										<div class="bl_intr-spvisor_desc">
											<p>
												監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール監修者プロフィール
											</p>
										</div>
										<div class="bl_msgAbout_messageUnit">
											<div class="bl_msgAbout_messageHeading">
												<h3>メッセージ</h3>
											</div>
											<div class="bl_msgAbout_messageContent">
												<p>
													監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ監修者メッセージ
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>






					</section>

					<section class="bl_collaborator">
						<div class="el_subPage_heading">
							<h2>
								制作協力
							</h2>
						</div>
						<p class="el_subPage_lead">
							教材開発にあたり、アドバイス・ご協力をいただいた皆様
						</p>
						<section class="bl_collaborator_container">
							<p class="bl_collaborator_desc">（五十音順・敬称略）
							</p>
							<table class="bl_collaborator_table">
								<tbody class="bl_collaborator_tbody">
									<tr class="bl_collaborator_row">
										<td class="bl_collaborator_name">
											協力者名前
										</td>
										<td class="bl_collaborator_belongs">
											肩書 理事長
										</td>
									</tr>
									<tr class="bl_collaborator_row">
										<td class="bl_collaborator_name">
											協力者名前
										</td>
										<td class="bl_collaborator_belongs">
											肩書 理事長
										</td>
									</tr>
									<tr class="bl_collaborator_row">
										<td class="bl_collaborator_name">
											協力者名前
										</td>
										<td class="bl_collaborator_belongs">
											肩書 理事長
										</td>
									</tr>
									<tr class="bl_collaborator_row">
										<td class="bl_collaborator_name">
											協力者名前
										</td>
										<td class="bl_collaborator_belongs">
											肩書 理事長
										</td>
									</tr>

									<tr class="bl_collaborator_row bl_collaborator_row__2cols">
										<td class="bl_collaborator_name" colspan="2">
											協力者 団体
										</td>
									</tr>
									<tr class="bl_collaborator_row bl_collaborator_row__2cols">
										<td class="bl_collaborator_name" colspan="2">
											協力者 団体
										</td>
									</tr>
									<tr class="bl_collaborator_row bl_collaborator_row__2cols">
										<td class="bl_collaborator_name" colspan="2">
											協力者 団体
										</td>
									</tr>
									<tr class="bl_collaborator_row bl_collaborator_row__2cols">
										<td class="bl_collaborator_name" colspan="2">
											協力者 団体
										</td>
									</tr>
									<tr class="bl_collaborator_row bl_collaborator_row__2cols">
										<td class="bl_collaborator_name" colspan="2">
											協力者 団体
										</td>
									</tr>

								</tbody>
							</table>



						</section>


					</section>


					<!-- スマホのドット背景 -->
					<figure class="el_dot__SP el_dot__SP_about04" id="el_dot_SP_about04">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_aboutSP_04.svg" alt="">
					</figure>
					<div class="ly_dot">
						<!-- PCのmvItem -->
						<figure class="el_dot el_dot_about0701" id="el_dot_about0701">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0701.svg" alt="">
						</figure>
						<figure class="el_dot el_dot_about0702" id="el_dot_about0702">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_about/bg_dot_about0702.svg" alt="">
						</figure>
					</div>

				</div>
			</div>



			<!-- ページトップへのナビゲーション -->
			<div id="nav-to-top" class="el_navToTop">
				<figure class="el_navToTop_arrow">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/arrows/arrow_d2x.png" alt="">
				</figure>
				<p class="el_navToTop_txt">
					Page Top
				</p>
			</div>
		</main>
		<?php get_template_part('includes/footer') ?>
		<?php get_footer(); ?>
