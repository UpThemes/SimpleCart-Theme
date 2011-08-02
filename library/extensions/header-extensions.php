<?php

// Creates the DOCTYPE section
function simplecart_create_doctype() {
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n";
    $content .= '<html xmlns="http://www.w3.org/1999/xhtml"';
    echo apply_filters('simplecart_create_doctype', $content);
} // end simplecart_create_doctype


// Creates the HEAD Profile
function simplecart_head_profile() {
    $content = '<head profile="http://gmpg.org/xfn/11">' . "\n";
    echo apply_filters('simplecart_head_profile', $content);
} // end simplecart_head_profile


// Get the page number adapted from http://efficienttips.com/wordpress-seo-title-description-tag/
function pageGetPageNo() {
    if (get_query_var('paged')) {
        print ' | Page ' . get_query_var('paged');
    }
} // end pageGetPageNo


// Located in header.php 
// Creates the content of the Title tag
// Credits: Tarski Theme
function simplecart_doctitle() {
	$site_name = get_bloginfo('name');
    $separator = '|';
        	
    if ( is_single() ) {
      $content = single_post_title('', FALSE);
    }
    elseif ( is_home() || is_front_page() ) { 
      $content = get_bloginfo('description');
    }
    elseif ( is_page() ) { 
      $content = single_post_title('', FALSE); 
    }
    elseif ( is_search() ) { 
      $content = __('Search Results for:', 'simplecart'); 
      $content .= ' ' . wp_specialchars(stripslashes(get_search_query()), true);
    }
    elseif ( is_category() ) {
      $content = __('Category Archives:', 'simplecart');
      $content .= ' ' . single_cat_title("", false);;
    }
    elseif ( is_tag() ) { 
      $content = __('Tag Archives:', 'simplecart');
      $content .= ' ' . simplecart_tag_query();
    }
    elseif ( is_404() ) { 
      $content = __('Not Found', 'simplecart'); 
    }
    else { 
      $content = get_bloginfo('description');
    }

    if (get_query_var('paged')) {
      $content .= ' ' .$separator. ' ';
      $content .= 'Page';
      $content .= ' ';
      $content .= get_query_var('paged');
    }

    if($content) {
      if ( is_home() || is_front_page() ) {
          $elements = array(
            'site_name' => $site_name,
            'separator' => $separator,
            'content' => $content
          );
      }
      else {
          $elements = array(
            'content' => $content
          );
      }  
    } else {
      $elements = array(
        'site_name' => $site_name
      );
    }

    // Filters should return an array
    $elements = apply_filters('simplecart_doctitle', $elements);
	
    // But if they don't, it won't try to implode
    if(is_array($elements)) {
      $doctitle = implode(' ', $elements);
    }
    else {
      $doctitle = $elements;
    }
    
    $doctitle = "\t" . "<title>" . $doctitle . "</title>" . "\n\n";
    
    echo $doctitle;
} // end simplecart_doctitle


// Creates the content-type section
function simplecart_create_contenttype() {
    $content  = "\t";
    $content .= "<meta http-equiv=\"Content-Type\" content=\"";
    $content .= get_bloginfo('html_type'); 
    $content .= "; charset=";
    $content .= get_bloginfo('charset');
    $content .= "\" />";
    $content .= "\n\n";
    echo apply_filters('simplecart_create_contenttype', $content);
} // end simplecart_create_contenttype

// The master switch for SEO functions
function simplecart_seo() {
		$content = TRUE;
		return apply_filters('simplecart_seo', $content);
}

// Creates the canonical URL
function simplecart_canonical_url() {
		if (simplecart_seo()) {
    		if ( is_singular() ) {
        		$canonical_url = "\t";
        		$canonical_url .= '<link rel="canonical" href="' . get_permalink() . '" />';
        		$canonical_url .= "\n\n";        
        		echo apply_filters('simplecart_canonical_url', $canonical_url);
				}
    }
} // end simplecart_canonical_url


// switch use of simplecart_the_excerpt() - default: ON
function simplecart_use_excerpt() {
    $display = TRUE;
    $display = apply_filters('simplecart_use_excerpt', $display);
    return $display;
} // end simplecart_use_excerpt


