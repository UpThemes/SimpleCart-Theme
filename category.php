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

            // displays the page title
            simplecart_page_title();

            // create the navigation above the content
            simplecart_navigation_above();
			
            // action hook for placing content above the category loop
            simplecart_above_categoryloop();			

            // action hook creating the category loop
            simplecart_categoryloop();

            // action hook for placing content below the category loop
            simplecart_below_categoryloop();			

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