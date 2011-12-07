<?php 
/**
 * Template part file that contains the default sidebar content
 * 
 * This template part file is called by simplecart_sidebar(), which
 * is defined in /library/extensions/sidebar-extensions.php.
 *
 * Template files: index.php, 404.php, archive.php, attachment.php, 
 * author.php, category.php, page.php, search.php, single.php, tag.php
 * 
 * @uses		simplecart_abovemainasides()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_primary_aside()			Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_betweenmainasides()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		widget_area_secondary_aside()		Defined in /library/extensions/sidebar-extensions.php
 * @uses		simplecart_belowmainasides()		Defined in /library/extensions/sidebar-extensions.php
 * 
 * @package 	SimpleCart
 * @copyright	Copyright (c) 2010, UpThemes
 * @license		license.txt GNU General Public License, v3
 *
 * @since 		SimpleCart 1.0
 */

/**
 * Fire the 'simplecart_abovemainasides' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_abovemainasides'
 */
simplecart_abovemainasides();

/**
 * Fire the 'widget_area_primary_aside' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_primary_aside'
 */
widget_area_primary_aside();

/**
 * Fire the 'simplecart_betweenmainasides' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_betweenmainasides'
 */
simplecart_betweenmainasides();

/**
 * Fire the 'widget_area_secondary_aside' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'widget_area_secondary_aside'
 */
widget_area_secondary_aside();

/**
 * Fire the 'simplecart_belowmainasides' custom action hook
 * 
 * @param	null
 * @return	mixed	any output hooked into 'simplecart_belowmainasides'
 */
simplecart_belowmainasides(); 
?>