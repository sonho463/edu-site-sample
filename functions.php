<?php

add_action('init', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
});

//カスタム投稿タイプの設定
function create_post_type()
{
	register_post_type(
		'lessons',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '授業',
				'singular_name' => '授業',
			),
			'public' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'show_in_rest' => true,
			'hierarchical' => true,
			'taxonomies' => ['custom_taxonomy'],
			'supports' => array(
				'title',
				'author',
				'editor',
				'excerpt',
				'thumbnail',
			),
		)
	);
	register_post_type(
		'news',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '授業をする前に（コラム）',
				'singular_name' => '授業をする前に（コラム）',
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'thumbnail',
			),
		)
	);
	register_post_type(
		'achievements',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '導入実績',
				'singular_name' => '導入実績',
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'thumbnail',
			),
		)
	);
	register_post_type(
		'video',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '授業用動画',
				'singular_name' => '授業用動画',
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'thumbnail',
			),
		)
	);
	add_action('init', 'create_post_type', 1);
	register_post_type(
		'materials',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '授業用教材',
				'singular_name' => '授業用教材',
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'thumbnail',
			),
		)
	);
}
add_action('init', 'create_post_type', 1);

// 教材検索投稿タイプのカスタムタクソノミーの設定
function create_taxonomy()
{
	register_taxonomy(
		'lessons_category', // タクソノミー名
		'lessons', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '教材カテゴリ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '教材カテゴリ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '教材カテゴリ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '教材カテゴリを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,
			'exclude_from_search' => false, // false 検索対象に含める

		)
	);
	register_taxonomy(
		'news_category', // タクソノミー名
		'news', // 関連付けるカスタム投稿タイプ
		array(
			'label' => 'コラムカテゴリ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => 'コラムカテゴリ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => 'コラムカテゴリ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => 'コラムカテゴリを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,
		)
	);
	register_taxonomy(
		'achievements_category', // タクソノミー名
		'achievements', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '導入実績カテゴリ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '導入実績カテゴリ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '導入実績カテゴリ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '導入実績カテゴリを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,
		)
	);
}
add_action('init', 'create_taxonomy');

// // dd_linkのメインクエリ書き換え
// function change_query_in_dd_link( $query ) {

// 	if ( $query->is_tax('dd_link') ) {
// 		$query->set( 'post_type', 'lessons' );
// 		$tax_query  = array(
// 			'taxonomy' => 'groups',
// 			'field' => 'term_taxonomy_id',
// 			'terms' => htmlentities($_GET['g'], ENT_QUOTES, "utf-8");
// 			'operator' => 'IN',
// 		);

// 	}
// 	return $query;
// }
// add_filter( 'pre_get_posts', 'change_query_in_dd_link' );


// パンくずリスト
/*** パンくずリストを出力する関数 my_breadcrumbs 2019/07/14 updated ***
 * 2019/07/14 カスタム投稿タイプにカスタム分類が登録されていない場合に対応（161行目追加）
 *
 * カスタム投稿タイプ日付アーカイブには未対応。
 *
 * カスタムフィールド myterm を使って優先するカテゴリーやタームを指定可能に　2019/07/10
 *
 * ［注意］この関数は別途 get_deepest_term()   が必要です。
 *
 * パラメータ $args ：引数の連想配列（全てオプション）。以下概要。
 * nav_div　リスト（ul 要素）を囲む要素を指定。デフォルト: nav（要素）
 * aria_label リストを囲む要素に指定する aria_label 属性。値を指定すると出力
 * id リストを囲む要素に指定する id 属性。値を指定すると出力
 * nav_div_class リストを囲む要素に指定する class 属性。値を指定すると出力
 * ul_class ul 要素に指定する class 属性。値を指定すると出力
 * li_class リンクを含む li 要素に指定する class 属性。値を指定すると出力
 * li_active_class リンクを含まない li 要素に指定する class 属性。値を指定すると出力
 * aria_current リンクを含まない li 要素に指定する aria-current 属性。値を指定すると出力
 * show_home ホームの場合にホームの文字列を表示するかどうか。初期値 true（表示する）
 * show_current 個別投稿ページの場合に現在のページを表示するかどうか。 初期値 true（表示する）2019/07/06 Added
 * show_cpta カスタム投稿タイプ個別ページでアーカイブページを表示するかどうか。 初期値 true（表示する）2019/07/06 Added
 * home ホームの文字列。初期値：Home
 * blog_home 管理画面のホームページの表示で「固定ページ」→「投稿ページ（メインブログページ）」に
 * 指定したページで表示する文字。初期値：Blog
 * search 検索結果ページの文字列。初期値： で検索した結果
 * tag タグページの文字列。初期値：タグ :
 * author  投稿者ページの文字列。初期値：投稿者
 * notfound 404ページの文字列。初期値： 404 Not found
 * separator 区切り文字列。''を指定すると出力しない。初期値：<li class="separator"> > </li>
 * cat_off 個別ページでカテゴリーを表示しない。初期値： false（表示する）
 * cat_parents_off 個別ページで親のカテゴリーを表示しない。初期値： false（表示する）
 * tax_off カスタム投稿タイプ個別ページでタームを表示しない。初期値：false（表示する）
 * tax_parents_off カスタム投稿タイプ個別ページで親のタームを表示しない。初期値：false（表示する）
 * show_cat_tag_for_cpt カスタム投稿タイプ個別ページでカテゴリーを表示する（その場合は、カスタムタクソノミーは表示されない）。初期値：false（表示しない）
 * 記事が複数のカテゴリーやタームに属する場合、カスタムフィールド（myterm）を使って優先するカテゴリーやタームを指定可能
 * カスタム投稿タイプに複数のカスタムタクソノミーが登録されている場合、カスタムフィールド（my_pref_tax）を使ってタクソノミーを指定可能
 */

