<?php
    // calling the theme options
    global $up_options;

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
            
            // create the navigation above the content
            simplecart_navigation_above();

            /* if display author bio is selected */ 
            if($up_options->authorinfo == 'true' & !is_paged()) { ?>
            
                <div id="author-info" class="vcard">
                    <h2 class="entry-title"><?php echo $authordata->first_name; ?> <?php echo $authordata->last_name; ?></h2> 
    			
                    <?php 
                
                    // display the author's avatar
                    simplecart_author_info_avatar();
                
                    ?>
                
                    <div class="author-bio note">
                        <?php
                    
                        if ( !(''== $authordata->user_description) ) : echo apply_filters('archive_meta', $authordata->user_description); endif; ?>
                    
                    </div>  			
    			<div id="author-email">
                    <a class="email" title="<?php echo antispambot($authordata->user_email); ?>" href="mailto:<?php echo antispambot($authordata->user_email); ?>"><?php _e('Email ', 'simplecart') ?><span class="fn n"><span class="given-name"><?php echo $authordata->first_name; ?></span> <span class="family-name"><?php echo $authordata->last_name; ?></span></span></a>
                    <a class="url"  style="display:none;" href="<?php bloginfo('home') ?>/"><?php bloginfo('name') ?></a>   
                </div>
			</div><!-- #author-info -->
            <?php 
            }
			
            // action hook creating the author loop
            simplecart_authorloop();

            // create the navigation below the content
			simplecart_navigation_below(); ?>
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