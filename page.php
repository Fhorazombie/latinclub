<?php get_header(); ?>

<div id="content">
	<div id="subheader" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
		<div id="titulos">
			<h1><?php the_title(); ?></h1>

			<?php if(get_secondary_title()){ ?>
			<h2><?php the_secondary_title()?></h2>
			<?php } ?>
		</div>
	</div>
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