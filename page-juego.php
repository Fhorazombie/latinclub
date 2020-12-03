<?php
/* Template Name: Template Juego
MultiEdit: Eventos, UltimosGandores, TablonEquipos, ListaNegra
*/

$eventos = multieditDisplay('Eventos', false);
$ultimosG = multieditDisplay('UltimosGandores', false);
$tablon = multieditDisplay('TablonEquipos', false);
$listaN = multieditDisplay('ListaNegra', false);

?>

<?php get_header(); ?>

<div id="content">
	<div id="subheader" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
		<div id="titulos">
			<h1><?php the_title(); ?></h1>

			<?php if(get_secondary_title()){ ?>
			<h2><?php the_secondary_title()?></h2>
			<?php } ?>
		</div>
		<div id="submenu">
			<ul>
				<li id="destacados" class="submenuitem">
					Noticias
				</li>

				<?php if (!$eventos == "" || !$eventos == null ) {?>
				<li id="eventos" class="submenuitem">Eventos</li>
				<?php } ?>

				<?php if (!$ultimosG == "" || !$ultimosG == null) {?>
				<li id="ganadores" class="submenuitem">ultimos ganadores</li>
				<?php } ?>

				<?php if (!$tablon == "" || !$tablon == null) {?>
				<li id="tablon" class="submenuitem">tablón de equipos</li>
				<?php } ?>

				<?php if (!$listaN == "" || !$listaN == null) {?>
				<li id="listaN" class="submenuitem">lista negra</li>
				<?php } ?>

			</ul>
		</div>
	</div>
	<div id="innercontent" class="destacados innerpagessubcat">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	    <?php the_content(); ?> 

	<?php endwhile; ?>
	
	<?php else: ?>
	
	    <p>No content has been posted to this page.</p>
	    
	<?php endif; ?>
		<?php 

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$slugcat = get_the_title();

			$categorias = get_the_category();

			foreach ($categorias as $cat) {
				$cat = $cat->cat_name;
				similar_text($cat, $slugcat, $similar);
				$similar = intval($similar);
				$similitud1 = $similar >= 50;
				$similitud2 = $similar == 100;
				if ( $similitud1 == 1 || $similitud2 == 1) {
					$categoria = $cat;
				}
			}

			$query_args = array(
				'paged'          => $paged,
				'post_type'				=>	'post',
				'posts_per_page'		=>	9,
				'post_status'			=>	'publish',
				'ignore_sticky_posts'	=>	true,
				'orderby'				=>	'date',
				'order'					=>	'DESC',
				'category_name'         => $categoria,
			);

			$postsporcat = new WP_Query( $query_args );

			$postporcat = "";
			
			 while( $postsporcat->have_posts() ): $postsporcat->the_post();

					$event_image= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>

					<a class="posts_cat" href="<?php the_permalink(); ?>">
						<div class="cat cat-page" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
							<h2><?php the_title(); ?></h2>
							<p><?php echo get_excerpt(); ?></p>
						</div>
					</a>
			
		    <?php endwhile; ?>

		    	<div class="navigation">
		    		<div class="next-posts"><?php next_posts_link("Noticias mas antiguas &raquo;", $postsporcat ->max_num_pages); ?></div>
		    		<div class="prev-posts"><?php previous_posts_link("&laquo; Noticias mas Nuevas", $postsporcat ->max_num_pages); ?></div>
		    	</div>

			<?php wp_reset_query(); ?>
	</div>

	<?php if (isset($eventos)) {?>
	<div id="innercontent" class="eventos innerpagessubcat">
		<?php 
		
			echo do_shortcode($eventos); 

		?>
	</div>
	<?php } ?>

	<?php if (isset($tablon)) {?>
	<div id="innercontent" class="tablon innerpagessubcat">
		<?php echo do_shortcode($tablon); ?>
	</div>
	<?php } ?>

	<?php if (isset($listaN)) {?>
	<div id="innercontent" class="listaN innerpagessubcat">
		<?php echo do_shortcode($listaN); ?>
	</div>
	<?php } ?>
	
	<?php if (isset($ultimosG)) {?>
	<div id="innercontent" class="ganadores innerpagessubcat" style="position: initial;">
		<?php echo do_shortcode($ultimosG); ?>
	</div>
	<?php } ?>

</div>

<?php get_footer(); ?>