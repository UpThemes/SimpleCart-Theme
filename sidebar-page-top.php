<?php
/**
 * Template part file that contains the page-top sidebar content
 *
 * Template files: page.php
 * 
 * @uses		simplecart_abovepagetop()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_page_top()				Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowpagetop()			Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovepagetop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovepagetop'
 */
simplecart_abovepagetop();

/**
 * Fire the 'widget_area_page_top' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_page_top'
 */
widget_area_page_top();

/**
 * Fire the 'simplecart_belowpagetop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowpagetop'
 */
simplecart_belowpagetop();
?>