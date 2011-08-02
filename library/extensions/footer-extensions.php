<?php


// Located in footer.php
// Just before the footer div
function simplecart_abovefooter() {
    do_action('simplecart_abovefooter');
} // end simplecart_abovefooter

// Located in footer.php
// Just after the footer div
function simplecart_footer() {
    do_action('simplecart_footer');
} // end simplecart_footer


// Located in footer.php
// Just after the footer div
function simplecart_belowfooter() {
    do_action('simplecart_belowfooter');
} // end simplecart_belowfooter


// Located in footer.php 
// Just before the closing body tag, after everything else.
function simplecart_after() {
    do_action('simplecart_after');
} // end simplecart_after


// Functions that hook into simplecart_footer()

    function simplecart_subsidiaries() {
        widget_area_subsidiaries();
    }
    add_action('simplecart_footer', 'simplecart_subsidiaries', 10);
    
    function simplecart_siteinfoopen() { ?>
    
        <div id="siteinfo">        

    <?php
    }
    add_action('simplecart_footer', 'simplecart_siteinfoopen', 20);
    
    function simplecart_siteinfo() {
			
		global $up_options;
		echo $up_options->footer_text;
    
	}
    
	add_action('simplecart_footer', 'simplecart_siteinfo', 30);
    
    function simplecart_siteinfoclose() { ?>
    
		</div><!-- #siteinfo -->
    
    <?php
    }
    add_action('simplecart_footer', 'simplecart_siteinfoclose', 40);
