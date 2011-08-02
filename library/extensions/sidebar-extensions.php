<?php


// Filter to create the sidebar
function simplecart_sidebar() {

  $show = TRUE;

	// Filters should return Boolean 
	$show = apply_filters('simplecart_sidebar', $show);
	
	if ($show) {
    get_sidebar();}
	
	return;
} // end simplecart_sidebar


// Main Aside Hooks


	// Located in sidebar.php 
	// Just before the main asides (commonly used as sidebars)
	function simplecart_abovemainasides() {
	    do_action('simplecart_abovemainasides');
	} // end simplecart_abovemainasides


	// Located in sidebar.php 
	// regular hook for primary asides
	function widget_area_primary_aside() {
	    do_action('widget_area_primary_aside');
	} // end widget_area_primary_aside
	
	
	// Located in sidebar.php 
	// Between the main asides (commonly used as sidebars)
	function simplecart_betweenmainasides() {
	    do_action('simplecart_betweenmainasides');
	} // end simplecart_betweenmainasides


	// Located in sidebar.php 
	// regular hook for primary asides
	function widget_area_secondary_aside() {
	    do_action('widget_area_secondary_aside');
	} // end widget_area_secondary_aside
	
	
	// Located in sidebar.php 
	// after the main asides (commonly used as sidebars)
	function simplecart_belowmainasides() {
	    do_action('simplecart_belowmainasides');
	} // end simplecart_belowmainasides
	

// Index Aside Hooks

	
	// Located in sidebar-index-top.php
	function simplecart_aboveindextop() {
		do_action('simplecart_aboveindextop');
	} // end simplecart_aboveindextop
	

	// Located in sidebar-index-top.php
	function widget_area_index_top() {
		do_action('widget_area_index_top');
	} // end widget_area_index_top
	
	
	// Located in sidebar-index-top.php
	function simplecart_belowindextop() {
		do_action('simplecart_belowindextop');
	} // end simplecart_belowindextop
	
	
	// Located in sidebar-index-insert.php
	function simplecart_aboveindexinsert() {
		do_action('simplecart_aboveindexinsert');
	} // end simplecart_aboveindexinsert
	
	// ocated in sidebar-index-insert.php
	function widget_area_index_insert() {
		do_action('widget_area_index_insert');
	} // end widget_area_index_insert
	
	
	// Located in sidebar-index-insert.php
	function simplecart_belowindexinsert() {
		do_action('simplecart_belowindexinsert');
	} // end simplecart_belowindexinsert	
	

	// Located in sidebar-index-bottom.php
	function simplecart_aboveindexbottom() {
		do_action('simplecart_aboveindexbottom');
	} // end simplecart_aboveindexbottom
	
	// Located in sidebar-index-bottom.php
	function widget_area_index_bottom() {
		do_action('widget_area_index_bottom');
	} // end widget_area_index_bottom
	
	
	// Located in sidebar-index-bottom.php
	function simplecart_belowindexbottom() {
		do_action('simplecart_belowindexbottom');
	} // end simplecart_belowindexbottom	
	
	
// Single Post Asides


	// Located in sidebar-single-top.php
	function simplecart_abovesingletop() {
		do_action('simplecart_abovesingletop');
	} // end simplecart_abovesingletop


	// Located in sidebar-single-top.php
	function widget_area_single_top() {
		do_action('widget_area_single_top');
	} // end simplecart_abovesingletop
	
	
	// Located in sidebar-single-top.php
	function simplecart_belowsingletop() {
		do_action('simplecart_belowsingletop');
	} // end simplecart_belowsingletop
	
	
	// Located in sidebar-single-insert.php
	function simplecart_abovesingleinsert() {
		do_action('simplecart_abovesingleinsert');
	} // end simplecart_abovesingleinsert
	
	
	// Located in sidebar-single-insert.php
	function widget_area_single_insert() {
		do_action('widget_area_single_insert');
	} // end simplecart_abovesingleinsert
	
	
	// Located in sidebar-single-insert.php
	function simplecart_belowsingleinsert() {
		do_action('simplecart_belowsingleinsert');
	} // end simplecart_belowsingleinsert	
	

	// Located in sidebar-single-bottom.php
	function simplecart_abovesinglebottom() {
		do_action('simplecart_abovesinglebottom');
	} // end simplecart_abovesinglebottom
	

	// Located in sidebar-single-bottom.php
	function widget_area_single_bottom() {
		do_action('widget_area_single_bottom');
	} // end widget_area_single_bottom
	
	
	// Located in sidebar-single-bottom.php
	function simplecart_belowsinglebottom() {
		do_action('simplecart_belowsinglebottom');
	} // end simplecart_belowsinglebottom	
	


