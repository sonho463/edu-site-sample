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

			<section id="FAQ" class="bl_FAQ">
				<section class="bl_FAQ_heading">
					<h2 class="el_subPage_heading">
						よくある質問
					</h2>
				</section>

				<section class="bl_FAQ_categoryNav">
					<div class="bl_FAQ_categoryNav_inner">
						<div class="ly_threeBtn">
							<a href="#FAQ_member" class="el_navButton">
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
							<!-- <a href="#FAQ_payment" class="el_navButton">
								<div class="el_navButton_inner">
									<p class="el_navButton_heading">
										お支払いについて
									</p>
								</div>
							</a> -->
							<!-- <a href="#FAQ_service" class="el_navButton">
								<div class="el_navButton_inner">
									<p class="el_navButton_heading">
										サービス概要・仕様
									</p>
								</div>
							</a> -->
							<!-- <a href="#FAQ_etc" class="el_navButton">
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
					<!-- 会員について -->
					<section id="FAQ_member" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								会員について
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員になるには、どうすれば良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											お手数ですが、会員登録ページにてご登録をお願いします。<br>
											なお、会員登録ページには、ヘッダーメニュー「会員登録」ボタンから移動できます。 </p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員になる条件はありますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ライフデザインオンラインで提供されるコンテンツは、ご登録いただいた会員の方がご利用いただけます。会員の登録対象としては、学校教員の方を対象にしております。今後、有償にて、学校教員の方以外の教育・医療・福祉に関わる方や、一般の方にもご利用いただけるようにする予定です。<br>

											また、ダミー団体名では登録会員の方以外でもご購入いただける教材として「性の健康・リレーションシップ教育教材キット」の他、小冊子やDVDの販売や、時間数やご希望テーマに応じた出張講演（オンライン対応可）も行っています。
											ぜひ、こちらもあわせてご活用ください。<br>
											参照：<a href="https://pilcon.org/activities" target="_blank" rel="noopener noreferrer">ダミー団体名活動内容（ダミー団体名サイト）</a>
										</p>
									</div>
								</div>
							</div>

							<!-- <div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員区分に違いはありますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											会員には、「教員」「ダミー団体名会員」「一般」という区分があります。基本的には一般会員として有償で利用いただきます。ただし、教員の方はご所属の学校名を明示いただく代わりに無償でご提供し、ダミー団体名会員の方はすでにお支払いいただていることから○○（無償or半額？）で提供します。
										</p>
									</div>
								</div>
							</div> -->

							<!-- <div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										なぜ無料会員と有料会員の区分があるのですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ライフデザインオンラインの目的は、○○であり、まず学校教育の現場で導入することを目指しています。そのため、教員の方の敷居を下げるために、現役の教員の方は特別に無償とし、それ以外の方は有償で提供しています。また、日頃よりダミー団体名の活動に寄付いただいている方も優待枠でのご提供を可能としております。
										</p>
									</div>
								</div>
							</div> -->

							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員をやめたい時にはどうすればいいですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											会員を退会されたい際には、問い合わせフォームからその旨をご連絡をお願いします。なお、動画教材はダウンロード不可のため、会員のみがオンライン上でご視聴・利用いただけます。
										</p>
									</div>
								</div>
							</div>

							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										家族や友人にアカウントを貸すことはできますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											第三者へのアカウントの貸与はできません。ご家族やご友人にご利用いただく場合も、必ず個人で会員登録していただく必要があります。
										</p>
									</div>
								</div>
							</div>

						</div>

					</section>
					<!-- ログインについて -->
					<section id="FAQ_login" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								ログインについて
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員IDはどのように取得しますか
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											会員登録後、会員IDとパスワードを発行します。
											お手数ですが、会員登録ページにてご登録をお願いします。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										会員IDやパスワードを忘れてしまった場合はどうすれば良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											会員IDは登録メールアドレスになります。パスワードは再発行が可能です。「ログイン」ページにある「パスワードをお忘れですか？」リンクからパスワード再発行ページにお進みください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										FacebookやGoogleなどで連携したログインはできますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ソーシャルログイン（SNSなど他のサービスを利用した認証）には対応していません。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										最初に登録したアカウント情報を修正したい場合はどうすれば良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											初めに登録していただいた情報を変更する場合は、右上にあるプロフィール編集ボタンを押下していただき、ご自身で登録内容を修正していただけます。
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- 教材・授業について -->
					<section id="FAQ_lessons" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								教材・授業について
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										教材に掲載されている内容やイラストなどの素材を、使用しても良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											教材や動画など本サービスで提供している内容について、授業目的以外での無断転載や再配布、インターネット・SNS上での公開はご遠慮いただいております。詳細は<a href="<?php echo home_url(); ?>/terms/">利用規約</a>をご確認下さい。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										教材は何をベースに開発されていますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ライフデザインオンラインの教材は、UNESCOなど国際機関や専門家によって開発された<a href="https://unesdoc.unesco.org/ark:/48223/pf0000374167" target="_blank" rel="noopener noreferrer">「国際セクシュアリティガイダンス」</a>にあるアプローチとキーコンセプトにもとづいて構成されています。<br>
											その上で、より日本の学校教育のコンテクストで実践されやすように、産婦人科医、教育学専門家、ユース支援専門家などによる監修の元、ダミー団体名の知見を加えて教材内容を編集いたしました。プログラム全体の学習目標は、以下の通りです。<br>
											・自分を大切にし、お互いを尊重し合う関係とはどのようなことかを理解する<br>
											・メディア情報には偏った/有害なメッセージを含むことを理解し、批判的に見て、議論することができる<br>
											・思春期の心身の健康についての知識を身に着け、リスクを少なくする選択肢を考え実行でき、必要に応じて相談ができる<br>
											・健康的で他者と尊重し合える関係性を築くことができる<br>
											・「誰一人取り残さない」を理念とするSDGs（持続可能な開発目標）を多様な視点から探究し、特に多様性やジェンダー平等についての理解を深め、主体的に実践する方法を考えることができる<br>
											・様々な生き方や人間関係、健康に関することを、自分自身と向き合いながら、主体的に考え、価値観や背景の異なる参加者同士でオープンに話し合える<br>
											教材開発者メンバーのプロフィールは<a href="<?php home_url(); ?>/aboutus#msgAbout">こちら</a>をご確認ください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										学校で導入する際に、特に気をつけた方がいい内容はなんでしょうか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											学校の授業でできる工夫として、こちらの<a href="<?php echo home_url() ?>/news">「授業をする前に」のコラム</a>、および「ダウンロード教材」にある先生向け資料、「授業の流れ」をご覧ください。
											参照：<a href="https://pilcon.org/help-line/parents" target="_blank" rel="noopener noreferrer">大人・保護者向けページ（ダミー団体名サイト）</a><br>
											※学校の先生向けのトレーニングプログラムも提供する予定（来年予定）
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										購入前に講座内容を確認することはできますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											各コマページおよびプレビュー動画にて、それぞれテーマで取り扱う内容について簡単に紹介しています。 </p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										カリキュラム内容について質問したい場合はどうすれば良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											カリキュラム内容について確認したい場合は、<a href="<?php echo home_url(); ?>/me#contact-form">こちらのお問合せフォーム</a>からご連絡ください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										ライフデザインオンラインは、中学生や大学生にも実施可能ですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											本プログラムは高校生を対象に想定していますが、中学生や、専門学校生、大学生にも応用可能な内容となっています。しかしながら、特に中学校段階では、学習指導要領において性交や避妊、中絶等については明記されていません。そのため、保護者や学校全体の理解を得たうえで、集団教育と個別指導を組み合わせて考えていくことが想定されます。その一方で、性感染症の予防教育は、中学校段階での実施がより効果的でという調査結果もあります。また、専門学校、高等専門学校、大学など、年齢が上がるとより深い議論が展開されることが想定されるため、ディスカッション時間を長めに設定することがおすすめされます。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										ライフデザインオンラインでの授業とダミー団体名の出張講演の違いはありますか？ </h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ライフデザインオンラインでは、教材を用いて学校教員の方自身が実施いただくプログラムとなります。ダミー団体名の出張講演の場合、経験豊富なスタッフや若者ボランティアによる講座の実施となります。学校側のニーズをお伺いしながら、生徒・学生への事前アンケートも参考に、ご依頼いただける時間数に応じて提案・実施させていただきます。料金などは時間数・内容等により変動しますので、詳しくはお問合せ・ご相談ください。また、ダミー団体名では生徒・学生向けだけではなく、教員向けや保護者向けにも講演のご依頼をお受けしております。
										</p>
									</div>
								</div>
							</div>

							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										利用に必要な環境はありますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											授業検索や教材やアンケートなどのコンテンツを表示・ダウンロードするにあたり、インターネットに接続した端末（PCやスマートフォン、タブレットなど）が必要です。
										</p>
									</div>
								</div>
							</div>

							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										オフライン環境で利用できますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											ダウンロードした教材やアンケートなどのコンテンツは、オフライン（インターネット接続がない環境）でご利用いただけます。印刷などの手段によって、配布ください。なお、動画はサイト内で会員ログイン時のみ視聴が可能です。

										</p>
									</div>
								</div>
							</div>

						</div>
					</section>
					<!-- お支払いについて -->
					<!-- <section id="FAQ_payment" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								お支払いについて
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										お支払いの頻度は
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											月額利用料をお支払いいただきます。
											金額については、サービス利用料のページをご参照ください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										お支払いはどのようにすればよいですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											クレジットカード決済をお願いしております。お手数ですが、会員登録時にクレジット決済情報をご登録ください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										決済情報を変更するにはどうすれば良いですか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											お支払いのA
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										クレジットカード決済以外は選択できますか？
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											基本的には、クレジットカード決済をお願いしております。
											ただし、法人で請求書払いをご指定の場合など、どうしても他の決済手段でないとならない場合に限り、ご相談を受け付けます。ご要望の場合は、お問い合わせフォームよりご相談ください。
										</p>
									</div>
								</div>
							</div>
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										請求日/引き落とし日がいつになるか確認したい
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											お支払いのA
										</p>
									</div>
								</div>
							</div>

						</div>
					</section> -->
					<!-- サービス概要・仕様 -->
					<!-- <section id="FAQ_service" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								サービス概要・仕様
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<div class="bl_FAQ_article_item">
								<div class="bl_FAQ_article_question">
									<h3 class="bl_FAQ_article_question_text">
										サービス概要・仕様の質問
									</h3>
								</div>
								<div class="bl_FAQ_article_answer">
									<div class="bl_FAQ_article_answer_inner">
										<p class="bl_FAQ_article_answer_text">
											サービス概要・仕様の回答
										</p>
									</div>
								</div>
							</div>
						</div>
					</section> -->
					<!-- その他 -->
					<!-- <section id="FAQ_etc" class="bl_FAQ_article">
						<div class="bl_FAQ_heading2_wrapper">
							<h3 class="bl_FAQ_heading2">
								その他
							</h3>
						</div>
						<div class="bl_FAQ_article_item_wrapper">
							<?php
							if (have_posts()) : while (have_posts()) : the_post();
									$contents = SCF::get('test');
									foreach ($contents as $fields) :
							?>
										<div class="bl_FAQ_article_item">
											<div class="bl_FAQ_article_question">
												<h3 class="bl_FAQ_article_question_text">
													<?php echo $fields['test-q'] ?>
												</h3>
											</div>
											<div class="bl_FAQ_article_answer">
												<div class="bl_FAQ_article_answer_inner">
													<div class="bl_FAQ_article_answer_text">
														<?php echo $fields['test-a'] ?>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
							<?php endwhile;
							endif; ?>
						</div>
					</section> -->
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
