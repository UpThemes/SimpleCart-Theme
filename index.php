<?php
/**
 * Master/Default template file
 *
 * This file is the master/default template file, used when no other file matches in
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_above()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_above_indexloop()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_indexloop()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_below_indexloop()	Defined in /library/extensions/content-extensions.php
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
 * Include the header template part file
 * 
 * MUST come first. 
 * Calls the header PHP file. 
 * Used in all primary template pages
 * 
 * @see {@link: http://codex.wordpress.org/Function_Reference/get_header get_header}
 * 
 * Child Themes can replace this template part file globally, via "header.php", or in
 * a specifric context only, via "header-{context}.php"
 */
get_header( upfw_get_template_context() );

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
		 * Fire the 'simplecart_navigation_above' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_above'
		 */
		simplecart_navigation_above();
		
		/**
		 * Include the sidebar-index-top template part file
		 * 
		 * Calls the sidebar-index-top.php template part file.
		 * 
		 * Codex reference: http://codex.wordpress.org/Function_Reference/get_sidebar
		 * 
		 * Child Themes can replace this template part file globally, 
		 * via "sidebar-index-top.php"
		 */
		get_sidebar( 'index-top' );

		/**
		 * Fire the 'simplecart_above_indexloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_above_indexloop'
		 */
		simplecart_above_indexloop();

		/**
		 * Fire the 'simplecart_indexloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_indexloop'
		 */
		simplecart_indexloop();

		/**
		 * Fire the 'simplecart_below_indexloop' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_below_indexloop'
		 */
		simplecart_below_indexloop();
		
		/**
		 * Include the sidebar-index-bottom template part file
		 * 
		 * Calls the sidebar-index-bottom.php template part file.
		 * 
		 * Codex reference: http://codex.wordpress.org/Function_Reference/get_sidebar
		 * 
		 * Child Themes can replace this template part file globally, 
		 * via "sidebar-index-bottom.php"
		 */
		get_sidebar( 'index-bottom' );

		/**
		 * Fire the 'simplecart_navigation_below' custom action hook
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_navigation_below'
		 */
		simplecart_navigation_below();
		
		?>
		</div><!-- .inner -->
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
 * a specific context only, via "footer-{context}.php"
 */
get_footer( upfw_get_template_context() ); 
?>