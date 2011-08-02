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
        
            // calling the widget area 'page-top'
            get_sidebar('page-top');

            the_post();

            ?>
            
			<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
                <?php 
                
                // creating the post header
                simplecart_postheader();
                
                ?>
                
				<div class="entry-content">

                    <?php
                    
                    the_content();
                    
                    wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'simplecart'), "</div>\n", 'number');
                    
                    edit_post_link(__('Edit', 'simplecart'),'<span class="edit-link">','</span>') ?>

				</div>
			</div><!-- .post -->

        <?php
        
        if ( get_post_custom_values('comments') ) 
            simplecart_comments_template(); // Add a key/value of "comments" to enable comments on pages!
        
        // calling the widget area 'page-bottom'
        get_sidebar('page-bottom');
        
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