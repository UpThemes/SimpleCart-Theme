<?php
/**
 * Search results index template file
 *
 * This file is the search results index template file, used to display search results pages per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link		http://codex.wordpress.org/Function_Reference/_e 					_e()
 * @link		http://codex.wordpress.org/Function_Reference/bloginfo 				bloginfo()
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link		http://codex.wordpress.org/Function_Reference/get_search_query		get_search_query()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * @link 		http://codex.wordpress.org/Function_Reference/rewind_posts 			have_posts()
 * @link 		http://codex.wordpress.org/Function_Reference/the_post	 			the_post()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_page_title()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_navigation_above()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_above_searchloop()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_searchloop()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_below_searchloop()	Defined in /library/extensions/content-extensions.php
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
 * a specifric context only, via "header-search.php"
 */
get_header( 'search' );

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
		
		if (have_posts()) {

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
			 * Fire the 'simplecart_above_searchloop' custom action hook
			 * 
			 * @param	null
			 * @return	mixed	any output hooked into 'simplecart_above_searchloop'
			 */
			simplecart_above_searchloop();	
			
			/**
			 * Fire the 'simplecart_searchloop' custom action hook
			 * 
			 * @param	null
			 * @return	mixed	any output hooked into 'simplecart_searchloop'
			 */
			simplecart_searchloop();
			
			/**
			 * Fire the 'simplecart_below_searchloop' custom action hook
			 * 
			 * @param	null
			 * @return	mixed	any output hooked into 'simplecart_below_searchloop'
			 */
			simplecart_below_searchloop();

			/**
			 * Fire the 'simplecart_navigation_below' custom action hook
			 * 
			 * @param	null
			 * @return	mixed	any output hooked into 'simplecart_navigation_below'
			 */
			simplecart_navigation_below();

		} else { 
			
			?>

		<div id="post-0" class="post noresults">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'simplecart' ) ?></h1>
			<div class="entry-content">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'simplecart' ) ?></p>
			</div>
			<form id="noresults-searchform" method="get" action="<?php bloginfo( 'home' ) ?>">
				<div>
					<input id="noresults-s" name="s" type="text" value="<?php echo get_search_query(); ?>" size="40" />
					<input id="noresults-searchsubmit" name="searchsubmit" type="submit" value="<?php _e( 'Find', 'simplecart' ) ?>" />
				</div>
			</form>
		</div><!-- .post -->

		<?php
		
		}
		
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
 * a specific context only, via "footer-search.php"
 */
get_footer( 'search' );
?>