<?php
/**
 * Template Name: No Page Title
 * 
 * This file is the no-title custom page template file, used to
 * display a static page without a page title.
 *
 * @link		http://codex.wordpress.org/Function_Reference/edit_post_link		edit_post_link()
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link		http://codex.wordpress.org/Function_Reference/get_post_custom_values	get_post_custom_values()
 * @link 		http://codex.wordpress.org/Function_Reference/the_post	 			the_post()
 * @link 		http://codex.wordpress.org/Function_Reference/the_ID	 			the_ID()
 * @link 		http://codex.wordpress.org/Function_Reference/post_class 			post_class()
 * @link 		http://codex.wordpress.org/Function_Reference/the_title 			the_title()
 * @link 		http://codex.wordpress.org/Function_Reference/the_content 			the_content()
 * @link 		http://codex.wordpress.org/Function_Reference/wp_link_pages			wp_link_pages()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_comments_template()	Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_belowcontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_sidebar()			Defined in /library/extensions/content-extensions.php
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
 * a specifric context only, via "header-page.php"
 */
get_header( 'page' );

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
	
		// calling the widget area 'page-top'
		get_sidebar('page-top');

		the_post();
	
		?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="entry-content">

				<?php
				
				the_content();
				
				wp_link_pages( "\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'simplecart'), "</div>\n", 'number' );
				
				edit_post_link( __( 'Edit', 'simplecart' ),'<span class="edit-link">', '</span>' ) ?>

			</div>
		</div><!-- .post -->

	<?php
	
	if ( get_post_custom_values( 'comments' ) ) {
		/**
		 * Fire the 'simplecart_comments_template' custom action hook
		 * 
		 * To enable comments on static Pages, add a
		 * custom field key/value of "comments"
		 * 
		 * @param	null
		 * @return	mixed	any output hooked into 'simplecart_comments_template'
		 */
		simplecart_comments_template();
	}
		
		/**
		 * Include the sidebar-page-bottom template part file
		 * 
		 * Calls the sidebar-page-bottom.php template part file.
		 * 
		 * Codex reference: http://codex.wordpress.org/Function_Reference/get_sidebar
		 * 
		 * Child Themes can replace this template part file globally, 
		 * via "sidebar-page-bottom.php"
		 */
	get_sidebar( 'page-bottom' );
	
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
 * a specific context only, via "footer-page.php"
 */
get_footer( 'page' );
?>