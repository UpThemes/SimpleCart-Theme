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

            the_post();

            // displays the page title
            simplecart_page_title();

            rewind_posts();

            // create the navigation above the content
            simplecart_navigation_above();

            // action hook creating the archive loop
            simplecart_archiveloop();

            // create the navigation below the content
            simplecart_navigation_below();

            ?>
			</div>
		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    simplecart_belowcontainer();

    // calling the standard sidebar 
    simplecart_sidebar();
    
    // calling footer.php
    get_footer();

?>