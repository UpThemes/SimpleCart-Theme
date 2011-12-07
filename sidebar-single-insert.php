<?php
/**
 * Template part file that contains the single-insert sidebar content
 *
 * Template files: single.php
 * 
 * @uses		simplecart_abovesingleinsert()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_single_insert()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowsingleinsert()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovesingleinsert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovesingleinsert'
 */
simplecart_abovesingleinsert();

/**
 * Fire the 'widget_area_single_insert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_single_insert'
 */
widget_area_single_insert();

/**
 * Fire the 'simplecart_belowsingleinsert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowsingleinsert'
 */
simplecart_belowsingleinsert();
?>