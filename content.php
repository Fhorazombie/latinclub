<div id="content" class="<?php the_ID(); ?> <?php post_class(); ?>">
	<div id="subheader" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
		<div id="titulos">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div id="innercontent">
		
		                 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		                 
		                     <?php the_content(); ?> 

		                     <div id="share"><?php 

		                     	if ( function_exists( 'sharing_display' ) ) {
		                     	    sharing_display( '', true );
		                     	}
		                     	 
		                     	if ( class_exists( 'Jetpack_Likes' ) ) {
		                     	    $custom_likes = new Jetpack_Likes;
		                     	    echo $custom_likes->post_likes( '' );
		                     	}

		                     	?>
		                     </div>

		                     <?php echo do_shortcode('[fbcomments]'); ?>

		                 <?php endwhile; ?>
		                 
		                 <?php else: ?>
		                 
		                     <p>No content has been posted to this page.</p>
		                     
		                 <?php endif; ?>
		 				<div>
						<div id="meta">Publicado el <?php the_date(get_option('date_format')); ?> <?php the_time(get_option('time_format')); ?> | <?php the_category('  |  '); ?> | <?php the_author_posts_link(); ?></div>

		 				</div>

	</div>
	
</div>