<?php get_header(); ?>

<div id="content_cat">
	<h1><?php single_cat_title() ?></h1>
	<div id="cat_show">
	<?php
	 
	// Variables
	$numposts = 8; // How many posts do we want?

	$categoryid = get_cat_ID( single_cat_title("",false) );

	 
	// Get Parents
	$parents = new WP_Query(array(
	  'posts_per_page' => $numposts,
	  'hide_empty' => 0,
	  'post_type' => 'page',
	  'cat' => $categoryid
	));

	while ($parents->have_posts()) : $parents->the_post(); 

		$imageid = MultiPostThumbnails::get_post_thumbnail_id('page', 'secondary-image', $post->ID);
		$imageurl = wp_get_attachment_image_src($imageid,'large');

		
	?>
		<a href="<?php the_permalink(); ?>">
			<div class="cat" style="background-image: url(<?php if (MultiPostThumbnails::get_post_thumbnail_id('page', 'secondary-image', $post->ID)) { echo $imageurl[0]; } else {the_post_thumbnail_url();} ?>)">
				<h2><?php the_title(); ?></h2>
			</div>
		</a>
	<?php endwhile; wp_reset_postdata();?>
	</div>
</div>




 

<?php get_footer(); ?>