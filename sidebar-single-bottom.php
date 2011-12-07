<?php
/**
 * Template part file that contains the single-bottom sidebar content
 *
 * Template files: single.php
 * 
 * @uses		simplecart_abovesinglebottom()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_single_bottom()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowsinglebottom()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovesinglebottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovesinglebottom'
 */
simplecart_abovesinglebottom();

/**
 * Fire the 'widget_area_single_bottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_single_bottom'
 */
widget_area_single_bottom();

/**
 * Fire the 'simplecart_belowsinglebottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowsinglebottom'
 */
simplecart_belowsinglebottom();
?>