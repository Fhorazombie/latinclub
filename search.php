<?php get_header(); ?>

<div id="content">
	<div id="innercontent" class="destacados innerpagessubcat">
	<h2 style="text-align: center"><?php single_cat_title() ?></h2>

		<?php 

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			global $query_string;
			$query_args = explode("&", $query_string);
			$search_query = array();

			foreach($query_args as $key => $string) {
			  $query_split = explode("=", $string);
			  $search_query[$query_split[0]] = urldecode($query_split[1]);
			} // foreach

			$postsporcat = new WP_Query( $search_query );

			$postporcat = "";
			
			 while( $postsporcat->have_posts() ): $postsporcat->the_post();

					$event_image= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>

					<a class="posts_cat" href="<?php the_permalink(); ?>">
						<div class="cat cat-page" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</div>
					</a>
			
		    <?php endwhile; ?>

		    	<div class="navigation">
		    		<div class="next-posts"><?php next_posts_link("Noticias mas antiguas &raquo;", $postsporcat ->max_num_pages); ?></div>
		    		<div class="prev-posts"><?php previous_posts_link("&laquo; Noticias mas Nuevas", $postsporcat ->max_num_pages); ?></div>
		    	</div>

			<?php wp_reset_query(); ?>
	</div>
</div>

<?php get_footer(); ?>