function breadcrumb($args = array(), $title)
{
	global $post;
	// デフォルトの値
	$defaults = array(
		'nav_div' => 'nav',
		'aria_label' => '',
		'id' => '',
		'nav_div_class' => '',
		'ul_class' => '',
		'li_class' => '',
		'li_active_class' => '',
		'aria_current' => '',
		'show_home' => true,
		'show_current' => true,
		'home' => 'TOP',
		'blog_home' => 'Blog',
		'search' => 'で検索した結果',
		'tag' => 'タグ : ',
		'author' => '投稿者',
		'notfound' => '404 Not found',
		'separator' => "\n" . '<li class="separator">&nbsp;&gt;&nbsp;</li>' . "\n",
		'cat_off' => false,
		'cat_parents_off' => false,
		'tax_off' => false,
		'tax_parents_off' => false,
		'show_cpta' => true,
		'show_cat_tag_for_cpt' => false,
	);
	// var_dump($args['dd_menu']);
	$args = array(
		'nav_div_class' => 'bl_breadcrumb',
		'ul_class' => 'bl_breadcrumb_inner',
		// 'dd_menu' => $args['dd_menu'],
	);
	//引数の値とデフォルトをマージ
	$args = wp_parse_args($args, $defaults);
	//マージした値を変数として抽出
	extract($args, EXTR_SKIP);



	//マージした値を元に出力するかどうかを設定
	$aria_label = $aria_label ? ' aria-label="' . $aria_label . '" ' : '';
	$id = $id ? ' id="' . $id . '" ' : '';
	$nav_div_class = $nav_div_class ? ' class="' . $nav_div_class . '" ' : '';
	$ul_class = $ul_class ? ' class="' . $ul_class . '" ' : '';
	$li_class = $li_class ? ' class="' . $li_class . '" ' : '';
	$li_active_class = $li_active_class ? ' class="' . $li_active_class . '" ' : '';
	$aria_current = $aria_current ? ' aria-current="' . $aria_current . '"' : '';

	//パンくずリストのマークアップ文字列の初期化
	$str = '';

	//ホーム・フロントページの場合
	if (is_front_page() || is_home()) {
		if ($show_home) {
			$label = is_front_page() ? $home : $blog_home;
			echo  '<' . $nav_div . $id . $nav_div_class . $aria_label . '><ul' . $ul_class . '><li' . $li_active_class . $aria_current . '>' . $label . '</li></ul></' . $nav_div . '>';
		}
	}
	//ホーム・フロントページでない場合（且つ管理ページでない場合）
	if (!is_front_page() && !is_home() && !is_admin()) {
		//ホームへのリンクを含むリストを生成
		$str .= '<' . $nav_div . $id . $nav_div_class . $aria_label . '>' . "\n";
		$str .= '<ul' . $ul_class . '>' . "\n";
		$str .= '<li' . $li_class . '><a href="' . home_url() . '/">' . $home . '</a></li>';
		//$wp_query の query_vars から get_query_var() でクエリ変数の値を取得
		//タクソノミー名を取得（タクソノミーアーカイブの場合のみ取得可能）
		$my_taxonomy = get_query_var('taxonomy');
		//投稿タイプ名を取得（カスタム投稿タイプ個別ページの場合のみ取得可能）
		$cpt = get_query_var('post_type');
		//カスタムタクソノミーアーカイブページ
		//タクソノミー名が取得できて且つカスタムタクソノミーアーカイブページの場合
		if ($my_taxonomy &&  is_tax($my_taxonomy)) {
			//タームオブジェクト（現在のページのオブジェクト）を取得
			$my_term = get_queried_object();
			//タクソノミーの object_type プロパティは配列
			$post_types = get_taxonomy($my_taxonomy)->object_type;
			//配列の0番目からカスタム投稿タイプのスラッグ（カスタム投稿タイプ名）を取得
			$cpt = $post_types[0];
			//get_post_type_archive_link()：指定した投稿タイプのアーカイブページのリンク
			//get_post_type_object($cpt)->label：指定した投稿タイプのオブジェクトのラベル（名前）
			//カスタム投稿のアーカイブページへのリンクを追加
			$str .= $separator;
			$str .= '<li' . $li_class . '><a href="' . esc_url(get_post_type_archive_link($cpt)) . '">' . get_post_type_object($cpt)->label . '</a></li>';
			//タームオブジェクトに親があればそれらを取得してリンクを生成してリストに追加
			if ($my_term->parent != 0) {
				//祖先タームオブジェクトの ID の配列を取得し逆順に（取得される配列の並びは階層の下から上）
				$ancestors = array_reverse(get_ancestors($my_term->term_id, $my_term->taxonomy));
				//全ての祖先タームオブジェクトのアーカイブページへのリンクを生成してリストに追加
				foreach ($ancestors as $ancestor) {
					$str .= $separator;
					$str .= '<li' . $li_class . '><a href="' . esc_url(get_term_link($ancestor, $my_term->taxonomy)) . '">' . get_term($ancestor, $my_term->taxonomy)->name . '</a></li>';
				}
			}
			//ターム名を追加
			// $str .= '<li' . $li_active_class . $aria_current . '>カテゴリ：' . $my_term->name . '</li>';
			if (is_tax('lessons_category', 'for-students') || is_tax('lessons_category', 'for-teachers')) {
				'';
			} else {
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . $title . 'の記事一覧</li>';
			}
			//カテゴリーのアーカイブページ
		} elseif (is_category()) {
			//カテゴリーオブジェクトを取得
			$cat = get_queried_object();
			//取得したカテゴリーオブジェクトに親があればそれらを取得してリンクを生成してリストに追加
			if ($cat->parent != 0) {
				$ancestors = array_reverse(get_ancestors($cat->term_id, 'category'));
				foreach ($ancestors as $ancestor) {
					$str .= $separator;
					$str .= '<li' . $li_class . '><a href="' . esc_url(get_category_link($ancestor)) . '">' . get_cat_name($ancestor) . '</a></li>';
				}
			}
			//カテゴリー名を追加
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>' . $cat->name . '</li>';
			//カスタム投稿のアーカイブページ
		} elseif (is_post_type_archive()) {
			if (isset($_GET['value01'])) {
				//カスタム投稿タイプ名を取得
				$cpt = get_query_var('post_type');
				//カスタム投稿タイプ名を追加
				//カスタム投稿タイプアーカイブページへのリンクを生成してリストに追加
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . esc_url(get_post_type_archive_link($cpt)) . '">' . get_post_type_object($cpt)->label . '</a></li>';
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . $title . '</li>';
				//カスタム投稿タイプの個別記事ページ
			} else {
				//カスタム投稿タイプ名を取得
				$cpt = get_query_var('post_type');
				//カスタム投稿タイプ名を追加
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . get_post_type_object($cpt)->label . '&nbsp;&nbsp;' . $title . '</li>';
				//カスタム投稿タイプの個別記事ページ
			};
		} elseif ($cpt && is_singular($cpt)) {
			if ($show_cpta) {
				//カスタム投稿タイプアーカイブページへのリンクを生成してリストに追加
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . esc_url(get_post_type_archive_link($cpt)) . '">' . get_post_type_object($cpt)->label . '</a></li>';
			}
			//このカスタム投稿タイプに登録されている全てのタクソノミーオブジェクトの名前を取得
			$taxes = get_object_taxonomies($cpt);
			//タクソノミーオブジェクトの名前が取得できれば
			if (count($taxes) !== 0) {
				//タクソノミーを表示する場合
				if (!$tax_off) {
					//配列の先頭のタクソノミーオブジェクトの名前（複数ある可能性があるので先頭のものを使う）
					//デフォルトでは標準のカテゴリーやタグが追加されている場合はインデックスを変更
					//但し、show_cat_tag_for_cpt が true の場合はカテゴリーを取得可能に
					$tax_index = 0;
					if (!$show_cat_tag_for_cpt) {
						for ($i = 0; $i < count($taxes); $i++) {
							if ($taxes[$i] !== 'category' && $taxes[$i] !== 'post_tag' && $taxes[$i] !== 'post_format') {
								$tax_index = $i;
								break;
							}
						}
					}
					$mytax = $taxes[$tax_index] ? $taxes[$tax_index] : null;
					//カスタムフィールドに優先するタクソノミーのラベルが記載されていればそのタクソノミーを選択
					//タクソノミーのラベルを取得
					$my_pref_tax_label = get_post_meta(get_the_ID(), 'my_pref_tax', true) ? esc_attr(get_post_meta(get_the_ID(), 'my_pref_tax', true)) : null;
					//ラベルからタクソノミーを取得（戻り値はタクソノミーの名前の配列）
					$my_pref_tax_name = get_taxonomies(array('label' => $my_pref_tax_label));
					//タクソノミー名の初期化
					$my_pref_tax = '';
					//取得した配列が1つの場合、その値が優先されるタクソノミーの名前
					if (count($my_pref_tax_name) == 1) {
						$my_pref_tax = $my_pref_tax_name[key($my_pref_tax_name)];
					}
					//タクソノミーの名前が取得できて且つそのタクソノミーが現在の投稿タイプに属している場合は、そのタクソノミーを使用
					if ($my_pref_tax && is_object_in_taxonomy($post->post_type, $my_pref_tax)) {
						$mytax = $my_pref_tax;
					}
					//投稿に割り当てられたタームオブジェクト（配列）を取得
					$terms = get_the_terms($post->ID, $mytax);
					//カスタムフィールドに優先するタームが記載されていればその値を取得して $myterm へ
					$myterm = get_post_meta(get_the_ID(), 'myterm', true) ? esc_attr(get_post_meta(get_the_ID(), 'myterm', true)) : null;
					//$terms が取得できていれば一番下の階層のタームを取得（できない場合は null に）
					$my_term = $terms ? get_deepest_term($terms, $mytax, $myterm) : null;
					//タームが取得できていれば
					if (!empty($my_term)) {
						//$tax_parents_off がfalse（初期値）でタームに親があればそれらを取得してリンクを生成してリストに追加
						if ($my_term->parent != 0 && !$tax_parents_off) {
							$ancestors = array_reverse(get_ancestors($my_term->term_id, $mytax));
							foreach ($ancestors as $ancestor) {
								$str .= $separator;
								$str .= '<li' . $li_class . '><a href="' . esc_url(get_term_link($ancestor, $mytax)) . '">' . get_term($ancestor, $mytax)->name . '</a></li>';
							}
						}
						//タームのリンクを追加
						$str .= $separator;
						$str .= '<li' . $li_class . '><a href="' . esc_url(get_term_link($my_term, $mytax)) . '">' . $my_term->name . '</a></li>';
					}
				}
			}
			if ($show_current) {
				$str .= $separator;
				//$post->post_title には HTML タグが入っている可能性があるのでタグを除去
				//wp_strip_all_tags() の代わりに PHP の strip_tags() でも
				$str .= '<li' . $li_active_class . $aria_current . '>' . wp_strip_all_tags($post->post_title) . '</li>';
			}
			//個別投稿ページ（添付ファイルも true と判定されるので除外）
		} elseif (is_single() && !is_attachment()) {
			//投稿が属するカテゴリーオブジェクトの配列を取得
			$categories = get_the_category($post->ID);
			//カテゴリーを表示する場合
			if (!$cat_off) {
				//カスタムフィールドに優先するカテゴリーが記載されていればその値を取得して $myterm へ
				$myterm = get_post_meta(get_the_ID(), 'myterm', true) ? esc_attr(get_post_meta(get_the_ID(), 'myterm', true)) : null;
				//一番下の階層のカテゴリーを取得
				$cat = get_deepest_term($categories, 'category', $myterm);
				//$cat_parents_off が false（初期値）でカテゴリーに親があればそれらを取得してリンクを生成してリストに追加
				if ($cat->parent != 0 && !$cat_parents_off) {
					$ancestors = array_reverse(get_ancestors($cat->term_id, 'category'));
					foreach ($ancestors as $ancestor) {
						$str .= $separator;
						$str .= '<li' . $li_class . '><a href="' . esc_url(get_category_link($ancestor)) . '">' . get_cat_name($ancestor) . '</a></li>';
					}
				}
				//カテゴリーのリンクを追加
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . esc_url(get_category_link($cat->term_id)) . '">' . $cat->name . '</a></li>';
			}
			if ($show_current) {
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . wp_strip_all_tags($post->post_title) . '</li>';
			}
			//固定ページ
		} elseif (is_page()) {
			//固定ページに親があればそれらを取得してリンクを生成してリストに追加
			// if ($post->post_parent != 0) {
			// 	$ancestors = array_reverse(get_post_ancestors($post->ID));
			// 	foreach ($ancestors as $ancestor) {
			// 		$str .= $separator;
			// 		$str .= '<li' . $li_class . '><a href="' . esc_url(get_permalink($ancestor)) . '">' . get_the_title($ancestor) . '</a></li>';
			// 	}
			// }
			//固定ページ名を追加
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>' . wp_strip_all_tags($post->post_title) . '</li>';
			//日付ベースのアーカイブページ
		} elseif (is_date()) {
			//年別アーカイブ
			if (get_query_var('day') != 0) {
				//日付アーカイブページでは get_query_var() でアーカイブページの年・月・日を取得できる
				//取得した値と get_year_link() などを使ってリンクを生成
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . get_year_link(get_query_var('year')) . '">' . get_query_var('year') . '年</a></li>';
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . get_month_link(get_query_var('year'), get_query_var('monthnum')) . '">' . get_query_var('monthnum') . '月</a></li>';
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . get_query_var('day') . '日</li>';
				//月別アーカイブ
			} elseif (get_query_var('monthnum') != 0) {
				$str .= $separator;
				$str .= '<li' . $li_class . '><a href="' . get_year_link(get_query_var('year')) . '">' . get_query_var('year') . '年</a></li>';
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . get_query_var('monthnum') . '月</li>';
				//年別アーカイブ
			} else {
				$str .= $separator;
				$str .= '<li' . $li_active_class . $aria_current . '>' . get_query_var('year') . '年</li>';
			}
			//検索結果表示ページ
		} elseif (is_search()) {
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>「' . get_search_query() . '」' . $search . '</li>';
			//投稿者のアーカイブページ
		} elseif (is_author()) {
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>' . $author . ' : ' . get_the_author_meta('display_name', get_query_var('author')) . '</li>';
			//タグのアーカイブページ
		} elseif (is_tag()) {
			$str .= $separator;
			//$str.='<li' .$li_active_class. $aria_current.'>'. $tag .' '. single_tag_title( '' , false ). '</li>';
			$str .= '<li' . $li_active_class . $aria_current . '>' . single_tag_title($tag, false) . '</li>';
			//添付ファイルページ
		} elseif (is_attachment()) {
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>' . wp_strip_all_tags($post->post_title) . '</li>';
			//404 Not Found ページ
		} elseif (is_404()) {
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>お探しのページは見つかりませんでした。</li>';
			//その他
		} else {
			$str .= $separator;
			$str .= '<li' . $li_active_class . $aria_current . '>' . wp_get_document_title() . '</li>';
		}
		$str .= "\n" . '</ul>' . "\n";
		$str .= '</' . $nav_div . '>' . "\n";
	}
	echo $str;
}

