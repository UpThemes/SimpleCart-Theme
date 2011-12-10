<?php
/**
 * Static page template file
 *
 * This file is the static page template file, used to display static pages per
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 * 
 * @link 		http://codex.wordpress.org/Function_Reference/edit_post_link		edit_post_link()
 * @link		http://codex.wordpress.org/Function_Reference/get_header 			get_header()
 * @link 		http://codex.wordpress.org/Function_Reference/get_footer 			get_footer()
 * @link 		http://codex.wordpress.org/Function_Reference/get_post_custom_values	get_post_custom_values()
 * @link 		http://codex.wordpress.org/Function_Reference/get_sidebar 			get_sidebar()
 * @link 		http://codex.wordpress.org/Function_Reference/post_class 			post_class()
 * @link 		http://codex.wordpress.org/Function_Reference/the_content 			the_content()
 * @link 		http://codex.wordpress.org/Function_Reference/the_id	 			the_id()
 * @link 		http://codex.wordpress.org/Function_Reference/the_post	 			the_post()
 * @link 		http://codex.wordpress.org/Function_Reference/wp_link_pages			wp_link_pages()
 * 
 * @uses		simplecart_abovecontainer()		Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_page_title()			Defined in /library/extensions/content-extensions.php
 * @uses		simplecart_postheader()			Defined in /library/extensions/content-extensions.php
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
		
		<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
			<?php
			/**
			 * Fire the 'simplecart_postheader' custom action hook
			 * 
			 * @param	null
			 * @return	mixed	any output hooked into 'simplecart_postheader'
			 */
			simplecart_postheader();
			
			?>
			
			<div class="entry-content">

				<?php
				
				the_content();
				
				wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'simplecart'), "</div>\n", 'number');
				
				edit_post_link(__('Edit', 'simplecart'),'<span class="edit-link">','</span>') ?>

			</div>
		</div><!-- .post -->

	<?php
	
	if ( get_post_custom_values('comments') ) 
		simplecart_comments_template(); // Add a key/value of "comments" to enable comments on pages!
	
	// calling the widget area 'page-bottom'
	get_sidebar('page-bottom');
	
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