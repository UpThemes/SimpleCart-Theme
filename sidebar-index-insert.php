<?php 
/**
 * Template part file that contains the index-insert sidebar content
 *
 * Template files: index.php
 * 
 * @uses		simplecart_aboveindexinsert()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_index_insert()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowindexinsert()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_aboveindexinsert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_aboveindexinsert'
 */
simplecart_aboveindexinsert();

/**
 * Fire the 'widget_area_index_insert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_index_insert'
 */
widget_area_index_insert();

/**
 * Fire the 'simplecart_belowindexinsert' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowindexinsert'
 */
simplecart_belowindexinsert();
?>