/**
 * 一番深い階層のタームオブジェクトを返す関数
 * 2019/07/11 updated （不要な記述 $top_ancestor を削除）
 * 引数 $terms：（投稿が属する）タームオブジェクトの配列
 * 引数 $mytaxonomy：タクソノミー名
 * 引数 $myterm：優先するターム
 * 戻り値 $deepest：タームオブジェクト
 */

function get_deepest_term($terms, $mytaxonomy, $myterm = null)
{
	global $post;
	if ($myterm) {
		//$myterm が指定されていれば値からタームオブジェクトを生成
		$my_pref_term =  get_term_by('name', $myterm, $mytaxonomy);
		//タームオブジェクトが取得できて且つそのタームが現在の投稿に属していれば
		if ($my_pref_term && is_object_in_term($post->ID, $mytaxonomy, $my_pref_term->term_id)) {
			//優先的にそのタームを返す
			return $deepest =  $my_pref_term;
		}
	}
	//配列の要素が１つの場合その要素を最も深いタームとする
	if (count($terms) == 1) {
		$deepest = $terms[key($terms)];
	} else {
		$deepest = $terms[key($terms)];
		//祖先オブジェクトの最大数の初期化
		$max = 0;
		//それぞれのタームについて調査
		for ($i = 0; $i < count($terms); $i++) {
			//上の階層から順番に取得した祖先オブジェクトの ID の配列
			$ancestors = array_reverse(get_ancestors($terms[$i]->term_id, $terms[$i]->taxonomy));
			//祖先オブジェクトの数
			$ancestors_count = count($ancestors);
			//祖先オブジェクトの数を比較して最大数より大きければ
			if ($ancestors_count > $max) {
				//祖先オブジェクトの最大数を更新
				$max = $ancestors_count;
				//その要素を最も深いタームとする
				$deepest = $terms[$i];
			}
		}
	}
	return $deepest;
}