// Page Aside Hooks


	// Located in sidebar-page-top.php
	function simplecart_abovepagetop() {
		do_action('simplecart_abovepagetop');
	} // end simplecart_abovepagetop


	// Located in sidebar-page-top.php
	function widget_area_page_top() {
		do_action('widget_area_page_top');
	} // end widget_area_page_top
	
	
	// Located in sidebar-page-top.php
	function simplecart_belowpagetop() {
		do_action('simplecart_belowpagetop');
	} // end simplecart_belowpagetop


	// Located in sidebar-page-bottom.php
	function simplecart_abovepagebottom() {
		do_action('simplecart_abovepagebottom');
	} // end simplecart_abovepagebottom


	// Located in sidebar-page-bottom.php
	function widget_area_page_bottom() {
		do_action('widget_area_page_bottom');
	} // end widget_area_page_bottom

	
	// Located in sidebar-page-bottom.php
	function simplecart_belowpagebottom() {
		do_action('simplecart_belowpagebottom');
	} // end simplecart_belowpagebottom	



// Subsidiary Aside Hooks
	

	// Located in sidebar-subsidiary.php
	function simplecart_abovesubasides() {
		do_action('simplecart_abovesubasides');
	} // end simplecart_abovesubasides
	

	// Located in sidebar-subsidiary.php
	function simplecart_belowsubasides() {
		do_action('simplecart_belowsubasides');
	} // end simplecart_belowsubasides
    
    function simplecart_subsidiaryopen() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget ?>
            
            <div id="subsidiary">
            
        <?php
        }
    }
    add_action('widget_area_subsidiaries', 'simplecart_subsidiaryopen', 10);
	

	// Located in sidebar-subsidiary.php
	function simplecart_before_first_sub() {
		do_action('simplecart_before_first_sub');
	} // end simplecart_before_first_sub
    
    function add_before_first_sub() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget
            simplecart_before_first_sub();
        }
    }
    add_action('widget_area_subsidiaries', 'add_before_first_sub',20);

	// Located in sidebar-subsidiary.php
	function widget_area_subsidiaries() {
		do_action('widget_area_subsidiaries');
	} // end widget_area_1st_subsidiary_aside

	// Located in sidebar-subsidiary.php
	function simplecart_between_firstsecond_sub() {
		do_action('simplecart_between_firstsecond_sub');
	} // end simplecart_between_firstsecond_sub
    
    function add_between_firstsecond_sub() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget
            simplecart_between_firstsecond_sub();
        }
    }
    add_action('widget_area_subsidiaries', 'add_between_firstsecond_sub',40);


	// Located in sidebar-subsidiary.php
	function simplecart_between_secondthird_sub() {
		do_action('simplecart_between_secondthird_sub');
	} // end simplecart_between_secondthird_sub
    
    function add_between_secondthird_sub() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget
            simplecart_between_secondthird_sub();
        }
    }
    add_action('widget_area_subsidiaries', 'add_between_secondthird_sub',60);
	
	
	// Located in sidebar-subsidiary.php
	function simplecart_after_third_sub() {
		do_action('simplecart_after_third_sub');
	} // end simplecart_after_third_sub	

    
    function add_after_third_sub() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget
            simplecart_after_third_sub();
        }
    }
    add_action('widget_area_subsidiaries', 'add_after_third_sub',80);
    
    function simplecart_subsidiaryclose() {
        if ( is_sidebar_active('1st-subsidiary-aside') || is_sidebar_active('2nd-subsidiary-aside') || is_sidebar_active('3rd-subsidiary-aside') ) { // one of the subsidiary asides has a widget ?>
            
            </div><!-- #subsidiary -->
            
        <?php
        }
    }
    add_action('widget_area_subsidiaries', 'simplecart_subsidiaryclose', 200);
