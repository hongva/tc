<?php
/**
 * Load the speed booster framework + theme specific files
 */
// load the deploy mode
require_once('td_deploy_mode.php');
// load the config
require_once('includes/td_config.php');
add_action('td_global_after', array('td_config', 'on_td_global_after_config'), 9); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10
// load the wp booster
require_once('includes/wp_booster/td_wp_booster_functions.php');
require_once('includes/td_css_generator.php');
require_once('includes/shortcodes/td_misc_shortcodes.php');
require_once('includes/widgets/td_page_builder_widgets.php'); // widgets
//d(td_api_base::debug_get_components_list());
/* ----------------------------------------------------------------------------
 * Woo Commerce
 */
// breadcrumb
add_filter('woocommerce_breadcrumb_defaults', 'td_woocommerce_breadcrumbs');
function td_woocommerce_breadcrumbs() {
	return array(
		'delimiter' => ' <i class="td-icon-right td-bread-sep"></i> ',
		'wrap_before' => '<div class="entry-crumbs" itemprop="breadcrumb">',
		'wrap_after' => '</div>',
		'before' => '',
		'after' => '',
		'home' => _x('Home', 'breadcrumb', 'woocommerce'),
	);
}
// use own pagination
if (!function_exists('woocommerce_pagination')) {
	// pagination
	function woocommerce_pagination() {
		echo td_page_generator::get_pagination();
	}
}
// Override theme default specification for product 3 per row
add_filter('loop_shop_columns', 'td_wc_loop_shop_columns', 1, 10);
function td_wc_loop_shop_columns($number_columns) {
	return 3;
}
// Number of product per page 6
add_filter('loop_shop_per_page', create_function('$cols', 'return 6;'));

if (!function_exists('woocommerce_output_related_products')) {
	// Number of related products
	function woocommerce_output_related_products() {
		woocommerce_related_products(array(
			'posts_per_page' => 3,
			'columns' => 3,
			'orderby' => 'rand',
		)); // Display 3 products in rows of 1
	}
}
/* ----------------------------------------------------------------------------
 * bbPress
 */
// change avatar size to 40px
function td_bbp_change_avatar_size($author_avatar, $topic_id, $size) {
	$author_avatar = '';
	if ($size == 14) {
		$size = 40;
	}
	$topic_id = bbp_get_topic_id( $topic_id );
	if ( !empty( $topic_id ) ) {
		if ( !bbp_is_topic_anonymous( $topic_id ) ) {
			$author_avatar = get_avatar( bbp_get_topic_author_id( $topic_id ), $size );
		} else {
			$author_avatar = get_avatar( get_post_meta( $topic_id, '_bbp_anonymous_email', true ), $size );
		}
	}
	return $author_avatar;
}
add_filter('bbp_get_topic_author_avatar', 'td_bbp_change_avatar_size', 20, 3);
add_filter('bbp_get_reply_author_avatar', 'td_bbp_change_avatar_size', 20, 3);
add_filter('bbp_get_current_user_avatar', 'td_bbp_change_avatar_size', 20, 3);
/**
 * tdStyleCustomizer.js is required
 */
if (TD_DEBUG_LIVE_THEME_STYLE) {
    add_action('wp_footer', 'td_theme_style_footer');
    function td_theme_style_footer() {
	    $demo_domain_name = 'http://demo.tagdiv.com';
	    if (TD_DEPLOY_MODE == 'dev') {
		    $demo_domain_name = 'http://192.168.0.11';
	    }

        ?>
        <div id="td-theme-settings" class="td-theme-settings-small">
            <div class="td-skin-header">One click demos</div>
            <div class="td-skin-content">
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag" class="td-set-theme-style-link">DEFAULT</a></div>
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_fashion" class="td-set-theme-style-link">FASHION</a></div>
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_tech" class="td-set-theme-style-link" data-value="">TECH</a></div>
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_video" class="td-set-theme-style-link">VIDEO</a></div>
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_sport" class="td-set-theme-style-link">SPORT</a></div>
	            <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_travel" class="td-set-theme-style-link">TRAVEL</a></div>
                <div class="td-set-theme-style"><a href="<?php echo $demo_domain_name ?>/newsmag_classic_blog" class="td-set-theme-style-link">CLASSIC BLOG</a></div>
            </div>
            <div class="clearfix"></div>
            <div class="td-set-hide-show"><a href="#" id="td-theme-set-hide">HIDE</a></div>
        </div>
    <?php
    }
}
add_action( 'widgets_init', 'ads_widgets_init' );
function ads_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Ads Inline Sidebar', 'inline_ads_detail' ),
        'id' => 'sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'inline_ads_detail' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}