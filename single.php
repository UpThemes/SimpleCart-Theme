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
            
            // create the navigation above the content
			simplecart_navigation_above();

            // calling the widget area 'single-top'
            get_sidebar('single-top');

            // action hook creating the single post
            simplecart_singlepost();
			
            // calling the widget area 'single-insert'
            get_sidebar('single-insert');

            // create the navigation below the content
			simplecart_navigation_below();

            // calling the comments template
            simplecart_comments_template();

            // calling the widget area 'single-bottom'
            get_sidebar('single-bottom');
            
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