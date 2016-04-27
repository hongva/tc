<?php
/* Template Name: Pagebuilder + page title */

/**
 * This template supports the pagebuilde + optional sidebar, this means that it has to adjusts it's columns on the fly
 * @see td_util::vc_get_column_number  -  that function is used by our blocks to detect the column count, on this template it's altered
 */
get_header();

td_global::$current_template = 'page-title-sidebar';
//set the template id, used to get the template specific settings
$template_id = 'page';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)


//read the custom single post settings - this setting overids all of them
$td_page = get_post_meta($post->ID, 'td_page', true);
if (!empty($td_page['td_sidebar_position'])) {
    $loop_sidebar_position = $td_page['td_sidebar_position'];
}


/**
 * detect the page builder
 */
$td_use_page_builder = false;
if (method_exists('WPBMap', 'getShortCodes')) {
    $td_page_builder_short_codes = array_keys(WPBMap::getShortCodes());
    if (td_util::strpos_array($post->post_content, $td_page_builder_short_codes) === true) {
        $td_use_page_builder = true;
    }
}




    //no page builder detected, we load a default page template with sidebar / no sidebar
    ?>
    <div class="td-container">
        <div class="td-container-border">
            <div class="td-pb-row">
                <?php
                switch ($loop_sidebar_position) {
                    default:
                        ?>
                            <div class="td-pb-span8 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
                                <div class="td-ss-main-content">
                                    <?php
                                    if (have_posts()) {
                                    while ( have_posts() ) : the_post();
                                    ?>
                                    <div class="td-page-header td-pb-padding-side">
                                        <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                        <h1 itemprop="name" class="entry-title td-page-title">
                                            <span><?php the_title() ?></span>
                                        </h1>
                                    </div>
                                    <div class="td-pb-padding-side td-page-content">
                                        <?php
                                        the_content();
                                        endwhile;//end loop
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        <?php
                        break;

                    case 'sidebar_left':
                        ?>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                        <div class="td-pb-span8 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
                            <div class="td-ss-main-content">
                                <?php

                                if (have_posts()) {
                                while ( have_posts() ) : the_post();
                                ?>
                                <div class="td-page-header td-pb-padding-side">
                                    <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                    <h1 itemprop="name" class="entry-title td-page-title">
                                        <span><?php the_title() ?></span>
                                    </h1>
                                </div>
                                <div class="td-pb-padding-side td-page-content">
                                    <?php
                                    the_content();
                                    endwhile; //end loop
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'no_sidebar':
                        ?>
                        <div class="td-pb-span12 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
                            <div class="td-ss-main-content">
                                <?php
                                if (have_posts()) {
                                while ( have_posts() ) : the_post();
                                ?>
                                <div class="td-page-header td-pb-padding-side">
                                    <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                    <h1 itemprop="name" class="entry-title td-page-title">
                                        <?php /*<a itemprop="url" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>*/?>
                                        <span><?php the_title() ?></span>
                                    </h1>
                                </div>
                                <div class="td-pb-padding-side td-page-content">
                                    <?php
                                    the_content();
                                    endwhile; //end loop
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        break;
                }
                ?>
            </div> <!-- /.td-pb-row -->
        </div>
    </div> <!-- /.td-container -->

<?php




get_footer();
?>