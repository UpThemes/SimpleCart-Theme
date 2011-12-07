<?php
/**
 * Author archive index template file
 *
 * This file is the author archive index template file, used to display author archive index pages per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * @link 		http://codex.wordpress.org/Function_Reference/the_post	 			the_post()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_page_title()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_above()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_author_info_avatar()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_archiveloop()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_below()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_belowcontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_sidebar()			Defined in /library/extensions/sidebar-extensions.php
 * 
 * @uses		upfw_get_template_context()	Defined in /admin/functions.php
 *
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * @since 		SimpleCart 1.0
 */ 

/**
 * Globalize $up_options
 * 
 * @global	array	$up_options		Theme Options
 */
global $up_options;

/**
 * Include the header template part file
 * 
 * MUST come first. 
 * Calls the header PHP file. 
 * Used in all primary template pages
 * 
 * @see {@link: http://codex.wordpress.org/Function_Reference/get_header get_header}
 * 
 * Child Themes can replace this template part file globally, via "header.php", or in
 * a specifric context only, via "header-author.php"
 */
get_header( 'author' );

/**
 * Fire the 'simplecart_abovecontainer' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovecontainer'
 */
simplecart_abovecontainer();

?>

<div id="container">
	<div id="content">
		<div class="inner">
		<?php
	
		the_post();

		/**
		 * Display Page Title
		 * 
		 * Output contextually dynamic Page Title
		 * 
		 * @param	null
		 * @return	string	HTML markup for Page Title
		 */
		simplecart_page_title();

		/**
		 * Fire the 'simplecart_navigation_above' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_above'
		 */
		simplecart_navigation_above();

		/* if display author bio is selected */ 
		if($up_options->authorinfo == 'true' & !is_paged()) { ?>
		
			<div id="author-info" class="vcard">
				<h2 class="entry-title"><?php echo $authordata->first_name; ?> <?php echo $authordata->last_name; ?></h2> 
			
				<?php 
				/**
				 * Output the Author avatar
				 * 
				 * @param	null
				 * @return	string	HTML markup for author avatar
				 */
				simplecart_author_info_avatar();
				?>
			
				<div class="author-bio note">
					<?php
				
					if ( !(''== $authordata->user_description) ) : echo apply_filters('archive_meta', $authordata->user_description); endif; ?>
				
				</div>  			
			<div id="author-email">
				<a class="email" title="<?php echo antispambot($authordata->user_email); ?>" href="mailto:<?php echo antispambot($authordata->user_email); ?>"><?php _e('Email ', 'simplecart') ?><span class="fn n"><span class="given-name"><?php echo $authordata->first_name; ?></span> <span class="family-name"><?php echo $authordata->last_name; ?></span></span></a>
				<a class="url"  style="display:none;" href="<?php bloginfo('home') ?>/"><?php bloginfo('name') ?></a>   
			</div>
		</div><!-- #author-info -->
		<?php 
		}

		/**
		 * Fire the 'simplecart_authorloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_authorloop'
		 */
		simplecart_authorloop();

		/**
		 * Fire the 'simplecart_navigation_below' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_below'
		 */
		simplecart_navigation_below(); 
		?>
		</div>
	</div><!-- #content -->
</div><!-- #container -->

<?php 
/**
 * Fire the 'simplecart_belowcontainer' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowcontainer'
 */
simplecart_belowcontainer();

/**
 * Include the default sidebar
 * 
 * @param	null
 * @return	mixed	get_sidebar() output
 */
simplecart_sidebar();

/**
 * Include the footer template part file
 * 
 * MUST come last. 
 * Calls the footer PHP file. 
 * Used in all primary template pages
 * 
 * Codex reference: {@link http://codex.wordpress.org/Function_Reference/get_footer get_footer}
 * 
 * Child Themes can replace this template part file globally, via "footer.php", or in
 * a specific context only, via "footer-author.php"
 */
get_footer( 'author' );
?>