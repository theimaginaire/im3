<?php
// WP_Query arguments
$args = array(
	'post_type' => 'case-studies',
	'posts_per_page'         => get_sub_field('num_posts'),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
?>


<div class="owl-carousel case-carousel" id="waypoint">

	<?
	while ( $query->have_posts() ):
		$query->the_post();
	?>
	<div class="item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class="item-content">
			<div class="case-content">
				<div class="recent-work"><h3>Recent Work</h3></div>
				<div class="case-info">
					<div class="case-title"><h3><?php the_title(); ?></h3></div>
					<div class="view-btn"><a href="<?php the_permalink(); ?>">View The Project</a></div>
				</div>
			</div>
		</div>
		<div class="overlay"></div>

	</div>
	<?
	endwhile;
?>
</div>

<? 
endif;
// Restore original Post Data
wp_reset_postdata();