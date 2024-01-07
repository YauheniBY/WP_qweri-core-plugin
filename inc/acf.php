<?php 
function qwery_acf_metaboxes(){
    acf_add_local_field_group(array(
        'key' => 'acf_carsettings',
        'title' => 'Car Setting ACF from code',
        'fields' => array(
            array(
                'key' => 'custom_price',
                'label' => 'Car price',
                'name' => 'custom_price',
                'type' => 'text',
            ),
            array(
                'key' => 'custom_engine_type',
                'label' => 'Car engine_type',
                'name' => 'custom_engine_type',
                'type' => 'select',
                'choices' => array( 
                    // '' => esc_html('Select type', 'qwery'),
                    'manual' => esc_html__('Manual', 'qwery'),
                    'auto'  => esc_html__('Automatic' ,'qwery'),
                ),
                'allow_null' => 1, 
            ),
            array(
                'key' => 'custom_car_manufacture',
                'label' => 'Car manufacture',
                'name' => 'custom_car_manufacture',
                'type' => 'select',
                'choices' => array( 
                    '2015' => '2015',
                    '2019' => '2019',
                    '2022' => '2022',
                    '2025' => '2025',
                ),
                'allow_null' => 1, 
            ),
            array(
                'key' => 'custom_mileage',
                'label' => 'Car mileage',
                'name' => 'custom_mileage',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                     'value' => 'car',
                )
            )
        )
    ));
}
add_action('acf/init', 'qwery_acf_metaboxes')
 ?>