<?php 
    
    $GLOBALS['font_primary'] = get_field('font_primary','options');
    $GLOBALS['font_secondary'] = get_field('font_secondary','options');


    if(get_field('font_H1','options') == 'primary') {
        $GLOBALS['font_H1'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H1'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H2','options') == 'primary') {
        $GLOBALS['font_H2'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H2'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H3','options') == 'primary') {
        $GLOBALS['font_H3'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H3'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H4','options') == 'primary') {
        $GLOBALS['font_H4'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H4'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_paragraph','options') == 'primary') {
        $GLOBALS['font_paragraph'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_paragraph'] = $GLOBALS['font_secondary'];
    }

    $body_font_color = get_field('body_font_color','options');
    $color_primary_1 = get_field('color_primary_1','options');
    $color_primary_2 = get_field('color_primary_2','options');
    $color_secondary_1 = get_field('color_secondary_1','options');
    $color_secondary_2 = get_field('color_secondary_2','options');
    $color_page_bg = get_field('color_page_bg','options');
    $pre_footer_background = get_field('pre_footer_background','options');

    $h2_color = get_field('h2_font_color','options');
    $h3_color = get_field('h3_font_color','options');
    $h4_color = get_field('h4_font_color','options');

    // mobile navigation 
    $color_mobile_header = get_field('color_primary_1','options');
    
    // banner styles
    $color_banner_gradient = get_field('color_banner_gradient','options');
    $color_banner_gradient_opacity = get_field('color_banner_gradient_opacity','options');
    $color_banner_fonts = get_field('color_banner_fonts','options');
    
    // button styles
    $primary_button_style = get_field('primary_button_style','options');
    $primary_button_background_color = get_field('primary_button_background_color','options');
    $primary_button_text_color = get_field('primary_button_text_color','options');
    $primary_button_background_color_hover = get_field('primary_button_background_color_hover','options');
    $primary_button_text_color_hover = get_field('primary_button_text_color_hover','options');
    $primary_button_border_color = get_field('primary_button_border_color','options');
    $primary_button_border_weight = get_field('primary_button_border_weight','options');
    $primary_button_border_radius = get_field('primary_button_border_radius','options');

    $secondary_button_style = get_field('secondary_button_style','options');
    $secondary_button_background_color = get_field('secondary_button_background_color','options');
    $secondary_button_text_color = get_field('secondary_button_text_color','options');
    $secondary_button_background_color_hover = get_field('secondary_button_background_color_hover','options');
    $secondary_button_text_color_hover = get_field('secondary_button_text_color_hover','options');
    $secondary_button_border_color = get_field('secondary_button_border_color','options');
    $secondary_button_border_weight = get_field('secondary_button_border_weight','options');
    $secondary_button_border_radius = get_field('secondary_button_border_radius','options');

    // rgba value of primary color for gradient //
    list($r, $g, $b) = array_map(
        function ($c) {
          return hexdec(str_pad($c, 2, $c));
        },
        str_split(ltrim($color_banner_gradient, '#'), strlen($color_banner_gradient) > 4 ? 2 : 1)
      );

    // rgba value of mobile menu top bar //
    list($r2, $g2, $b2) = array_map(
        function ($c2) {
          return hexdec(str_pad($c2, 2, $c2));
        },
        str_split(ltrim($color_mobile_header, '#'), strlen($color_mobile_header) > 4 ? 2 : 1)
      );
?>

<style type="text/css">  
    /* global */
    .btn { color:<?php echo $color_primary_1; ?> }

    /* header */
    header { background:<?php echo $color_primary_1; ?> !important; }
    header #header-top #header-top_right #header-top_right_menu .menu li a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li:hover a { color:<?php echo $color_primary_2; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li a::before { background:<?php echo $color_secondary_1; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li.nav-contact a { background: <?php echo $color_primary_2; ?>; color:<?php echo $color_primary_1; ?> }
    header #header-top #header-top_right #header-top_right_menu .menu li.nav-contact a:hover { background: white; }
    header #header-top #header-top_right #header-top_right_menu .menu li .sub-menu { background:<?php echo $color_secondary_1; ?> !important; }
    header #header-top #header-top_right .navbar-form-search .search-form-container.hdn .search-input-group .btn { background: <?php echo $color_secondary_1; ?>; }
    header .navbar-form-search .form-control { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    header .navbar-form-search .icon-search-icon:before { color:<?php echo $color_primary_2; ?>; }

    header #header-top_right_menu #header-top_mobile #menu-icon .line { background:<?php echo $color_primary_2; ?>; }
    header #header-top_right_menu #menu-main-menu li .accordion-toggle span::before { color:<?php echo $color_primary_2; ?>; }

    @media screen and (max-width:1024px) {
        header .navbar-form-search .icon-search-icon:before { color:<?php echo $color_primary_1; ?>; }
        header #header-top_right_menu #menu-main-menu { background:<?php echo $color_primary_1; ?>; }
        header #header-top #header-top_right #header-top_right_menu .menu li .sub-menu { background:<?php echo $color_primary_1; ?> !important; }
        header #header-top_right_menu #menu-main-menu.opened::before { background-color: <?php echo "rgba(" . $r2 . ", " . $g2 . ", " . $b2 . ",.95)"; ?> }
        header #header-top_right_menu #menu-main-menu li .sub-menu .child-close { background:<?php echo $color_primary_1; ?>; color:<?php echo $color_primary_2; ?>; border: 1px solid <?php echo $color_primary_2; ?>; }
    }

    /* body */
    .body-container { background:<?php echo $color_page_bg; ?> !important; }
    .body-container p { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }
    .body-container h1 { font-family: <?php echo $GLOBALS['font_H1']; ?> !important; color:<?php echo $body_font_color; ?>; }
    .body-container h2 { font-family: <?php echo $GLOBALS['font_H2']; ?>; color:<?php echo $h2_color; ?>; font-weight:bold; }
    .body-container h3 { font-family: <?php echo $GLOBALS['font_H3']; ?>; color:<?php echo $h3_color; ?>; font-weight:normal; }
    .body-container h4 { font-family: <?php echo $GLOBALS['font_H4']; ?>; color:<?php echo $h4_color; ?>; font-weight:normal; }
    .body-container ul li { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }
    .body-container ol li { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }
    .body-container p a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $h3_color; ?>; }
    .body-container ul li a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }

    <?php if ($primary_button_style == 'bordered') { ?>
    .body-container .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color; ?>; border:<?php echo $primary_button_border_weight; ?>px solid <?php echo $primary_button_border_color; ?>; color:<?php echo $primary_button_text_color; ?>; border-radius:<?php echo $primary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color; ?>; color:<?php echo $primary_button_text_color; ?>; box-sizing:border-box; }
    <?php } ?>

    <?php if ($primary_button_style == 'bordered') { ?>
    .body-container .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color_hover; ?>; border:<?php echo $primary_button_border_weight; ?>px solid <?php echo $primary_button_border_color; ?>; color:<?php echo $primary_button_text_color_hover; ?> !important; border-radius:<?php echo $primary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color_hover; ?>; color:<?php echo $primary_button_text_color_hover; ?> !important; box-sizing:border-box; }
    <?php } ?>

    <?php if ($secondary_button_style == 'bordered') { ?>
    .body-container .btn.secondary { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color; ?>; border:<?php echo $secondary_button_border_weight; ?>px solid <?php echo $secondary_button_border_color; ?>; color:<?php echo $secondary_button_text_color; ?>; border-radius:<?php echo $secondary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn.secondary { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color; ?>; color:<?php echo $secondary_button_text_color; ?>; box-sizing:border-box; }
    <?php } ?>

    <?php if ($secondary_button_style == 'bordered') { ?>
    .body-container .btn.secondary:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color_hover; ?>; border:<?php echo $secondary_button_border_weight; ?>px solid <?php echo $secondary_button_border_color; ?>; color:<?php echo $secondary_button_text_color_hover; ?> !important; border-radius:<?php echo $secondary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn.secondary:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color_hover; ?>; color:<?php echo $secondary_button_text_color_hover; ?> !important; box-sizing:border-box; }
    <?php } ?>

    /* blocks */
    .awards { background:<?php echo $color_secondary_1; ?> !important; z-index: 0; }
    .banner .banner-gradient { background:linear-gradient(0deg, <?php echo "rgba(" . $r . ", " . $g . ", " . $b . ",1)"; ?> 0%, <?php echo "rgba(" . $r . ", " . $g . ", " . $b . ",.9)"; ?> 100%); opacity:.<?php echo $color_banner_gradient_opacity; ?> }
    .banner h1 { font-family: <?php echo $GLOBALS['font_H1']; ?> !important; color:<?php echo $color_banner_fonts; ?> !important; }
    
    <?php if ($primary_button_style == 'bordered') { ?>
    .banner .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color; ?>; border:<?php echo $primary_button_border_weight; ?>px solid <?php echo $primary_button_border_color; ?>; color:<?php echo $primary_button_text_color; ?>; border-radius:<?php echo $primary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .banner .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color; ?>; color:<?php echo $primary_button_text_color; ?>; box-sizing:border-box; border:none; }
    <?php } ?>

    <?php if ($primary_button_style == 'bordered') { ?>
    .banner .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color_hover; ?>; border:<?php echo $primary_button_border_weight; ?>px solid <?php echo $primary_button_border_color; ?>; color:<?php echo $primary_button_text_color_hover; ?> !important; border-radius:<?php echo $primary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .banner .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $primary_button_background_color_hover; ?>; color:<?php echo $primary_button_text_color_hover; ?> !important; box-sizing:border-box; border:none; }
    <?php } ?>
    
    .banner .main-contact .contact-block-right a:hover { color:<?php echo $color_primary_2; ?> }

    /* sidebar */
    .sidebar-block .testimonial-block { background:<?php echo $color_primary_1; ?> !important; }
    .sidebar-block .testimonial-block p.testimonial { font-family: <?php echo $GLOBALS['font_primary']; ?>; }
    .sidebar-block .testimonial-block p.author { font-family: <?php echo $GLOBALS['font_secondary']; ?>; }
    .sidebar-block .sidebar-spacer { border-bottom: 1px solid <?php echo $color_primary_1; ?>; }
    .sidebar-block .sidebar-header { color:<?php echo $body_font_color; ?>; font-family: <?php echo $GLOBALS['font_primary']; ?>; }
    .sidebar-block #menu-practice-areas-menu li { border-bottom: 1px solid <?php echo $color_primary_1; ?>; }
    .sidebar-block #menu-practice-areas-menu li a { font-family:<?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }
    .sidebar-block #menu-practice-areas-menu li a:hover { font-weight:bold; }
    .sidebar-block .sidebar-more a { color:<?php echo $h2_color; ?>; }
    .sidebar-block .sidebar-more a:hover { color:<?php echo $body_font_color; ?>; }
    .sidebar-block .sidebar-more:hover span { color:<?php echo $color_primary_2; ?>; }
    .sidebar-block .result-block p.large { color:<?php echo $color_secondary_2; ?>; }

    /* homepage */
    .home #hp-banner .subhead { font-family: <?php echo $GLOBALS['font_primary']; ?>; }

    /* practice area landing */
    .page-template-page-landing ul.landing-box li { background: <?php echo $color_primary_1; ?>; }
    .page-template-page-landing ul.landing-box li .all-pages { background: <?php echo $color_primary_2; ?> }
    .page-template-page-landing ul.landing-box li .all-pages.active { background:<?php echo $color_primary_2; ?>; }
    .page-template-page-landing ul.landing-box li ul.children { background:<?php echo $color_primary_2; ?>; }
    .page-template-page-landing ul.landing-box li ul.children li a { color:<?php echo $body_font_color; ?>; }

    /* navigational */
    .page-template-page-navigational ul.landing-box li { background: <?php echo $color_primary_1; ?>; }
    .page-template-page-navigational ul.landing-box li .all-pages { background: <?php echo $color_primary_2; ?> }
    .page-template-page-navigational ul.landing-box li .all-pages.active { background:<?php echo $color_primary_2; ?>; }
    .page-template-page-navigational ul.landing-box li ul.children { background:<?php echo $color_primary_2; ?>; }
    .page-template-page-navigational ul.landing-box li ul.children li a { color:<?php echo $body_font_color; ?>; }

    /* practice area parent */
    .page-template-page-practice-parent #testimonial { background: <?php echo $color_primary_1; ?>; }
    .page-template-page-practice-parent #testimonial p.testimonial-callout { font-family: <?php echo $GLOBALS['font_primary']; ?>; color:white; font-weight:normal; }

    /* blog landing */
    .blog article { background: <?php echo $color_primary_1; ?>; }
    .blog article .meta-content { background: <?php echo $color_primary_1; ?>; }

    /* case results archive */
    .post-type-archive-results .banner .column-50.result .result-main { background:<?php echo $color_secondary_1; ?> !important; }
    .post-type-archive-results .banner .column-50.result .accordions { background: <?php echo $color_secondary_2; ?>; }

    /* testimonials archive */
    .post-type-archive-reviews .featured { background:<?php echo $color_secondary_1; ?> !important; }

    /* landing page / navigational boxes */
    .post-type-archive-results .main-content .column-full .landing-box-container .landing-box { background: <?php echo $color_primary_1; ?>; }
    .post-type-archive-results .main-content .column-full .landing-box-container .accordions { background: <?php echo $color_primary_2; ?>; }
    .post-type-archive-results .main-content .column-full .landing-box-container .accordions.active { background: <?php echo $color_primary_2; ?>; }
    .post-type-archive-results .main-content .column-full .landing-box-container .accordions_content { background: <?php echo $color_primary_2; ?>; }

    /* contact form */
    .page-template-page-contact .gform_wrapper { background: <?php echo $color_primary_1; ?>; }
    .page-template-page-contact .gform_wrapper input[type="submit"] { background: <?php echo $color_primary_2; ?>; font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    .page-template-page-contact .gform_wrapper input[type="submit"]:hover { background: white !important; }

    /* pre-footer cta */
    #pre-footer { background:<?php echo $pre_footer_background; ?>; }
    #pre-footer h2 { color: <?php echo $color_primary_1; ?> }
    #pre-footer p { color: <?php echo $color_primary_1; ?>; }
    #pre-footer p.subhead { font-family: <?php echo $GLOBALS['font_primary']; ?>; color:<?php echo $h3_color; ?>; }
    #pre-footer .pre-footer-contact .contact-block-right p span.icon-right-arrow { color: <?php echo $color_primary_1; ?>; }

    /* footer */
    .footer { background:<?php echo $color_primary_1; ?> !important; } 
    .footer p, .footer ul li a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    .footer p a:hover { color: <?php echo $color_primary_2; ?>; }
    .footer .menu #menu-footer-menu li a:hover { color: <?php echo $color_primary_2; ?>; }
    .footer .container .columns a.social-link span { background-color: <?php echo $color_primary_2; ?> !important; }
    .footer .container .columns a.social-link span:hover { background-color: #ffffff !important; }
    .footer .footer-utility .utility a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    .footer .footer-utility .utility a :hover { color: <?php echo $color_primary_2; ?>; }

    .pagination .nav-links a { 
        color: white; 
        background:<?php echo $color_primary_1; ?>;
    }
    .pagination .nav-links a.prev:hover::before, 
    .pagination .nav-links a.next:hover::before { 
        background: <?php echo $color_primary_1; ?>; 
        color: white; }
    .pagination .nav-links a.prev::before, 
    .pagination .nav-links a.next::before {
        color: white;
        background: <?php echo $color_primary_1; ?>;
    }
    .pagination .nav-links .page-numbers {
        color: <?php echo $color_primary_1; ?>;
        font-family: <?php echo $GLOBALS['font_paragraph']; ?>;
        background:white;
    }
    .pagination .nav-links .page-numbers.current {
        color: <?php echo $color_primary_2; ?>;       
        background:<?php echo $color_primary_1; ?>;
    }

    @media screen and (max-width:1024px) {
        header #header-top #header-top_right #header-top_menu .menu { background:<?php echo $color_primary_1; ?>; }
        header #header-top #header-top_right #header-top_menu .menu li:hover ul.sub-menu { background:<?php echo $color_primary_1; ?>; }
    }

</style>