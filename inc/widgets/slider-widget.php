<?php
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }

class Elementor_Slider_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'qwery_slider';
	}


	public function get_title() {
		return esc_html__( 'Qwery Slider', 'qwery-core' );
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
        $repeater = new \Elementor\Repeater();


		$repeater->add_control(
			'qwery_title_one',
			[
				'label' => esc_html__( 'Title one', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
			]
		);
		$repeater->add_control(
			'qwery_title_two',
			[
				'label' => esc_html__( 'Title two', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
			]
		);
		$repeater->add_control(
			'qwery_img',
			[
				'label' => esc_html__( 'Choose Image Left', 'qwery-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);	
        $this->add_control(
			'slider',
			[
				'label' => esc_html__( 'Slider List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ qwery_title_one }}}',
			]
		);


		$this->end_controls_section();

	}


	protected function render() {

		$settings = $this->get_settings_for_display();
	
?>
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           
                <?php 
                if ( $settings['slider'] ) {                   
                    foreach (  $settings['slider'] as $item ) { ?>
                        <div class="carousel-item  active">
                            <img class="w-100" src="<?php echo esc_html($item['qwery_img']['url']); ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase mb-md-3"><?php echo esc_html($item['qwery_title_one']); ?></h4>
                                    <h1 class="display-1 text-white mb-md-4"><?php echo esc_html($item['qwery_title_two']); ?></h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                                </div>
                            </div>
                        </div>                       
                    <?php 
                    }
                }
                ?>
        </div>
                           
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
<?php 
}
}
 ?>