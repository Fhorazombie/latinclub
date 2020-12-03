<?php

//Registro de Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Añadiendo clases a los items de los menus
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes){
     $classes[] = 'itemmenu';
     return $classes;
}

//Registro logo
add_action( 'customize_register', 'latinclub_cuztomize_register' );
function latinclub_cuztomize_register($wp_customize) {

    $wp_customize->add_section( 'latinclub_logo_section', array(
        'title'          => 'Logo',
        'description'    => 'Sube tu logo para sustituir el titulo',
        'priority'       => 30,
    ) );

    $wp_customize->add_setting( 'latinclub_logo' , array(
        'default'        => '',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'latinclub_logo', array(
        'label'   => 'Logo',
        'section' => 'latinclub_logo_section',
        'settings'   => 'latinclub_logo',
    ) ) );
}


//Agregar Thubnails Image

add_theme_support( 'post-thumbnails' );

//Agregar categorias y tags a las paginas
function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );


//Login Logo
function custom_login_logo() {
    echo '<style type="text/css">

    body {
        background: #000 !important;
    }

    h1 a {
        background-image: url('.get_bloginfo('template_directory').'/img/logo.png) !important; 
        background-size: auto 100%!important;
            width: 100% !important;
    }
    </style>';
}
add_action('login_head', 'custom_login_logo');



add_filter( 'avatar_defaults', 'newgravatar' );
function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/img/gravataricon2.gif';
$avatar_defaults[$myavatar] = "LatinClubCrew";
return $avatar_defaults;
}


// Limitar el resumen por numero de caracteres
function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 90);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt .="... (Ver más)";
return $excerpt;
}


//Opciones del template
function opciones_menu_perfumes(){
	    ?>
		    <div class="wrap">
            <div style="text-align: center;">
            <img style="width: 50%" src="<?php echo get_bloginfo('template_directory') ?>/img/logo.png">
            </div>
		    <h1>Opciones del template de LatinClub</h1>
		    <form method="post" action="options.php">
		        <?php
		            settings_fields("section");
		            do_settings_sections("theme-options");      
		            submit_button(); 
		        ?>          
		    </form>
			</div>
		<?php
}
function menu_perfumes_theme()
{
	add_menu_page("Opciones del tema", "Opciones Tema", "manage_options", "theme-panel", "opciones_menu_perfumes", null, 1);
}
add_action("admin_menu", "menu_perfumes_theme");


//Redes sociales
function aparecer_twitch_element()
{
	?>
    	<input type="text" name="twitch_url" id="twitch_url" value="<?php echo get_option('twitch_url'); ?>" />
    <?php
}

function aparecer_discord_element()
{
	?>
    	<input type="text" name="discord_url" id="discord_url" value="<?php echo get_option('discord_url'); ?>" />
    <?php
}

function aparecer_youtube_element()
{
	?>
    	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
    <?php
}

function aparecer_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function aparecer_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function aparecer_Battlefy_element()
{
    ?>
        <input type="text" name="Battlefy_url" id="Battlefy_url" value="<?php echo get_option('Battlefy_url'); ?>" />
    <?php
}

function aparecer_theme_panel_fields()
{
	add_settings_section("section", "Elige las opciones del template", null, "theme-options");
	add_settings_field("facebook_url", "Facebook Url", "aparecer_facebook_element", "theme-options", "section");
	add_settings_field("twitter_url", "Twitter Url", "aparecer_twitter_element", "theme-options", "section");
	add_settings_field("youtube_url", "Youtube Url", "aparecer_youtube_element", "theme-options", "section");
	add_settings_field("discord_url", "Discord Url", "aparecer_discord_element", "theme-options", "section");
	add_settings_field("twitch_url", "Twitch Url", "aparecer_twitch_element", "theme-options", "section");
    add_settings_field("Battlefy_url", "Battlefy Url", "aparecer_Battlefy_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "youtube_url");
    register_setting("section", "discord_url");
    register_setting("section", "twitch_url");
    register_setting("section", "Battlefy_url");
}

add_action("admin_init", "aparecer_theme_panel_fields");

// Quitar Jetpack Share icons

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );


 ?>