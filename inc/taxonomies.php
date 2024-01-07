<?php
function qwery_register_taxonomies () {
	$args = [
		'hierarchical' => false,
		'label'                 => 'qwery_brend', // определяется параметром $labels->name
		'labels'                => [
			'name'              => esc_html__('Brands','qwery'),
			'singular_name'     => esc_html__('Brand','qwery'),
			'search_items'      => esc_html__('Search Brands','qwery'),
			'all_items'         => esc_html__('All Brands','qwery'),
			'view_item '        => esc_html__('View Brand','qwery'),
			'parent_item'       => esc_html__('Parent Brand','qwery'),
			'parent_item_colon' => esc_html__('Parent Brand:','qwery'),
			'edit_item'         => esc_html__('Edit Brand','qwery'),
			'update_item'       => esc_html__('Update Brand','qwery'),
			'add_new_item'      => esc_html__('Add New Brand','qwery'),
			'new_item_name'     => esc_html__('New Brand Name','qwery'),
			'menu_name'         => esc_html__('Brand','qwery'),
			'back_to_items'     => esc_html__('← Back to Brand','qwery'),
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'show_ui'               => true, // равен аргументу public
		'rewrite'               => array('slug' =>'brends'),
		'query_var'             => true,
		'show_in_rest' => true,
		'show_admin_column'     => true,
	];
	
	register_taxonomy('brand', array('car'), $args);
	unset($args); // to clear $args

	$args = [
		'hierarchical' => false,
		'label'                 => 'qwery_manufacture', // определяется параметром $labels->name
		'labels'                => [
			'name'              => esc_html__('manufactures','qwery'),
			'singular_name'     => esc_html__('manufacture','qwery'),
			'search_items'      => esc_html__('Search manufactures','qwery'),
			'all_items'         => esc_html__('All manufactures','qwery'),
			'view_item '        => esc_html__('View manufacture','qwery'),
			'parent_item'       => esc_html__('Parent manufacture','qwery'),
			'parent_item_colon' => esc_html__('Parent manufacture:','qwery'),
			'edit_item'         => esc_html__('Edit manufacture','qwery'),
			'update_item'       => esc_html__('Update Bmanufacture','qwery'),
			'add_new_item'      => esc_html__('Add New manufacture','qwery'),
			'new_item_name'     => esc_html__('New manufacture Name','qwery'),
			'menu_name'         => esc_html__('manufacture','qwery'),
			'back_to_items'     => esc_html__('← Back to manufacture','qwery'),
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'show_ui'               => true, // равен аргументу public
		'rewrite'               => array('slug' =>'manufacture'),
		'query_var'             => true,
		'show_in_rest' => true,
		'show_admin_column'     => true, 
	];
	
	register_taxonomy('manufacture', array('car'), $args);
	

}
add_action('init', 'qwery_register_taxonomies'); 
