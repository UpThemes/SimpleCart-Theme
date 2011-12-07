<?php
/**
 * Template part file that contains the subsidiary sidebar content
 *
 * This template file is not used by the Theme
 * 
 * @uses		simplecart_abovesubasides()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_subsidiaries()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowsubasides()			Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 * 
 * @todo		Remove if unused
 */

/**
 * Fire the 'simplecart_abovesubasides' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovesubasides'
 */
simplecart_abovesubasides();

/**
 * Fire the 'widget_area_subsidiaries' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_subsidiaries'
 */
widget_area_subsidiaries();

/**
 * Fire the 'simplecart_belowsubasides' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowsubasides'
 */
simplecart_belowsubasides();
?>