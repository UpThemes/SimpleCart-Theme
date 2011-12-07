<?php
/**
 * Error 404 template file
 *
 * This file is the Error 404 template file, used to display the Error 404 page per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_404()				Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_belowcontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_sidebar()			Defined in /library/extensions/sidebar-extensions.php
 *
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * @since 		SimpleCart 1.0
 */ 

/**
 * Inject "404 Not found" error in document header
 */
@header( "HTTP/1.1 404 Not found", true, 404 );

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
 * a specifric context only, via "header-404.php"
 */
get_header( '404' );
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

		<div id="post-0" class="post error404">
		
		<?php
			/**
			* Fire the 'simplecart_404' custom action hook
			* 
			* @param	null
			* @return	mixed	any output hooked into 'simplecart_404'
			*/
			simplecart_404()

		?>
		
		</div><!-- .post -->

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
 * a specific context only, via "footer-404.php"
 */
get_footer( '404' );
?>