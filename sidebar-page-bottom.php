<?php
/**
 * Template part file that contains the page-bottom sidebar content
 *
 * Template files: page.php
 * 
 * @uses		simplecart_abovepagebottom()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_page_bottom()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowpagebottom()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovepagebottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovepagebottom'
 */
simplecart_abovepagebottom();

/**
 * Fire the 'widget_area_page_bottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_page_bottom'
 */
widget_area_page_bottom();

/**
 * Fire the 'simplecart_belowpagebottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowpagebottom'
 */
simplecart_belowpagebottom();
?>