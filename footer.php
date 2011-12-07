<?php
/**
 * Footer Template Part File
 * 
 * Template part file that contains the site footer and
 * closing HTML body elements
 *
 * This file is called by all primary template pages
 * 
 * Child Themes can override this template part file globally,
 * via "footer.php", or in a given specific context, via
 * "footer-{context}.php". For example, to replace this
 * template part file on static Pages, a Child Theme would
 * include the file "footer-page.php".
 * 
 * @uses		simplecart_abovefooter()	Defined in /library/extensions/footer-extensions.php
 * @uses		simplecart_after()			Defined in /library/extensions/footer-extensions.php
 * @uses		simplecart_footer()			Defined in /library/extensions/footer-extensions.php
 * @uses		simplecart_after()			Defined in /library/extensions/footer-extensions.php
 * 
 * @link 		http://codex.wordpress.org/Function_Reference/wp_footer		wp_footer()
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		SimpleCart 1.0
 */
?>
		<div class="clear"></div>
    </div><!-- #main -->
    
    <?php
	/**
	* Fire the 'simplecart_abovefooter' custom action hook
	* 
	* @param	null
	* @return	mixed	any output hooked into 'simplecart_abovefooter'
	*/
    simplecart_abovefooter();
    
    ?>    

	<div id="footer">
    
        <?php
		/**
		* Fire the 'simplecart_footer' custom action hook
		* 
		* @param	null
		* @return	mixed	any output hooked into 'simplecart_footer'
		*/
        simplecart_footer();
        
        ?>
        
	</div><!-- #footer -->
	
    <?php
	/**
	* Fire the 'simplecart_belowfooter' custom action hook
	* 
	* @param	null
	* @return	mixed	any output hooked into 'simplecart_belowfooter'
	*/
    simplecart_belowfooter();
    
    ?>  

</div><!-- #wrapper .hfeed -->

<?php 
/**
 * Fire the 'wp_footer' action hook
 * 
 * Codex reference: {@link http://codex.wordpress.org/Hook_Reference/wp_footer wp_footer}
 * 
 * This hook is used by WordPress core, Themes, and Plugins to 
 * add scripts, CSS styles, meta tags, etc. to the document footer.
 * 
 * MUST come immediately before the closing </body> tag
 * 
 * @param	null
 * @return	mixed	any output hooked into 'wp_footer'
 */
wp_footer();

/**
 * Fire the 'simplecart_after' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_after'
 */
simplecart_after();
?>

</body>
</html>