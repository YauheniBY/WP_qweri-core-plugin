<?php 
function qwery_add_metabox(){
    add_meta_box('car_metabox',esc_html__('Cars Settings', 'qwery'),'qwery_car_metabox_html', 'car', 'normal', 'hight');
};
add_action('add_meta_boxes', 'qwery_add_metabox');


 
 function qwery_car_metabox_html($post){
    $car_price = get_post_meta($post->ID, 'car_price', true);
    $car_engine = get_post_meta($post->ID, 'car_engine', true);

    wp_nonce_field('qweryrandomstring', '_carmetabox')
?>


 
    <p>
        <label for ="car_price"> <?php esc_html__e('Car Price', 'qwery'); ?> </label>
        <input type="text" id ="car_price" name="car_price" value="<?php echo esc_attr($car_price); ?>   ">
    </p>
    <p>
        <label for ="car_engine"> <?php esc_html__e('Car Engine', 'qwery'); ?> </label>
        <select id ="car_engine" name="car_engine">
            <option value=""><?php esc_html__e('Select engine','qwery'); ?></option>
            <option value="manual" <?php if($car_engine == 'manual'){ echo('selected');} ?> ><?php esc_html__e('Manual','qwery'); ?></option>
            <option value="automatic" <?php if($car_engine == 'automatic'){ echo('selected');} ?>><?php esc_html__e('Automatic','qwery'); ?></option>
        </select>
    </p>

    <?php
 }

 ?>