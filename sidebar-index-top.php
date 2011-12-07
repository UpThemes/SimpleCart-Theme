<?php
/**
 * Template part file that contains the index-top sidebar content
 *
 * Template files: index.php
 * 
 * @uses		simplecart_aboveindextop()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_index_top()				Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowindextop()			Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_aboveindextop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_aboveindextop'
 */
simplecart_aboveindextop();

/**
 * Fire the 'widget_area_index_top' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_index_top'
 */
widget_area_index_top();

/**
 * Fire the 'simplecart_belowindextop' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowindextop'
 */
simplecart_belowindextop();
?>