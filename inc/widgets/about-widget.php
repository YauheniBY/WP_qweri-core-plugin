<?php
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }

class Elementor_About_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'qwery_about';
	}


	public function get_title() {
		return esc_html__( 'Qwery About', 'qwery-core' );
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
				'default' => 'Welcome To',
			]
		);
		$this->add_control(
			'qwery_title_two',
			[
				'label' => esc_html__( 'Title two', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Royal Cars',
			]
		);
		$this->add_control(
			'qwery_img',
			[
				'label' => esc_html__( 'Choose Image', 'qwery-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'qwery_description',
			[
				'label' => esc_html__( 'Description', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXTAREA,
				'row' => 10,
				'placeholder' =>  esc_html__('Type your description here', 'qwery-core'),
				'default' => 'Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.',
			]
		);

	

		$this->end_controls_section();

	}


	protected function render() {

		$settings = $this->get_settings_for_display();
		$title_one = wp_oembed_get( $settings['qwery_title_one'] );
		$title_two = wp_oembed_get( $settings['qwery_title_two'] );
		$description = wp_oembed_get( $settings['qwery_description'] );

	
?>
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">

<h1 class="display-4 text-uppercase text-center mb-5"><?php echo esc_html__($settings['qwery_title_one']); ?> <span class="text-primary"><?php echo esc_html__($settings['qwery_title_two']); ?></span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
				<?php if($settings['qwery_img']['url']) { ?><img class="w-75 mb-4" src="<?php echo esc_html__($settings['qwery_img']['url']); ?> " alt=""><?php } ?>
                    <p><?php echo esc_html__($settings['qwery_description']); ?></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                    </div>
                </div>
            </div>
	</div>
</div>

<?php 
	}
}
 ?>