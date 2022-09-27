<?php
// URLからのパラメータ（カテゴリのスラッグ）があればそれぞれ変数に代入

if (isset($_GET['value01'])) {
	$value01 = $_GET['value01'];
};
if (isset($_GET['value02'])) {
	$value02 = $_GET['value02'];
};
if (isset($_GET['value03'])) {
	$value03 = $_GET['value03'];
};

$cats = []; //スラッグを配列にまとめる

if (!empty($value01)) {
	array_push($cats, $value01);
}
if (!empty($value02)) {
	array_push($cats, $value02);
}
if (!empty($value03)) {
	array_push($cats, $value03);
}
if (!empty($value01)) {
	$cat_names = [];
	foreach ($cats as $cat) {
		$cat_term = get_term_by('slug', $cat, 'lessons_category');
		$cat_name = $cat_term->name;
		array_push($cat_names, $cat_name);
	};

	// 配列からタイトル文字列を生成
	foreach ($cat_names as $cat_name) {
		if ($cat_name === reset($cat_names)) {
			$title = '「' . $cat_name . '」';
		} else {
			$title =  $title . '・' . '「' . $cat_name . '」';
		}
	};

	$title = $title . 'の記事一覧';
} else {
	$title = '教材検索・ダウンロード';
}
// スラッグからポスト->nameを取得して配列にする

// $ary = ['gender', 'life-plan'];
$args = array(
	'post_type' => 'lessons',
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	// 'posts_per_page' => get_option('posts_per_page'), //表示する件数,
	// 'posts_per_page' => -1, //表示する件数,
	'tax_query' => array(
		array(
			'taxonomy' => 'lessons_category',
			'field'    => 'slug',
			'terms'    => $cats,
		),
	),
);
$args_all = array(
	'post_type' => 'lessons',
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	// 'posts_per_page' => get_option('posts_per_page'), //表示する件数,
	// 'posts_per_page' => -1, //表示する件数,
);



if (!empty($value01)) {
	$the_query = new WP_Query($args);
} else {
	$the_query = new WP_Query($args_all);
}
$home = get_home_url();
?>

<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
<!-- main contents -->
<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

<div class="ly_cont ly_cont__white ly_cont__result">
	<main>
		<div class="ly_main">

			<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
			<!-- main visual -->
			<!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->

			<section class="ly_hero ly_hero__category-archive">
				<div class="bl_cat-archive">
					<h1 class="bl_cat-archive_heading_text">
						<?php echo $title; ?>

					</h1>
				</div>

			</section>

			<!-- // パンくずリスト-------------------- -->
			<div class="bl_breadcrumb_wrapper">
				<?php breadcrumb('', $title); ?>
			</div>
			<?php $max_num = $the_query->max_num_pages ?>

			<!-- メインコンテンツ ------------------------->
			<section class="bl_result_cards">
				<ul class="bl_card_unit">
					<?php if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<li class="bl_card_wrapper">
								<a href="<?php the_permalink(); ?>" class="el_card">
									<div class="el_card_inner">
										<div class="el_card_imgBlock">
											<figure class="el_card_img">
												<?php get_template_part('includes/get_post_thumbnail'); ?>
											</figure><!-- /.el_card_img -->
										</div><!-- /.el_card_imgBlock -->
										<div class="el_card_txt">
											<div class="el_card_txt_inner">
												<h3 class="el_card_heading">
													<?php the_title(); ?>
												</h3><!-- /.el_card_heading -->
												<p class="el_card_desc">
													<?php $lessons_overview = scf::get('lessons_overview');
													$lessons_overview = wp_trim_words($lessons_overview, 50, '...');
													echo $lessons_overview; ?>
												</p><!-- /.el_card_desc -->
												<div class="el_tagUnit">
													<?php
													$terms = get_the_terms($id, 'lessons_category');
													if ($terms) {
														foreach ($terms as $term) :
															echo '<object>';
															echo '<a href="' . $home . '/lessons_category/' . $term->slug . '">';
															echo '<span class="el_card_badge el_tag">' . $term->name . '</span></a></object>';
														endforeach;
													}
													?>
												</div>
											</div><!-- /.el_card_tct_inner -->
										</div><!-- /.el_card_txt -->
									</div><!-- /.el_card_inner -->
								</a><!-- / .el_card -->
							</li><!-- /.bl_card_wrapper -->
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
						<p class="el_no-article">
							表示する記事がありません。
						</p>
					<?php endif; ?>

				</ul><!-- /.bl_card_unit -->
			</section><!-- /.bl_topics -->
			<nav class="navigation pagination pagination__before-class" role="navigation" aria-label="投稿">
				<?php
				if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
					pagination($max_num);
				} ?>
			</nav>
		</div><!-- /.ly-main -->

		<!-- ページネーション -->


		<!-- ページトップへのナビゲーション -->
		<div id="nav-to-top" class="el_navToTop el_navToTop__result">
			<figure class="el_navToTop_arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrows/arrow_d2x.png" alt="">
			</figure><!-- /.el_navToTop_arrow -->
			<p class="el_navToTop_txt">
				Page Top
			</p><!-- /.el_navToTop_txt -->
		</div>
	</main>
	<?php
	get_template_part('includes/footer');
	get_footer();
	?>
