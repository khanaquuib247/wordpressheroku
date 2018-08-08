<?php
/**
 * Template for displaying add-to-cart button
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 2.2
 */

defined( 'ABSPATH' ) || exit();
$course = LP()->global['course'];
$course_id = learn_press_get_course_id();
$course = learn_press_get_course();
if( learn_press_is_course_archive() && !$course_id ) {
	$course_id = $course->get_id();
}
$instance_woo = LP_Addon_Woo_Payment::instance();
$is_add_to_cart = $instance_woo->is_added_in_cart($course_id);
$woopayment = LP()->settings()->get('woo-payment');
if($is_add_to_cart && $woopayment['purchase_button'] == 'cart') {
    $message = sprintf( '<div class="woocommerce-message"><a href="%s" class="button wc-forward">%s</a></div>', esc_url( wc_get_page_permalink( 'cart' ) ), esc_html__( 'View Cart', 'eduma' ) );
    echo $message;
} else {
?>
    <?php if( learn_press_is_course_archive() ) { ?>
        <input type="hidden" disabled="disabled" name="course_url" value="<?php echo esc_attr( get_permalink( $course_id ) ); ?>"/>
    <?php } ?>
    <?php if ( $woopayment['purchase_button'] == 'single' ) { ?>
        <input type="hidden" name="single-purchase" value="yes" />
    <?php } elseif( $woopayment['purchase_button'] == 'cart' ) { ?>
        <button class="button button-add-to-cart thim-enroll-course-button" data-action="add-to-cart" data-block-content="yes"><?php _e( 'Add to cart', 'learnpress-woo-payment' ); ?></button>
    <?php } ?>
    <input type="hidden" name="add-to-cart" value="<?php echo $course_id; ?>" />
    <?php
}