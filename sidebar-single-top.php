<?php
/**
 * Template part file that contains the single-top sidebar content
 *
 * Template files: single.php
 * 
 * @uses		simplecart_abovesingletop()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_single_top()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowsingletop()			Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovesingletop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovesingletop'
 */
simplecart_abovesingletop();

/**
 * Fire the 'widget_area_single_top' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_single_top'
 */
widget_area_single_top();

/**
 * Fire the 'simplecart_belowsingletop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowsingletop'
 */
simplecart_belowsingletop();
?>