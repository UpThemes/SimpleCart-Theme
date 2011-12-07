<?php
/**
 * Category archive index template file
 *
 * This file is the category archive index template file, used to display category archive index pages per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * @link 		http://codex.wordpress.org/Function_Reference/rewind_posts 			rewind_posts()
 * @link 		http://codex.wordpress.org/Function_Reference/the_post	 			the_post()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_page_title()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_above()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_above_categoryloop()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_categoryloop()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_below_categoryloop()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_below()	Defined in /library/extensions/content-extensions.php
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
 * a specifric context only, via "header-category.php"
 */
get_header( 'category' );

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

		/**
		 * Fire the 'simplecart_above_categoryloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_above_categoryloop'
		 */
		simplecart_above_categoryloop();

		/**
		 * Fire the 'simplecart_categoryloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_categoryloop'
		 */
		simplecart_categoryloop();

		/**
		 * Fire the 'simplecart_below_categoryloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_below_categoryloop'
		 */
		simplecart_below_categoryloop();

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
 * a specific context only, via "footer-category.php"
 */
get_footer( 'category' );
?>