<?php

/***********************************************************
* カスタム投稿　施工例
***********************************************************/

add_action('init', 'add_type_execution');
function add_type_execution()
{
	$labels = array(
	'name' => _x('施工例', 'post type general name'),
	'singular_name' => _x('施工例', 'post type singular name'),
	'add_new' => _x('施工例を書く', 'execution'),
	'add_new_item' => __('施工例を書く'),
	'edit_item' => __('施工例を編集'),
	'new_item' => __('施工例'),
	'view_item' => __('施工例を見る'),
	'search_items' => __('施工例を探す'),
	'not_found' => __('施工例はありません'),
	'not_found_in_trash' => __('施工例はありません'),
	'parent_item_colon' => "",
	);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 9,
	'supports' => array('title','page-attributes'),
	'has_archive' => true
	);
	register_post_type('execution',$args);
}

/***********************************************************
* カスタム投稿　お客様の声
***********************************************************/

add_action('init', 'add_type_voice');
function add_type_voice()
{
	$labels = array(
	'name' => _x('お客様の声', 'post type general name'),
	'singular_name' => _x('お客様の声', 'post type singular name'),
	'add_new' => _x('お客様の声を書く', 'voice'),
	'add_new_item' => __('お客様の声を書く'),
	'edit_item' => __('お客様の声を編集'),
	'new_item' => __('お客様の声'),
	'view_item' => __('お客様の声を見る'),
	'search_items' => __('お客様の声を探す'),
	'not_found' => __('お客様の声はありません'),
	'not_found_in_trash' => __('お客様の声はありません'),
	'parent_item_colon' => "",
	);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 9,
	'supports' => array('title','page-attributes','thumbnail'),
	'has_archive' => true
	);
	register_post_type('voice',$args);
}




/***********************************************************
* カスタム投稿　コラム投稿
***********************************************************/

add_action('init', 'add_type_column');
function add_type_column()
{
	$labels = array(
	'name' => _x('専門家コラム', 'post type general name'),
	'singular_name' => _x('コラム', 'post type singular name'),
	'add_new' => _x('コラムを書く', 'column'),
	'add_new_item' => __('コラムを書く'),
	'edit_item' => __('コラムを編集'),
	'new_item' => __('コラム'),
	'view_item' => __('コラムを見る'),
	'search_items' => __('コラムを探す'),
	'not_found' => __('コラムはありません'),
	'not_found_in_trash' => __('コラムはありません'),
	'parent_item_colon' => "",
	);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 9,
	'supports' => array('title','editor','thumbnail','page-attributes'),
	'has_archive' => true
	);
	register_post_type('column',$args);
}

$cat = array(
	'label' => 'コラムのカテゴリ',
	'labels' => array(
		'name' => 'コラムカテゴリ',
		'singular_name' => 'コラムカテゴリ',
		'search_items' => 'コラムカテゴリを検索',
		'popular_items' => 'よく使われているコラムカテゴリ',
		'all_items' => 'すべてのコラムカテゴリ',
		'parent_item' => '親コラムカテゴリ',
		'edit_item' => 'コラムカテゴリの編集',
		'update_item' => '更新',
		'add_new_item' => '新規コラムカテゴリを追加',
		'new_item_name' => '新しいコラムカテゴリ',
	),
	'public' => true,
	'show_ui' => true,
	'hierarchical' => true,
	'show_tagcloud' => true
	);
	register_taxonomy('column_category', 'column', $cat);
	//('タクソノミー名', '所属する投稿タイプ', $cat);
	 
	 
	 
/***********************************************************
* カスタム投稿 （ブログ）
***********************************************************/
add_action('init', 'register_blog'); //"register_"の後に"blog"を追記
function register_blog() { //"register_"の後に"blog"を追記
	$labels = array('name'=>'ブログ投稿管理','singular_name'=>'ブログ投稿管理'); //「ブログ投稿管理」を追記
	$args = array(
		'labels' => $labels, //上の$labelsにて設定した内容を出力。変更不要。
		'public' => true, //trueなら一般公開。基本的に変更不要。
		'query_var' => true, //記事のスラッグ（パーマリンク）をpost typeで出力。基本的に変更不要。
		'rewrite'   => true, //記事毎にパーマリンク変更を許可する。基本的に変更不要。
		'has_archive' => true, //アーカイブページ生成を許可。基本的に変更不要。
		'hierarchical'    => true, //階層構造をもたせる。基本的に変更不要。
		'menu_position'   => 5, //管理画面上の位置を指定。5：「投稿」の下。10：「メディア」の下。20：「固定ページ」の下。
		'capability_type' => 'post',
		'supports' => array('title','editor', 'thumbnail') //編集画面上で表示するものを指定。今回はアイキャッチ：thumbnailを追加。
	);
	register_post_type('blog',$args); //ここで上記のカスタム投稿をWPに反映している

	// カスタムタクソノミーの設定
	$cat = array(
		 'label' => 'ブログカテゴリ',
		 'public' => true,
		 'hierarchical' => true,
	);
	register_taxonomy('blog_category', 'blog', $cat);
}
