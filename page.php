<?php get_header(); ?>

            <div id="content" class="span8">
             
<?php the_post(); ?>
                 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'my-theme' ) . '&after=</div>') ?>                
<?php edit_post_link( __( 'Edit', 'my-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->          
             
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>           
             
            </div><!-- #content -->    
         
<?php get_sidebar(); ?>  
<?php get_footer(); ?>