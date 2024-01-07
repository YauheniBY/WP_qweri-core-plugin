<?php
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }

class Elementor_Ads_Widget extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'qwery_ads';
	}


	public function get_title() {
		return esc_html__( 'Qwery ADS', 'qwery-core' );
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
			'qwery_title_left',
			[
				'label' => esc_html__( 'Title left', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Want to be driver?',
			]
		);
		$this->add_control(
			'qwery_title_right',
			[
				'label' => esc_html__( 'Title right', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Looking for a car?',
			]
		);
		$this->add_control(
			'qwery_img_left',
			[
				'label' => esc_html__( 'Choose Image Left', 'qwery-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'qwery_img_right',
			[
				'label' => esc_html__( 'Choose Image Right', 'qwery-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'qwery_description_left',
			[
				'label' => esc_html__( 'Description Left', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXTAREA,
				'row' => 2,
				'placeholder' =>  esc_html__('Type your description here', 'qwery-core'),
				'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
			]
		);
		$this->add_control(
			'qwery_description_right',
			[
				'label' => esc_html__( 'Description Right', 'qwery-core' ),
				'tab' => \Elementor\Controls_Manager::TEXTAREA,
				'row' => 2,
				'placeholder' =>  esc_html__('Type your description here', 'qwery-core'),
				'default' => 'Lorem justo sit sit ipsum eos lorem kasd, kasd labore',
			]
		);

	

		$this->end_controls_section();

	}


	protected function render() {

		$settings = $this->get_settings_for_display();
	
?>
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">

<div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <?php if($settings['qwery_img_left']['url']){ ?><img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="<?php echo esc_html__($settings['qwery_img_left']['url']); ?>" alt=""><?php } ?>
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3"><?php echo esc_html__($settings['qwery_title_left']); ?></h3>
                            <p class="mb-4"><?php echo esc_html__($settings['qwery_description_left']); ?></p>
                            <a class="btn btn-primary py-2 px-4" href=""><?php esc_html_e('Start Now', 'qwery-core'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3"><?php echo esc_html__($settings['qwery_title_right']); ?></h3>
                            <p class="mb-4"><?php echo esc_html__($settings['qwery_description_right']); ?></p>
                            <a class="btn btn-primary py-2 px-4" href=""><?php esc_html_e('Start Now', 'qwery-core');?></a>
                        </div>
                        <?php if($settings['qwery_img_left']['url']){ ?><img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="<?php echo esc_html__($settings['qwery_img_right']['url']); ?>" alt=""><?php } ?>
                    </div>
                </div>
            </div>
		</div>
</div>

<?php 
	}
}
 ?>