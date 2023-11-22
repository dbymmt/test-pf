<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

// 抜粋文字数制限
function new_excerpt_mblength($length) {	
	return 30;
}	
add_filter('excerpt_mblength', 'new_excerpt_mblength');

// 抜粋末端リンク
function new_excerpt_more($post) {	
	return '<a href="'. get_permalink($post->ID) . '">' . '...続きを読む' . '</a>';
}	
add_filter('excerpt_more', 'new_excerpt_more');	

// 固定ページで抜粋機能を有効化
add_post_type_support('page', 'excerpt');

?>