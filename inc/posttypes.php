<?php
function qwery_register_post_type () {
	
	
	$args = [
		'label' => esc_html__('Cars', 'qwery'),
		'labels'  => array(
			'name'           => esc_html__( 'Cars', 'qwery' ),
			'singular_name'  => esc_html__( 'Car', 'qwery' ),
			'add_new'        => esc_html__( 'Add Car', 'qwery' ),
			'add_new_item'   => esc_html__( 'Add New Car', 'qwery' ),
			'edit_item'      => esc_html__( 'Edit Car', 'qwery' ),
			'all_items'      => esc_html__( 'All Cars', 'qwery' ),
			'not_found'      => esc_html__( 'No Cars Found', 'qwery' ),
		),
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false, 
		'show_ui'             => true,
		'show_in_menu'           => null,
		'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions','page-attributes','post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => true,
		'hierarchical'        => true,
		'rewrite' => array('slug' =>'cars'),
		'show_in_rest' => true,
	];

	register_post_type('car', $args);

}
add_action('init', 'qwery_register_post_type');

// new function nesessary fot work with new postTypes after exchange Theme
function qwery_rewrite_rules(){
	qwery_register_post_type ();
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'qwery_rewrite_rules');
