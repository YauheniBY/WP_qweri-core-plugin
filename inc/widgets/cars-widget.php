<?php
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }

class Elementor_Cars_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'qwery_cars';
	}


	public function get_title() {
		return esc_html__( 'Qwery Cars', 'qwery-core' );
	}

	
	public function get_icon() {
		return 'eicon-code';
	}
    // public function get_custom_help_url() {
	// 	return 'https://developers.elementor.com/docs/widgets/';
	// }

	
	public function get_categories() {
		return [ 'general' ];
	}

	
	public function get_keywords() {
		return [ 'about', 'url', 'link' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Content', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
		$this->add_control(
			'qwery_title_one',
			[
				'label' => esc_html__( 'Title one', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
			]
		);
		$this->add_control(
			'qwery_title_two',
			[
				'label' => esc_html__( 'Title two', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
			]
		);
		
		$this->end_controls_section();

	}


	protected function render() {

		$settings = $this->get_settings_for_display();
	
?>
    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"><?php echo $settings['qwery_title_one']; ?></h1>
            <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['qwery_title_two']; ?></h1>
            <div class="row">
			<?php 
             $pages = (get_query_var('paged')) ? get_query_var('paged') : 1;
             $cars  = new WP_Query(array('post_type'=>'car','posts_per_page'=>3,'paged'=>$pages));

                if ( $cars->have_posts() ) :  while ($cars->have_posts() ) : $cars->the_post();
                            
                            get_template_part( 'partials/content', 'car'); 
                        
                        endwhile;?>
                            <div class="pagination">
                                <?php echo paginate_links(); ?>
                            </div>
                        <?php else :
                    get_template_part( 'partials/content', 'none' );
                endif; 
                wp_reset_postdata();
                ?>
               
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
<?php 
}
}
 ?>