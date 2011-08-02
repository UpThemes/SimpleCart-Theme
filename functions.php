<?php

define('THEMELIB', TEMPLATEPATH . '/library');

// Load legacy functions
require_once(THEMELIB . '/legacy/deprecated.php');

// Load widgets
require_once(THEMELIB . '/extensions/widgets.php');

// Load custom header extensions
require_once(THEMELIB . '/extensions/header-extensions.php');

// Load custom content filters
require_once(THEMELIB . '/extensions/content-extensions.php');

// Load custom Comments filters
require_once(THEMELIB . '/extensions/comments-extensions.php');

// Load custom Widgets
require_once(THEMELIB . '/extensions/widgets-extensions.php');

// Load the Comments Template functions and callbacks
require_once(THEMELIB . '/extensions/discussion.php');

// Load custom sidebar hooks
require_once(THEMELIB . '/extensions/sidebar-extensions.php');

// Load custom footer hooks
require_once(THEMELIB . '/extensions/footer-extensions.php');

// Add Dynamic Contextual Semantic Classes
require_once(THEMELIB . '/extensions/dynamic-classes.php');

// Need a little help from our helper functions
require_once(THEMELIB . '/extensions/helpers.php');

// Load shortcodes
require_once(THEMELIB . '/extensions/shortcodes.php');

// Adds filters for the description/meta content in archives.php
add_filter( 'archive_meta', 'wptexturize' );
add_filter( 'archive_meta', 'convert_smilies' );
add_filter( 'archive_meta', 'convert_chars' );
add_filter( 'archive_meta', 'wpautop' );

// Translate, if applicable
load_theme_textdomain('simplecart', THEMELIB . '/languages');

$locale = get_locale();
$locale_file = THEMELIB . "/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);

// load jQuery
wp_enqueue_script('jquery');

// Get UpThemes Framework
include("admin/admin.php");

function custom_css(){
    global $up_options;
    $custom_css = '<style type="text/css">';
			
		$custom_css .= 'body{';		
		if($up_options->background)				$custom_css .= 'background-image: url("' . $up_options->background . '");';
		if($up_options->backgroundcolor) 		$custom_css .= 'background-color: ' . $up_options->backgroundcolor . ';';
		if($up_options->background_position) 	$custom_css .= 'background-position: ' . $up_options->background_position . ';';
		if($up_options->background_attachment) 	$custom_css .= 'background-attachment: ' . $up_options->background_attachment . ';';
		if($up_options->background_repeat) 		$custom_css .= 'background-repeat: ' . $up_options->background_repeat . ';';
		$custom_css .= "}";

		if($up_options->linkcolor)				$custom_css .= "a,a:link,a:visited{ color: ".$up_options->linkcolor.";}";

		if($up_options->hovercolor)				$custom_css .= "a:hover{ color: ".$up_options->hovercolor.";}";

		if($up_options->activecolor)			$custom_css .= "a:active{ color: ".$up_options->activecolor.";}";

		if($up_options->buy_button_color)		$custom_css .= "input.wpsc_buy_button{ background: ".$up_options->buy_button_color."; border-color: ".$up_options->buy_button_color."}";
		if($up_options->buy_button_hover_color)	$custom_css .= "input.wpsc_buy_button:hover{ background: ".$up_options->buy_button_hover_color."; border-color: ".$up_options->buy_button_hover_color."}";

		if($up_options->sidebar_pagelink_color)	$custom_css .= ".aside .current_page_item a, .aside li a:hover{ color: ".$up_options->sidebar_pagelink_color.";}";

    $custom_css .= '</style>';

	echo $custom_css;
}

add_action('wp_head', 'custom_css');

function upfw_seo_options(){
	
	global $up_options;
	
	if( has_filter('simplecart_doctitle') ):
	
		if( is_home() || is_front_page() ):
			
			if( $up_options->homepage_title )
				add_filter('simplecart_doctitle','upfw_seo_home_title',1,600);
			
			if( $up_options->homepage_description )
				add_action('wp_head','upfw_seo_home_description');
		
			if( $up_options->homepage_keywords )
				add_action('wp_head','upfw_seo_home_keywords');
		
			echo "awesome";
			
		endif;

		echo "awesome";
	
	endif;
		
}

add_action('init','upfw_seo_options');

