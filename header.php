<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="utf-8">

	<title><?php if(is_home() || is_front_page()) { bloginfo( 'name' ); ?> | <?php bloginfo('description'); } else {  bloginfo( 'name' ); ?> | <?php if(is_single() || is_page()) { the_title(); } elseif(is_category() || is_archive()) {single_cat_title();} }?></title>

	<meta id="viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

<meta name="google-site-verification" content="VNPYwarQPC71XORUoNBvuArdE9jzCgWKalzApoiDvXI" />

</head>

<body <?php body_class(); ?>>

	<div class="wrapper">

		<?php

	   show_admin_bar( true);

	?>

		<div id="head">

			<div id="logo">

				<div id="logotitulo">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>



					<?php if ( get_theme_mod( 'latinclub_logo' ) ) : ?>

							

							<img src='<?php echo esc_url( get_theme_mod( 'latinclub_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>



					<?php else : ?>

						    <hgroup id="nombre_p">

						        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>

						        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>

						    </hgroup>

					<?php endif; ?>



					</a>

				</div>

				<div id="redes">

					<ul>

						

						<?php if (get_option('twitter_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('twitter_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/twitterX2.png">

							</a>

						</li>

						<?php } ?>




						<?php if (get_option('twitch_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('twitch_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/twitch.png">

							</a>

						</li>

						<?php } ?>



						<?php if (get_option('youtube_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('youtube_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/youtubeX2.png">

							</a>

						</li>

						<?php } ?>

						<?php if (get_option('facebook_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('facebook_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/facebookX2.png">

							</a>

						</li>

						<?php } ?>

						<?php if (get_option('Battlefy_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('Battlefy_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/Battlefy.png">

							</a>

						</li>

						<?php } ?>

						<?php if (get_option('discord_url')) { ?>

						<li class="icon_redes">

							<a href="<?php echo get_option('discord_url'); ?>">

								<img src="<?php bloginfo('template_url'); ?>/img/discordX2.png">

							</a>

						</li>

						<?php } ?>



					</ul>

				</div>

			</div>

			<div id="menuRicon">

				

			</div>

			<div id="menu">

				<?php 



				wp_nav_menu(

						array(

							'theme_location' => 'header-menu',

							'container' => false,

							'container_class' => '',

							)

					);

				?>

			</div>



		</div>