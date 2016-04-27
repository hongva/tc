<!--
Header style 2
-->

<div class="td-header-container td-header-wrap td-header-style-2">
    <div class="td-header-row td-header-top-menu">
        <?php locate_template('parts/header/top-menu.php', true); ?>
        <?php locate_template('parts/header/top-widget.php', true); ?>
    </div>


    <div class="td-header-row td-header-header">
        <div class="td-header-sp-logo">
            <?php locate_template('parts/header/logo.php', true);?>
        </div>
        <div class="td-header-sp-ads">
            <?php locate_template('parts/header/ads.php', true); ?>
        </div>
    </div>

    <div class="td-header-menu-wrap">
        <div class="td-header-row td-header-border td-header-main-menu">
            <?php locate_template('parts/header/header-menu.php', true);?>
        </div>
    </div>
</div>