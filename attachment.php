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
            
            ?>
            
			<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
            
    			<?php
                
                // creating the post header
                simplecart_postheader();
                
                ?>
                
				<div class="entry-content">
					<div class="entry-attachment"><?php the_attachment_link($post->post_ID, true) ?></div>
                    
                        <?php 
                        
                        the_content(more_text());

                        wp_link_pages('before=<div class="page-link">' .__('Pages:', 'simplecart') . '&after=</div>');
                        
                        ?>
                        
				</div>
                
				<?php
                
                // creating the post footer
                simplecart_postfooter();
                
                ?>
                
			</div><!-- .post -->

            <?php
            
            comments_template();
            
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