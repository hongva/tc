<!--
Header style 10
-->
<div class="td-header-wrap td-header-style-10">
    <div class="td-header-row td-header-top-menu">
	    <div class="td-make-full">
	        <?php locate_template('parts/header/top-menu.php', true); ?>
	        <?php locate_template('parts/header/top-widget.php', true); ?>
	    </div>
	</div>

	<div class="td-header-row td-header-header">
		<div class="td-make-full">
			<div class="td-header-text-logo">
				<?php locate_template('parts/header/logo-text.php', true, false); ?>
			</div>
		</div>
	</div>

    <div class="td-header-menu-wrap">
        <div class="td-header-row td-header-main-menu">
            <div class="td-make-full">
                <?php locate_template('parts/header/header-menu.php', true); ?>
            </div>
        </div>
    </div>

	<div class="td-header-container">
		<div class="td-header-row td-header-header">
			<div class="td-header-sp-ads">
				<?php locate_template('parts/header/ads.php', true); ?>
			</div>
		</div>
	</div>
</div>