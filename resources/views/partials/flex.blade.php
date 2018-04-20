<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

     // loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();
        if( get_row_layout() == 'main_content' ):

            include \App\template_path(locate_template('views/flex/content-main.php'));

        elseif( get_row_layout() == 'fw_image' ):
            $image = get_sub_field('image');
        ?>
            <img class="fw-image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
        <?php 

        elseif( get_row_layout() == 'carousel' ): 

            include \App\template_path(locate_template('views/flex/content-carousel.php'));

        elseif( get_row_layout() == 'panels' ): 

            include \App\template_path(locate_template('views/flex/content-panels.php'));

        elseif( get_row_layout() == 'cta' ): 

            include \App\template_path(locate_template('views/flex/content-cta.php'));

        elseif( get_row_layout() == 'latest_posts' ): 

            include \App\template_path(locate_template('views/flex/content-latest.php'));

        elseif( get_row_layout() == 'latest_cases' ): 

            include \App\template_path(locate_template('views/flex/content-cases.php'));

        elseif( get_row_layout() == 'extra_block' ): 

            include \App\template_path(locate_template('views/flex/content-block.php'));

        elseif( get_row_layout() == 'testimonials' ): 

            include \App\template_path(locate_template('views/flex/content-testimonials.php'));

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>