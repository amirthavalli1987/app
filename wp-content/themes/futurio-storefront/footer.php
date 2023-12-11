</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if (is_active_sidebar('futurio-storefront-footer-area') && futurio_storefront_get_meta('disable_footer_widgets') != 'disable') { ?>  				
    <div id="content-footer-section" class="container-fluid clearfix">
        <div class="container">
            <?php dynamic_sidebar('futurio-storefront-footer-area'); ?>
        </div>	
    </div>		
<?php } ?>

<?php do_action('futurio_storefront_before_footer'); ?>

<?php
if (futurio_storefront_get_meta('disable_footer') != 'disable') {
    do_action('futurio_storefront_generate_footer');
    do_action('futurio_storefront_generate_footer_credits');
}
?>

</div><!-- end page-wrap -->

<?php do_action('futurio_storefront_after_footer'); ?>

<?php if (is_active_sidebar('futurio-storefront-menu-area')) { ?>
    <div id="site-menu-sidebar" class="offcanvas-sidebar" >
        <div class="offcanvas-sidebar-close">
            <i class="fa fa-times"></i>
        </div>
        <?php dynamic_sidebar('futurio-storefront-menu-area'); ?>
    </div>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
