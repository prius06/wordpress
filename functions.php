<?php 
	function init_func() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		register_post_type('item',[
			'labels' => [
				'name' => '商品',
				'sinfular_name' => '商品',
				'add_new' => '商品を追加',
				'edt_item' => '商品を編集',
				'new_item' => '新しい商品',
				'all_items' => 'すべての商品',
				'view_item' => '商品を見る',
				'search_items' => '商品を探す',
				'not_found'=> '商品は見つかりませんでした',
				'not_found_in_trash' => 'ゴミ箱は殻です',
				'parent_item_colon' => '',
				'menu_name' => '商品'
			],
			'public' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'suports' => [
				'title',
				'editor',
				'page-attributes'
			],
			'menu_position' => 5,
			'menu_icon' => 'dashicons-cart'
		]);

		register_taxonomy('item_category','item',[ //post page
			'labels' => [
				'name' => '商品カテゴリー',
			],
			'hierarchical' => true,
			'show_in_rest' => true,
			]);
}
add_action('init','init_func');
