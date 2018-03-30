<div id="sidebar" class="span2">
    <?php if ( is_sidebar_active('primary_widget_area') ) : ?>
        <div id="primary" class="widget-area">
                <?php dynamic_sidebar('primary_widget_area'); ?>
        </div><!-- #primary .widget-area -->
<?php endif; ?>      
         
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
        <div id="secondary" class="widget-area">
                <?php dynamic_sidebar('secondary_widget_area'); ?>
        </div><!-- #secondary .widget-area -->
<?php endif; ?>
</div><!-- div sidebar -->
