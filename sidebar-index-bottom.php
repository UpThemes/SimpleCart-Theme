<?php 
/**
 * Template part file that contains the index-bottom sidebar content
 *
 * Template files: index.php
 * 
 * @uses		simplecart_aboveindexbottom()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_index_bottom()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowindexbottom()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_aboveindexbottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_aboveindexbottom'
 */
simplecart_aboveindexbottom();

/**
 * Fire the 'widget_area_index_bottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_index_bottom'
 */
widget_area_index_bottom();

/**
 * Fire the 'simplecart_belowindexbottom' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowindexbottom'
 */
simplecart_belowindexbottom();
?>