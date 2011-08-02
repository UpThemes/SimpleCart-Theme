<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    simplecart_abovecontainer();

?>

	<div id="container">
		<div id="content">
			<div class="inner">
			<?php 
            
            // create the navigation above the content
            simplecart_navigation_above();
			
            // calling the widget area 'index-top'
            get_sidebar('index-top');

            // action hook for placing content above the index loop
            simplecart_above_indexloop();

            // action hook creating the index loop
            simplecart_indexloop();

            // action hook for placing content below the index loop
            simplecart_below_indexloop();

            // calling the widget area 'index-bottom'
            get_sidebar('index-bottom');

            // create the navigation below the content
            simplecart_navigation_below();
            
            ?>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    simplecart_belowcontainer();

    // calling the standard sidebar 
    simplecart_sidebar();
    
    // calling footer.php
    get_footer();

?>