function upfw_seo_home_title($elements){
	global $up_options;
	$elements = '<title>' . $up_options->homepage_title . '</title>';
	return $elements;
}

function upfw_seo_home_description(){
	global $up_options;
	echo '<meta name="description" content="' . $up_options->homepage_description . '"/>';
}

function upfw_seo_home_keywords(){
	global $up_options;
	echo '<meta name="keywords" content="' . $up_options->homepage_keywords . '"/>';
}

function simplecart_header_custom() { 
	global $up_options;
?>
        <div id="blog-title"><span><a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home">
		<?php if($up_options->logo): ?>
        <img src="<?php echo $up_options->logo; ?>" alt="<?php bloginfo('name') ?>" />
        <?php else: ?>
        <?php bloginfo('name') ?>
		<?php endif; ?>
		</a></span></div>
		
		<?php
		
		$menu_args = array(
		  'menu'            => "primary", 
		  'container'       => "div", 
		  'container_id'    => "access",
		  'menu_class'      => 'sf-menu', 
		  'menu_id'         => "nav",
		  'echo'            => true,
		  'fallback_cb'     => 'wp_page_menu',
		  'theme_location'  => 'primary');
		
		wp_nav_menu( $menu_args );

		?>
		<div class="clear"></div>
<?php
}

function theme_setup(){
	
	global $up_options;
	
	remove_action('simplecart_header','simplecart_blogtitle',3);
	remove_action('simplecart_header','simplecart_blogdescription',5);
	remove_action('simplecart_header','simplecart_access',9);
	add_action('simplecart_header','simplecart_header_custom',1);

	add_filter('simplecart_sidebar', 'replace_sidebar');
	
	add_theme_support('post-thumbnails');
	
	register_nav_menus(array(
		"primary" => __("Primary Menu")
	));
	
	wp_enqueue_script( 'hoverIntent', get_bloginfo("stylesheet_directory") . "/superfish/js/hoverIntent.js", array('jquery') );
	wp_enqueue_script( 'jquery.bgiframe', get_bloginfo("stylesheet_directory") . "/superfish/js/jquery.bgiframe.min.js", array('hoverIntent') );
	wp_enqueue_script( 'supersubs', get_bloginfo("stylesheet_directory") . "/superfish/js/supersubs.js", array('jquery.bgiframe') );
	wp_enqueue_script( 'superfish', get_bloginfo("stylesheet_directory") . "/superfish/js/superfish.js", array('supersubs') );
	wp_enqueue_script( 'global', get_bloginfo("stylesheet_directory") . "/js/global.js", array('superfish') );
	
	wp_enqueue_style( 'superfish', get_bloginfo("stylesheet_directory") . "/superfish/css/superfish.css" );
	wp_enqueue_style( 'simplecart', get_bloginfo("stylesheet_directory") . "/wpsc-default.css" );
	add_image_size('tiny', 48, 48, true);
	add_image_size('single-thumb', 350, 350, true);

	if(function_exists('deregister_theme_layout')):
            deregister_theme_layout('left_column_grid');
            deregister_theme_layout('right_column_grid');
        endif;

}

add_action('init','theme_setup',2);

function replace_sidebar() {?>

    <?php if (is_sidebar_active('primary-aside')) { ?>
	<div id="primary" class="aside main-aside">
		<ul class="xoxo">
			<?php dynamic_sidebar('primary-aside'); ?>
		</ul>
	</div><!-- #primary .aside -->
    <?php }	

}

/* Update Simplecart sizes and regenerate thumbnails */

function simplecart_regenerate(){

    $check = get_option('simplecart_regenerate');
    if(!$check):
        update_option('product_image_width', '182');
        update_option('product_image_height', '182');
        update_option('single_view_image_width', '350');
        update_option('single_view_image_height', '350');
        add_option('simplecart_regenerate', '1');
        $sendback = get_bloginfo('wpurl').'/wp-admin/admin.php?page=wpsc-settings&tab=presentation&regenerate=true&simplecart_regenerate=true';
        header('Location: '.$sendback);
        die();
    endif;
}
/* Check if WP E-Commerce Installed Before Regenerating Thumbs */
if(class_exists('WP_eCommerce') && (preg_match('/3\.8/', get_option('wpsc_version')))):
    if(is_admin())add_action('init', 'simplecart_regenerate');
endif;



?>