/*【管理画面】投稿メニューを非表示 */
// function remove_menus()
// {
// 	global $menu;
// 	remove_menu_page('edit.php'); // 投稿を非表示
// }
// add_action('admin_menu', 'remove_menus');

//pagination
function pagination($pages = '', $range = 2)
{
	// var_dump($pages);
	$showitems = ($range * 1) + 1;
	global $paged;
	if (empty($paged)) $paged = 1;
	if ($pages == '') {
		global $wp_query;
		// var_dump($wp_query);
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	};
	// var_dump($pages);
	if (1 != $pages) {
		// 画像を使う時用に、テーマのパスを取得
		$img_pass = get_template_directory_uri();
		echo "<div class=\"nav-links nav-links__bg-yellow\">";
		// 「1/2」表示 現在のページ数 / 総ページ数
		// echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
		// 「前へ」を表示
		if ($paged > 1) :
			echo "<div><a class=\"pagination_allow pagination_allow__left\"href='" . get_pagenum_link($paged - 1) . "'></a></div>";
		else :
			echo "<div><span class=\"pagination_allow pagination_allow__inactive pagination_allow__left\"></span></div>";
		endif;
		// ページ番号を出力
		echo "<ul class=\"page-numbers\">\n";
		if ($pages > 3 && $paged != $pages && $paged != 1) :
			for ($i = $paged - 1; $i <= $paged + 1; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class=\" -current\">" . $i . "</li>" : // 現在のページの数字はリンク無し
						"<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		else :
			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class=\" -current\">" . $i . "</li>" : // 現在のページの数字はリンク無し
						"<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		endif;
		// [...] 表示
		// if(($paged + 4 ) <ul $pages){ // echo "<li class=\" notNumbering\">...</li>";
		// echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
		// }
		echo "</ul>\n";
		// 「次へ」を表示
		if ($paged < $pages) : echo "<div><a class=\" pagination_allow\" href='" . get_pagenum_link($paged + 1) . "'></a></div>";
		else :
			echo "<div><span class=\"pagination_allow pagination_allow__inactive\"></span></div>";
		endif;

		echo "</div>\n";
	}
}


//　カスタム投稿タイプを検索結果に含める
/*【出力カスタマイズ】検索対象をカスタム投稿タイプで絞り込む */
function my_pre_get_posts($query)
{
	if (!is_admin() && $query->is_main_query() && $query->is_search()) {
		$query->set('post_type', array('lessons', 'achievements'));
	}
}
add_action('pre_get_posts', 'my_pre_get_posts');
// // 検索対象拡張　カスタムフィールド

// function cf_search_join($join) {
// 	global $wpdb;
// 	if (is_page('search')) {
// 		$join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
// 	}
// 	return $join;
// }
// add_filter('posts_join', 'cf_search_join');

// function cf_search_where($where) {
// 	global $wpdb;
// 	if (is_page('search')) {
// 		$where = preg_replace(
// 			"/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
// 			"(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where);

// 		// 特定のカスタムフィールドを検索対象から外す
// 		// $where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'sample')";
// 	}
// 	return $where;
// }
// add_filter('posts_where', 'cf_search_where');

// function cf_search_distinct($where) {
// 	global $wpdb;
// 	if (is_page('search')) {
// 		return "DISTINCT";
// 	}
// 	return $where;
// }
// add_filter('posts_distinct', 'cf_search_distinct');


function custom_search($search, $wp_query)
{
	global $wpdb;
	if (!$wp_query->is_search) return $search;
	if (!isset($wp_query->query_vars)) return $search;

	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
	if (count($search_words) > 0) {
		$search = '';
		$search .= "AND post_type = 'lessons'";
		foreach ($search_words as $word) {
			if (!empty($word)) {
				$search_word = '%' . esc_sql($word) . '%';
				$search .= " AND (
	{$wpdb->posts}.post_title LIKE '{$search_word}'
	OR {$wpdb->posts}.post_content LIKE '{$search_word}'
	OR {$wpdb->posts}.ID IN (
	SELECT distinct post_id
	FROM {$wpdb->postmeta}
	WHERE {$wpdb->postmeta}.meta_key IN (
		'lessons_overview',
		'lesson_goal',
		'sample_video',
		'lesson_download_flow',
		'title',
		'time',
		'video',
		'video_relation_title',
		'video_relation',
		'users01_title',
		'users01_body',
		'users02_title',
		'users02_body',
		'users01_teacher',
		'users02_teacher'
		) AND meta_value LIKE '{$search_word}'
	)
) ";
			}
		}
	}
	return $search;
}
add_filter('posts_search', 'custom_search', 10, 2);

