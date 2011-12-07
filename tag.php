<?php
/**
 * Tag archive index template file
 *
 * This file is the tag archive index template file, used to display tag archive index pages per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_page_title()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_above()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_above_tagloop()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_tagloop()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_below_tagloop()		Defined in /library/extensions/content-extensions.php
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
 * a specifric context only, via "header-tag.php"
 */
get_header( 'tag' );

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
		 * Fire the 'simplecart_above_tagloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_above_tagloop'
		 */
		simplecart_above_tagloop();	

		/**
		 * Fire the 'simplecart_tagloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_tagloop'
		 */
		simplecart_tagloop();

		/**
		 * Fire the 'simplecart_below_tagloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_below_tagloop'
		 */
		simplecart_below_tagloop();

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
 * a specific context only, via "footer-tag.php"
 */
get_footer( 'tag' );
?>