<?php
/**
 * Single post template file
 *
 * This file is the single post template file, used to display single post pages per
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
 * @uses		simplecart_singlepost()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_below()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_comments_template()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_belowcontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_sidebar()			Defined in /library/extensions/sidebar-extensions.php
 *
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * @since 		SimpleCart 1.0
 */ 

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
 * a specifric context only, via "header-single.php"
 */
get_header( 'single' );

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
		 * Fire the 'simplecart_navigation_above' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_above'
		 */
		simplecart_navigation_above();
		
		/**
		 * Include the sidebar-single-top template part file
		 * 
		 * Calls the sidebar-single-top.php template part file.
		 * 
		 * Codex reference: http://codex.wordpress.org/Function_Reference/get_sidebar
		 * 
		 * Child Themes can replace this template part file globally, 
		 * via "sidebar-single-top.php"
		 */
		get_sidebar( 'single-top' );

		/**
		 * Fire the 'simplecart_singlepost' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_singlepost'
		 */
		simplecart_singlepost();
		
		// calling the widget area 'single-insert'
		get_sidebar('single-insert');

		/**
		 * Fire the 'simplecart_navigation_below' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_below'
		 */
		simplecart_navigation_below();

		/**
		 * Fire the 'simplecart_comments_template' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_comments_template'
		 */
		simplecart_comments_template();
		
		/**
		 * Include the sidebar-single-bottom template part file
		 * 
		 * Calls the sidebar-single-bottom.php template part file.
		 * 
		 * Codex reference: http://codex.wordpress.org/Function_Reference/get_sidebar
		 * 
		 * Child Themes can replace this template part file globally, 
		 * via "sidebar-single-bottom.php"
		 */
		get_sidebar( 'single-bottom' );
		
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
 * a specific context only, via "footer-single.php"
 */
get_footer( 'single' );
?>