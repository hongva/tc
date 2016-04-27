<div class="td-footer-container td-container">
    <div class="td-pb-row">
        <div class="td-pb-span4">
            <?php locate_template('parts/footer/td_footer_extra.php', true); ?>
        </div>

        <div class="td-pb-span4">
            <?php
            td_util::vc_set_column_number(1);
            echo td_global_blocks::get_instance('td_block_7')->render(array(
                'custom_title' => __td('EVEN MORE NEWS'),
                'border_top' => 'no_border_top',
                'limit' => 3
            ));
            ?>
        </div>

        <div class="td-pb-span4">
            <?php
            td_util::vc_set_column_number(1);
            echo td_global_blocks::get_instance('td_block_popular_categories')->render(array(
                'number' => 5,
                'custom_title' => __td('POPULAR CATEGORY')
            ));
            ?>
        </div>
    </div>
</div>