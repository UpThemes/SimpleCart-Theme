<?php 

    // action hook for placing content above the main asides
    simplecart_abovemainasides();

    // action hook creating the primary aside
    widget_area_primary_aside();	
	
    // action hook for placing content between primary and secondary aside
    simplecart_betweenmainasides();

    // action hook creating the secondary aside
    widget_area_secondary_aside();		
	
    // action hook for placing content below the main asides
    simplecart_belowmainasides(); 
    
?>