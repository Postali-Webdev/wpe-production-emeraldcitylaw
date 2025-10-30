<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section id="hp-banner" style="background-image:url('<?php the_field('banner_background'); ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-full block">
                    <h1><?php the_field('banner_h1'); ?></h1>
                    <span class="banner-headline"><?php the_field('banner_headline'); ?></span>
                    <div class="spacer-60"></div>
                    <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                    <div class="spacer-60"></div>
                    <span class="icon-right-arrow"></span>
                </div>
            </div>
        </div>
    </section>

    <section class="blue" id="hp-panel-2">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('panel_2_headline'); ?></h2>
                </div>
                <div class="spacer-30"></div>
                <div class="column-50 block">
                    <?php the_field('panel_2_body_copy'); ?>
                </div>
                <div class="column-50 blue-rounded">
                    <?php if( have_rows('areas_of_focus') ): ?>
                    <p class="green">Areas of Focus</p>
                    <?php while( have_rows('areas_of_focus') ): the_row(); ?>  
                        <a class="focus-area" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('page_title'); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-3">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php the_field('panel_3_body_copy'); ?>
                </div>
                <div class="column-33">
                    <img src="/wp-content/uploads/2023/10/icon-quotes.png" class="icon-quote">
                    <p class="quote"><?php the_field('panel_3_testimonial'); ?></p>
                    <a href="/reviews/" class="btn">More Client Reviews</a>
                    <div class="spacer-60"></div>
                    <?php if( have_rows('panel_3_review_logos') ): ?>
                    <div class="reviews-block">
                    <?php while( have_rows('panel_3_review_logos') ): the_row(); ?>  
                        <?php 
                        $image = get_sub_field('review_logo');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-4">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <div class="practice-areas-copy">
                        <h2><?php the_field('panel_4_headline'); ?></h2>
                        <p class="large"><em><?php the_field('panel_4_subheadline'); ?></em></p>
                    </div>

                    <?php if( have_rows('practice_areas') ): ?>
                    <?php while( have_rows('practice_areas') ): the_row(); ?>  
                        <div class="practice-area-box">
                            <div class="practice-area-box_top">
                                <h3><?php the_sub_field('headline'); ?></h3>
                                <p><?php the_sub_field('intro_copy'); ?></p>
                                <p><strong>Featured <?php the_sub_field('practice_area_name'); ?> Case</strong></p>
                                <?php
                                $featured_case = get_sub_field('featured_case');
                                if( $featured_case ): ?>
                                    <p class="large"><?php echo esc_html( $featured_case->post_title ); ?></p>
                                    <p><a href="/results/" class="results">MORE RESULTS</a></p>
                                <?php endif; ?>
                            </div>
                            <div class="practice-area-box_center">
                                <p class="caps spaced">HOW CAN WE HELP YOU?</p>

                                <?php if (get_sub_field('practice_area_name') == 'Criminal Defense') {
                                    $parent = '4477';
                                    $parenturl = 'criminal-defense';
                                    $exclude = '4981';
                                } elseif (get_sub_field('practice_area_name') == 'Personal Injury') {
                                    $parent = '4483';
                                    $parenturl = 'personal-injury';
                                    $exclude = '4982';
                                } elseif (get_sub_field('practice_area_name') == 'Traffic') {
                                    $parent = '4548';
                                    $parenturl = 'traffic-attorney';
                                } ?>
                                <ul class="practice-children">
                                <?php 
                                    wp_list_pages( array(
                                        'child_of' => $parent,
                                        'depth' => 2,
                                        'sort_order' => 'asc',
                                        'title_li' => "",
                                        'exclude' => $exclude,
                                    ));
                                ?>
                                <?php if(get_sub_field('add_additional_practice_areas')) { ?>
                                    <?php if( have_rows('additional_practice_areas') ): ?>
                                    <?php while( have_rows('additional_practice_areas') ): the_row(); ?>  
                                        <li><?php the_sub_field('practice_area_name'); ?></li>
                                    <?php endwhile; ?>
                                    <?php endif; ?> 
                                <?php } ?>
                                </ul>
                                <div class="spacer-15"></div>
                                <p><a href="/<?php echo $parenturl; ?>/">Our <?php the_sub_field('practice_area_name'); ?> Attorneys</a></p>
                            </div>
                            <div class="practice-area-box_bottom">
                                <div class="accordions">
                                    <div class="accordions_title"><p class="caps spaced">What our <?php the_sub_field('practice_area_name'); ?> Clients are saying</p><span></span></div>
                                    <div class="accordions_content" style="display: none;"><p><?php the_sub_field('testimonial'); ?></p></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-5" class="blue">
        <div class="container">
            <div class="columns">
                <div class="column-33" style="background-image:url('<?php the_field('panel_5_left_photo'); ?>');">
                    &nbsp;
                </div>
                <div class="column-66">
                    <?php the_field('panel_5_right_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-6" class="blue">
        <div class="container">
            <div class="columns">
                <div class="column-75 centered center">
                    <?php the_field('panel_6_top_copy'); ?>
                </div>
                <div class="spacer-60"></div>
                <div class="column-50 blue-rounded">
                    <?php the_field('panel_6_left_copy'); ?>
                </div>
                <div class="column-50 blue-rounded">
                    <?php the_field('panel_6_right_copy'); ?>
                </div>
                <div class="spacer-60"></div>
                <a href="/contact-us/" class="btn">SCHEDULE A FREE CASE EVALUATION</a>
            </div>
        </div>
    </section>

    <section id="hp-contact" >
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('contact_left_copy'); ?>
                    <div class="spacer-30"></div>
                    <div class="contact-box">
                        <div class="box">
                            <p class="box_header">Address:</p>
                            <p>
                                <?php echo get_bloginfo( 'name' ); ?><br>
                                <?php the_field('address','options'); ?>
                                <br><br>
                                <a href="<?php the_field('driving_directions','options'); ?>" target="_blank" title="Driving Directions">DIRECTIONS</a>
                            </p>
                        </div>
                        <div class="box">
                            <p class="box_header">Contact:</p>
                            <p>
                                Phone:<br>
                                <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Emerald City Law Group"><?php the_field('phone_number','options'); ?></a><br>
                                Email:<br>
                                <a href="mailto:<?php the_field('email_address','options'); ?>" title="Email Emerald City Law Group"><?php the_field('email_address','options'); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column-50 ">
                    <?php the_field('contact_right_copy'); ?>
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>