<div class="td-footer-container td-container">
	<div class="td-pb-row">
		<div class="td-pb-span12 td-footer-full">
			<?php locate_template('parts/footer/td_footer_extra.php', true); ?>
		</div>
		<div class="td-pb-span12">
			<?php
				td_util::vc_set_column_number(3);
				dynamic_sidebar('Footer 1');
			?>
		</div>
	</div>
</div>