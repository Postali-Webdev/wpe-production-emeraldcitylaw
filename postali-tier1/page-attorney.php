<?php
/**
 * Template Name: Attorney Bio
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block <?php if( is_page(4702) ) { ?>center<?php } ?>">
                    <?php 
                    $image = get_field('attorney_headshot');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="attorney-img" />
                        <div class="spacer-60"></div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
                <?php if( !is_page(4702) ) : //exclude from stryder's bio page ?>
                    <div class="column-33 sidebar-block block">
                        <?php get_template_part('block','sidebar'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <?php if( !is_page(4702) ) : //exclude from stryder's bio page ?>

        <?php if(get_field('include_awards','options')) : ?>
            <?php get_template_part('block','awards'); ?>
        <?php endif; ?>

    <?php endif; ?>

</div><!-- #front-page -->

<?php get_footer();?>