//  管理画面CSSを調整　wp-content/theme/[テーマ名]/functions.php
function mytheme_admin_enqueue()
{
	wp_enqueue_style('wp_admin_css', get_template_directory_uri() . '/wp-admin.css');
}
add_action('admin_enqueue_scripts', 'mytheme_admin_enqueue');


// Contact Form 7の自動pタグ無効
function wpcf7_autop_return_false()
{
	return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


/**********************
OGP設定
 *********************/
function my_meta_ogp()
{
	if (is_front_page() || is_home() || is_singular()) {

		/*初期設定*/

		// 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
		$home = 'https://niyutadesign.xsrv.jp/pilcon/wp-content/themes/lifedesignonline';
		$ogp_image = $home . '/assets/images/ogp.png';

		// Twitterのアカウント名 (@xxx)
		$twitter_site = '@pilcon_jp';
		// Twitterカードの種類（summary_large_image または summary を指定）
		$twitter_card = 'summary_large_image';
		// Facebook APP ID
		$facebook_app_id = '';

		/*初期設定 ここまで*/

		global $post;
		$ogp_title = '';
		$ogp_description = '';
		$ogp_url = '';
		$html = '';
		if (is_singular()) {
			// 記事＆固定ページ
			setup_postdata($post);
			$ogp_title = $post->post_title;
			$ogp_description = mb_substr(get_the_excerpt(), 0, 100);
			$ogp_url = get_permalink();
			wp_reset_postdata();
		} elseif (is_front_page() || is_home()) {
			// トップページ
			$ogp_title = get_bloginfo('name');
			$ogp_description = get_bloginfo('description');
			$ogp_url = home_url();
		}

		// og:type
		$ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

		// og:image
		if (is_singular() && has_post_thumbnail()) {
			$ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			$ogp_image = $ps_thumb[0];
		}

		// 出力するOGPタグをまとめる
		$html = "\n";
		$html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
		$html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
		$html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
		$html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
		$html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
		$html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
		$html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
		$html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
		$html .= '<meta property="og:locale" content="ja_JP">' . "\n";

		if ($facebook_app_id != "") {
			$html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
		}

		echo $html;
	}
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');

// SCFのフィールドの空判定
function is_null_scf($field){
	$about = 'about' . $field;
	$q = 'q' . $field;
	$question = scf::get($about);
	$question = $question[$q];

	if($question == ''){
		return false;
	} else {
		return true;
	}
};
