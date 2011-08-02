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
            
            if (have_posts()) {

                // displays the page title
                simplecart_page_title();

                // create the navigation above the content
                simplecart_navigation_above();
			
                // action hook for placing content above the search loop
                simplecart_above_searchloop();			

                // action hook creating the search loop
                simplecart_searchloop();

                // action hook for placing content below the search loop
                simplecart_below_searchloop();			

                // create the navigation below the content
                simplecart_navigation_below();

            } else { 
                
                ?>

			<div id="post-0" class="post noresults">
				<h1 class="entry-title"><?php _e('Nothing Found', 'simplecart') ?></h1>
				<div class="entry-content">
					<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'simplecart') ?></p>
				</div>
				<form id="noresults-searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="noresults-s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
						<input id="noresults-searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'simplecart') ?>" />
					</div>
				</form>
			</div><!-- .post -->

            <?php
            
            }
            
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