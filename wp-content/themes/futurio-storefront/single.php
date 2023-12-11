<?php
get_header();

futurio_storefront_generate_header(true, true, true, true, true, true);
?>
<!-- start content container -->
<div class="row">      
    <article class="col-md-<?php futurio_storefront_main_content_width_columns(); ?> <?php futurio_storefront_sidebar_position('content') ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                         
                <div <?php post_class(); ?>>
                    <?php if (get_theme_mod('single_title_position', 'full') == 'inside') { ?>
                        <div class="single-head">
                            <?php if (futurio_storefront_get_meta('disable_meta') != 'disable') { ?>
                                    <?php futurio_storefront_widget_date_comments(); ?>
                            <?php } ?>
                            <?php if (futurio_storefront_get_meta('disable_title') != 'disable') { ?>
                                <?php the_title('<h1 class="single-title">', '</h1>'); ?>
                            <?php } ?>
                            <?php if (futurio_storefront_get_meta('disable_meta') != 'disable') { ?>
                                <?php futurio_storefront_author_meta(); ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if (get_theme_mod('single_featured_image', 'full') == 'inside') { ?>
                        <?php if (futurio_storefront_get_meta('disable_featured_image') != 'disable') { ?>
                            <?php futurio_storefront_thumb_img('futurio-storefront-single', '', false); ?>
                        <?php } ?>
                    <?php } ?>
                    <div class="futurio-content single-content">
                        <div class="single-entry-summary">
                            <?php do_action('futurio_storefront_before_content'); ?>
                            <?php if (get_theme_mod('single_title_position', 'full') == 'full' && futurio_storefront_get_meta('disable_meta') != 'disable') { ?>
                                    <?php futurio_storefront_widget_date_comments(); ?>
                            <?php } ?>
                            <?php the_content(); ?>
                            <?php do_action('futurio_storefront_after_content'); ?> 
                        </div><!-- .single-entry-summary -->
                        <?php
                        wp_link_pages();
                        if (futurio_storefront_get_meta('disable_cats_tags') != 'disable') {
                            futurio_storefront_entry_footer();
                        }
                        if (futurio_storefront_get_meta('disable_navigation') != 'disable') {
                            futurio_storefront_prev_next_links();
                        }

                        $authordesc = get_the_author_meta('description');
                        if (!empty($authordesc)) {
                            ?>
                            <div class="single-footer">
                                <?php
                                if (futurio_storefront_get_meta('disable_author_box') != 'disable') {
                                    get_template_part('template-parts/template-part', 'postauthor');
                                }
                                if (futurio_storefront_get_meta('disable_comments') != 'disable') {
                                    comments_template();
                                }
                                ?> 
                            </div>
                        <?php } else { ?>
                            <div class="single-footer">
                                <?php
                                if (futurio_storefront_get_meta('disable_comments') != 'disable') {
                                    comments_template();
                                }
                                ?> 
                            </div>
                        <?php } ?>
                    </div>
                </div>        
            <?php endwhile; ?>        
        <?php else : ?>            
            <?php get_template_part('content', 'none'); ?>        
        <?php endif; ?>    
    </article> 
    <?php
    if (futurio_storefront_get_meta('sidebar') != 'no_sidebar') {
		if ( is_active_sidebar( 'futurio-storefront-sidebar' ) ) {
			get_sidebar();
		}
    }
    ?>
</div>
<!-- end content container -->

<?php get_footer(); ?>