// switch use of simplecart_the_excerpt() - default: OFF
function simplecart_use_autoexcerpt() {
    $display = FALSE;
    $display = apply_filters('simplecart_use_autoexcerpt', $display);
    return $display;
} // end simplecart_use_autoexcerpt


// Creates the meta-tag description
function simplecart_create_description() {
		if (simplecart_seo()) {
    		if (is_single() || is_page() ) {
      		  if ( have_posts() ) {
          		  while ( have_posts() ) {
            		    the_post();
										if (simplecart_the_excerpt() == "") {
                    		if (simplecart_use_autoexcerpt()) {
                        		$content ="\t";
														$content .= "<meta name=\"description\" content=\"";
                        		$content .= simplecart_excerpt_rss();
                        		$content .= "\" />";
                        		$content .= "\n\n";
                    		}
                		} else {
                    		if (simplecart_use_excerpt()) {
                        		$content ="\t";
                        		$content .= "<meta name=\"description\" content=\"";
                        		$content .= simplecart_the_excerpt();
                        		$content .= "\" />";
                        		$content .= "\n\n";
                    		}
                		}
            		}
        		}
    		} elseif ( is_home() || is_front_page() ) {
        		$content ="\t";
        		$content .= "<meta name=\"description\" content=\"";
        		$content .= get_bloginfo('description');
        		$content .= "\" />";
        		$content .= "\n\n";
    		}
    		echo apply_filters ('simplecart_create_description', $content);
		}
} // end simplecart_create_description


// meta-tag description is switchable using a filter
function simplecart_show_description() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_description', $display);
    if ($display) {
        simplecart_create_description();
    }
} // end simplecart_show_description


// create meta-tag robots
function simplecart_create_robots() {
        global $paged;
		if (simplecart_seo()) {
    		$content = "\t";
    		if((is_home() && ($paged < 2 )) || is_front_page() || is_single() || is_page() || is_attachment()) {
						$content .= "<meta name=\"robots\" content=\"index,follow\" />";
    		} elseif (is_search()) {
        		$content .= "<meta name=\"robots\" content=\"noindex,nofollow\" />";
    		} else {	
        		$content .= "<meta name=\"robots\" content=\"noindex,follow\" />";
    		}
    		$content .= "\n\n";
    		if (get_option('blog_public')) {
    				echo apply_filters('simplecart_create_robots', $content);
    		}
		}
} // end simplecart_create_robots


// meta-tag robots is switchable using a filter
function simplecart_show_robots() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_robots', $display);
    if ($display) {
        simplecart_create_robots();
    }
} // end simplecart_show_robots


// Located in header.php
// creates link to style.css
function simplecart_create_stylesheet() {
    $content = "\t";
    $content .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
    $content .= get_bloginfo('stylesheet_url');
    $content .= "\" />";
    $content .= "\n\n";
    echo apply_filters('simplecart_create_stylesheet', $content);
}


// rss usage is switchable using a filter
function simplecart_show_rss() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_rss', $display);
    if ($display) {
        $content = "\t";
        $content .= "<link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        $content .= get_bloginfo('rss2_url');
        $content .= "\" title=\"";
        $content .= wp_specialchars(get_bloginfo('name'), 1);
        $content .= " " . __('Posts RSS feed', 'simplecart');
        $content .= "\" />";
        $content .= "\n";
        echo apply_filters('simplecart_rss', $content);
    }
} // end simplecart_show_rss


// comments rss usage is switchable using a filter
function simplecart_show_commentsrss() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_commentsrss', $display);
    if ($display) {
        $content = "\t";
        $content .= "<link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        $content .= get_bloginfo('comments_rss2_url');
        $content .= "\" title=\"";
        $content .= wp_specialchars(get_bloginfo('name'), 1);
        $content .= " " . __('Comments RSS feed', 'simplecart');
        $content .= "\" />";
        $content .= "\n\n";
        echo apply_filters('simplecart_commentsrss', $content);
    }
} // end simplecart_show_commentsrss


// pingback usage is switchable using a filter
function simplecart_show_pingback() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_pingback', $display);
    if ($display) {
        $content = "\t";
        $content .= "<link rel=\"pingback\" href=\"";
        $content .= get_bloginfo('pingback_url');
        $content .= "\" />";
        $content .= "\n\n";
        echo apply_filters('simplecart_pingback_url',$content);
    }
} // end simplecart_show_pingback


