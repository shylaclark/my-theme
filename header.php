<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="shortcut icon" href="/s_favicon-20121129-favicon.ico" >
    <title>
        <?php
            if ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
            elseif ( is_page() ) { single_post_title(''); }
            elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
            elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
            else { bloginfo('name'); wp_title('|'); get_page_number(); }
        ?>
    </title>
     
    <meta charset="<?php bloginfo('charset'); ?>" />
     
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
     

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'my-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'my-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.min.css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_enqueue_script('bootstrap', get_bloginfo('template_url') . '/js/bootstrap.min.js', array('jquery'), '', true); ?>
    <?php wp_head(); ?>
    
</head>
 
<body>
    <?php include_once("analyticstracking.php") ?>
<div id="wrapper" class="container">
    <div id="header">
         
            <div id="branding">
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    <?php if ( is_home() || is_front_page() ) { ?>
                        <h3 id="blog-description"><?php bloginfo( 'description' ) ?></h3>

                    <?php } else { ?>
                        <div id="blog-description"><?php bloginfo( 'description' ) ?></div>
                <?php } ?>
            </div><!-- #branding -->
             <hr />
            <div id="access">
                <?php wp_nav_menu( array( 'main' => 'Main' )); ?>
            </div><!-- #access -->
               
    </div><!-- #header -->
     
    <div id="main">