<?php
// Extra Sections Template Part
if( have_rows('panel') ):
?>
<section class="panels" id="block-waypoint">
    <?php
        // loop through the rows of data
        while ( have_rows('panel') ) : the_row();

            // display a sub field value
            $width = get_sub_field('panel_style');

            $bgstyle = get_sub_field('bg_type');

            if($bgstyle=='colour'):
                $style = "background-color:".get_sub_field('bg_colour').";";
            elseif($bgstyle=='image'):
                $style = "background-image:url(".get_bloginfo('template_directory')."/dist/images/grey.png);";
            endif;
            if(get_sub_field('text_colour')) $style .= "color:".get_sub_field('text_colour').";";
    ?>
        
        <div class="child <?php if($width): echo $width; endif; ?> lazy" <?php if(get_sub_field('bg_image')): ?> data-original="<?php the_sub_field('bg_image'); ?>" <?php endif; ?> style="<?php echo $style; ?>">
            <div class="child-content">
                <?php if(get_sub_field('link')): ?><a href="<?php the_sub_field('link'); ?>"><?php endif; ?>
                    <?php the_sub_field('content'); ?>
                <?php if(get_sub_field('link')): ?></a><?php endif; ?>
            </div>
        </div>
    <?php 
        endwhile;
?>
</section>
<?php 

endif;
?>