// comment reply usage is switchable using a filter
function simplecart_show_commentreply() {
    $display = TRUE;
    $display = apply_filters('simplecart_show_commentreply', $display);
    if ($display)
        if ( is_singular() ) 
            wp_enqueue_script( 'comment-reply' ); // support for comment threading
} // end simplecart_show_commentreply


// Load scripts for the jquery Superfish plugin http://users.tpg.com.au/j_birch/plugins/superfish/#examples
function simplecart_head_scripts() {
    $scriptdir_start = "\t";
		$scriptdir_start .= '<script type="text/javascript" src="';
    $scriptdir_start .= get_bloginfo('template_directory');
    $scriptdir_start .= '/library/scripts/';
    
    $scriptdir_end = '"></script>';
    
    $scripts = "\n";
    $scripts .= $scriptdir_start . 'hoverIntent.js' . $scriptdir_end . "\n";
    $scripts .= $scriptdir_start . 'superfish.js' . $scriptdir_end . "\n";
    $scripts .= $scriptdir_start . 'supersubs.js' . $scriptdir_end . "\n";
    $dropdown_options = $scriptdir_start . 'simplecart-dropdowns.js' . $scriptdir_end . "\n";
    
    $scripts = $scripts . apply_filters('simplecart_dropdown_options', $dropdown_options);

		$scripts .= "\n";
		$scripts .= "\t";
		$scripts .= '<script type="text/javascript">' . "\n";
		$scripts .= "\t\t";
		$scripts .= 'jQuery.noConflict();' . "\n";
		$scripts .= "\t";
		$scripts .= '</script>' . "\n";

    // Print filtered scripts
    print apply_filters('simplecart_head_scripts', $scripts);

}
add_action('wp_head','simplecart_head_scripts');


// Add ID and CLASS attributes to the first <ul> occurence in wp_page_menu
function simplecart_add_menuclass($ulclass) {
	return preg_replace('/<ul>/', '<ul class="sf-menu">', $ulclass, 1);
} // end simplecart_add_menuclass
add_filter('wp_page_menu','simplecart_add_menuclass');


// Just after the opening body tag, before anything else.
function simplecart_before() {
    do_action('simplecart_before');
} // end simplecart_before


// Just before the header div
function simplecart_aboveheader() {
    do_action('simplecart_aboveheader');
} // end simplecart_aboveheader


// Used to hook in the HTML and PHP that creates the content of div id="header">
function simplecart_header() {
    do_action('simplecart_header');
} // end simplecart_header


// Functions that hook into simplecart_header()

		// Open #branding
		// In the header div
		function simplecart_brandingopen() { ?>
		    	<div id="branding">
		<?php }
		add_action('simplecart_header','simplecart_brandingopen',1);
		
		
		// Create the blog title
		// In the header div
		function simplecart_blogtitle() { ?>
		    		<div id="blog-title"><span><a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span></div>
		<?php }
		add_action('simplecart_header','simplecart_blogtitle',3);
		
		
		// Create the blog description
		// In the header div
		function simplecart_blogdescription() {
		    		if (is_home() || is_front_page()) { ?>
		    		<h1 id="blog-description"><?php bloginfo('description') ?></h1>
		    		<?php } else { ?>	
		    		<div id="blog-description"><?php bloginfo('description') ?></div>
		    		<?php }
		}
		add_action('simplecart_header','simplecart_blogdescription',5);
		
		
		// Close #branding
		// In the header div
		function simplecart_brandingclose() { ?>
		    	</div><!--  #branding -->
		<?php }
		add_action('simplecart_header','simplecart_brandingclose',7);
		
		
		// Create #access
		// In the header div
		function simplecart_access() { ?>
		    	<div id="access">
		    		<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'simplecart'); ?>"><?php _e('Skip to content', 'simplecart'); ?></a></div>
		            <?php wp_page_menu('sort_column=menu_order') ?>
		        </div><!-- #access -->
		<?php }
		add_action('simplecart_header','simplecart_access',9);
		

// End of functions that hook into simplecart_header()

		
// Just after the header div
function simplecart_belowheader() {
    do_action('simplecart_belowheader');
} // end simplecart_belowheader
		

?>