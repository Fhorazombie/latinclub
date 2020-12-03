<?php

/* Template Name: Template sin titulo
*/

 ?>

<?php get_header(); ?>

<div id="content">
	<div id="innercontent">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    <?php the_content(); ?> 

			<?php endwhile; ?>
			
			<?php else: ?>
			
			    <p>No content has been posted to this page.</p>
			    
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>