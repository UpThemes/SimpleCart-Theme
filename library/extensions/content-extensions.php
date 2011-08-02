<?php

// Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php, 
// links.php, page.php, search.php, single.php, tag.php
// Just between #main and #container
function simplecart_abovecontainer() {
    do_action('simplecart_abovecontainer');
} // end simplecart_abovecontainer

// Located in archives.php
// Just after the content
function simplecart_archives() {
		do_action('simplecart_archives');
} // end simplecart_archives


// Located in archive.php, author.php, category.php, index.php, search.php, single.php, tag.php
// Just before the content
function simplecart_navigation_above() {
		do_action('simplecart_navigation_above');
} // end simplecart_navigation_above

// Located in archive.php, author.php, category.php, index.php, search.php, single.php, tag.php
// Just after the content
function simplecart_navigation_below() {
		do_action('simplecart_navigation_below');
} // end simplecart_navigation_below

// Located in index.php 
// Just before the loop
function simplecart_above_indexloop() {
    do_action('simplecart_above_indexloop');
} // end simplecart_above_indexloop

// Located in archive.php
// The Loop
function simplecart_archiveloop() {
		do_action('simplecart_archiveloop');
} // end simplecart_archiveloop

// Located in author.php
// The Loop
function simplecart_authorloop() {
		do_action('simplecart_authorloop');
} // end simplecart_authorloop

// Located in category.php
// The Loop
function simplecart_categoryloop() {
		do_action('simplecart_categoryloop');
} // end simplecart_categoryloop

// Located in index.php
// The Loop
function simplecart_indexloop() {
		do_action('simplecart_indexloop');
} // end simplecart_indexloop

// Located in search.php
// The Loop
function simplecart_searchloop() {
		do_action('simplecart_searchloop');
} // end simplecart_searchloop

// Located in single.php
// The Post
function simplecart_singlepost() {
		do_action('simplecart_singlepost');
} //end simplecart_singlepost

// Located in tag.php
// The Loop
function simplecart_tagloop() {
		do_action('simplecart_tagloop');
} // end simplecart_tagloop

// Located in index.php 
// Just after the loop
function simplecart_below_indexloop() {
    do_action('simplecart_below_indexloop');
} // end simplecart_below_indexloop


// Located in category.php 
// Just before the loop
function simplecart_above_categoryloop() {
    do_action('simplecart_above_categoryloop');
} // end simplecart_above_categoryloop


// Located in category.php 
// Just after the loop
function simplecart_below_categoryloop() {
    do_action('simplecart_below_categoryloop');
} // end simplecart_below_categoryloop


// Located in search.php 
// Just before the loop
function simplecart_above_searchloop() {
    do_action('simplecart_above_searchloop');
} // end simplecart_above_searchloop


// Located in search.php 
// Just after the loop
function simplecart_below_searchloop() {
    do_action('simplecart_below_searchloop');
} // end simplecart_below_searchloop


// Located in tag.php 
// Just before the loop
function simplecart_above_tagloop() {
    do_action('simplecart_above_tagloop');
} // end simplecart_above_tagloop


// Located in tag.php 
// Just after the loop
function simplecart_below_tagloop() {
    do_action('simplecart_below_tagloop');
} // end simplecart_below_tagloop

// Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php, 
// links.php, page.php, search.php, single.php, tag.php
// Just below #container
function simplecart_belowcontainer() {
    do_action('simplecart_belowcontainer');
} // end simplecart_belowcontainer


// Filter the page title
// located in archive.php, attachement.php, author.php, category.php, search.php, tag.php
function simplecart_page_title() {
		global $post;
		$content = '';
		if (is_attachment()) {
				$content .= '<h2 class="page-title"><a href="';
				$content .= get_permalink($post->post_parent);
				$content .= '" rev="attachment"><span class="meta-nav">&laquo; </span>';
				$content .= get_the_title($post->post_parent);
				$content .= '</a></h2>';
		} elseif (is_author()) {
				$content .= '<h1 class="page-title author">';
				$author = get_the_author();
				$content .= __('Author Archives: ', 'simplecart');
				$content .= '<span>';
				$content .= $author;
				$content .= '</span></h1>';
		} elseif (is_category()) {
				$content .= '<h1 class="page-title">';
				$content .= ' <span>';
				$content .= single_cat_title('', FALSE);
				$content .= '</span></h1>' . "\n";
				$content .= '<div class="archive-meta">';
				if ( !(''== category_description()) ) : $content .= apply_filters('archive_meta', category_description()); endif;
				$content .= '</div>';
		} elseif (is_search()) {
				$content .= '<h1 class="page-title">';
				$content .= __('Search Results for:', 'simplecart');
				$content .= ' <span id="search-terms">';
				$content .= wp_specialchars(stripslashes($_GET['s']), true);
				$content .= '</span></h1>';
		} elseif (is_tag()) {
				$content .= '<h1 class="page-title">';
				$content .= __('Tag Archives:', 'simplecart');
				$content .= ' <span>';
				$content .= __(simplecart_tag_query());
				$content .= '</span></h1>';
		}	elseif (is_day()) {
				$content .= '<h1 class="page-title">';
				$content .= sprintf(__('Daily Archives: <span>%s</span>', 'simplecart'), get_the_time(get_option('date_format')));
				$content .= '</h1>';
		} elseif (is_month()) {
				$content .= '<h1 class="page-title">';
				$content .= sprintf(__('Monthly Archives: <span>%s</span>', 'simplecart'), get_the_time('F Y'));
				$content .= '</h1>';
		} elseif (is_year()) {
				$content .= '<h1 class="page-title">';
				$content .= sprintf(__('Yearly Archives: <span>%s</span>', 'simplecart'), get_the_time('Y'));
				$content .= '</h1>';
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
				$content .= '<h1 class="page-title">';
				$content .= __('Blog Archives', 'simplecart');
				$content .= '</h1>';
		}
		$content .= "\n";
		echo apply_filters('simplecart_page_title', $content);
}

// Action to create the above navigation
function simplecart_nav_above() {
		if (is_single()) { ?>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php simplecart_previous_post_link() ?></div>
				<div class="nav-next"><?php simplecart_next_post_link() ?></div>
			</div>

<?php
		} else { ?>

			<div id="nav-above" class="navigation">
                <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
                <?php } else { ?>  
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'simplecart')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'simplecart')) ?></div>
				<?php } ?>
			</div>	
	
<?php
		}
}
add_action('simplecart_navigation_above', 'simplecart_nav_above', 2);

// The Archive Loop
function simplecart_archive_loop() {
		while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content">
<?php simplecart_content(); ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

		<?php endwhile;
}
add_action('simplecart_archiveloop', 'simplecart_archive_loop');

// The Author Loop
function simplecart_author_loop() {
		rewind_posts();
		while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content ">
<?php simplecart_content(); ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

		<?php endwhile;
}
add_action('simplecart_authorloop', 'simplecart_author_loop');

// The Category Loop
function simplecart_category_loop() {
		while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content">
					<?php simplecart_content(); ?>
				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

		<?php endwhile;
}
add_action('simplecart_categoryloop', 'simplecart_category_loop');

// The Index Loop
function simplecart_index_loop() {
	global $up_options;

		while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content">
				
					<?php simplecart_content(); ?>
					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'simplecart') . '&after=</div>') ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

				<?php comments_template();

		endwhile;
}
add_action('simplecart_indexloop', 'simplecart_index_loop');

// The Single Post
function simplecart_single_post() { ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			<div class="postcat"><?php the_category();?></div>
                        <?php simplecart_postheader(); ?>
				<div class="entry-content">
					<?php simplecart_content(); ?>
					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'simplecart') . '&after=</div>') ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->
<?php
}
add_action('simplecart_singlepost', 'simplecart_single_post');

// The Search Loop
function simplecart_search_loop() {
		while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content">
<?php simplecart_content(); ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

		<?php endwhile;
}
add_action('simplecart_searchloop', 'simplecart_search_loop');

// The Tag Loop
function simplecart_tag_loop() {
		while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			<?php simplecart_postheader(); ?>
				<div class="entry-content">
<?php simplecart_content() ?>

				</div>
				<?php simplecart_postfooter(); ?>
			</div><!-- .post -->

		<?php endwhile;
}
add_action('simplecart_tagloop', 'simplecart_tag_loop');

// Filter to create the time url title displayed in Post Header
function simplecart_time_title() {

  $time_title = 'Y-m-d\TH:i:sO';

	// Filters should return correct 
	$time_title = apply_filters('simplecart_time_title', $time_title);
	
	return $time_title;
} // end simplecart_time_title


// Filter to create the time displayed in Post Header
function simplecart_time_display() {

  $time_display = get_option('date_format');

	// Filters should return correct 
	$time_display = apply_filters('simplecart_time_display', $time_display);
	
	return $time_display;
} // end simplecart_time_display


// Information in Post Header
function simplecart_postheader() {

    global $post;
  
    if ($post->post_type == 'page' || is_404()) {
        $postheader = simplecart_postheader_posttitle();        
    } else {
        $postheader = simplecart_postheader_posttitle() ;    
    }
    
    echo apply_filters( 'simplecart_postheader', $postheader ); // Filter to override default post header
} // end simplecart_postheader

// Create the post edit link
function simplecart_postheader_posteditlink() {
    
    global $id;
    
    $posteditlink = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/post.php?action=edit&amp;post=' . $id;
    $posteditlink .= '" title="' . __('Edit post', 'simplecart') .'">';
    $posteditlink .= __('Edit', 'simplecart') . '</a>';
    return apply_filters('simplecart_postheader_posteditlink',$posteditlink); 

} // end simplecart_postheader_posteditlink

// Create post title
function simplecart_postheader_posttitle() {

    if (is_single() || is_page() || is_tax() ) {
        $posttitle = '<h1 class="entry-title">' . get_the_title() . "</h1>\n";
    } elseif (is_404()) {    
        $posttitle = '<h1 class="entry-title">' . __('Not Found', 'simplecart') . "</h1>\n";
    } else {
        $posttitle = '<h2 class="entry-title"><a href="';
        $posttitle .= get_permalink();
        $posttitle .= '" title="';
        $posttitle .= __('Permalink to ', 'simplecart') . the_title_attribute('echo=0');
        $posttitle .= '" rel="bookmark">';
        $posttitle .= get_the_title();   
        $posttitle .= "</a></h2>\n";
    }
    return apply_filters('simplecart_postheader_posttitle',$posttitle); 

} // end simplecart_postheader_posttitle

// Create post meta
function simplecart_postheader_postmeta() {

    $postmeta = '<div class="entry-meta">';
    $postmeta .= simplecart_postmeta_authorlink();
    $postmeta .= '<span class="meta-sep meta-sep-entry-date"> | </span>';
    $postmeta .= simplecart_postmeta_entrydate();
    
    $postmeta .= simplecart_postmeta_editlink();
                   
    $postmeta .= "</div><!-- .entry-meta -->\n";
    
    return apply_filters('simplecart_postheader_postmeta',$postmeta); 

} // end simplecart_postheader_postmeta

// Create author link for post meta
function simplecart_postmeta_authorlink() {

    global $authordata;

    $authorlink = '<span class="meta-prep meta-prep-author">' . __('By ', 'simplecart') . '</span>';
    $authorlink .= '<span class="author vcard">'. '<a class="url fn n" href="';
    $authorlink .= get_author_posts_url($authordata->ID, $authordata->user_nicename);
    $authorlink .= '" title="' . __('View all posts by ', 'simplecart') . get_the_author() . '">';
    $authorlink .= get_the_author();
    $authorlink .= '</a></span>';
    
    return apply_filters('simplecart_post_meta_authorlink', $authorlink);
   
} // end simplecart_postmeta_authorlink()

// Create entry date for post meta
function simplecart_postmeta_entrydate() {

    $entrydate = '<span class="meta-prep meta-prep-entry-date">' . __('Published: ', 'simplecart') . '</span>';
    $entrydate .= '<span class="entry-date"><abbr class="published" title="';
    $entrydate .= get_the_time(simplecart_time_title()) . '">';
    $entrydate .= get_the_time(simplecart_time_display());
    $entrydate .= '</abbr></span>';
    
    return apply_filters('simplecart_post_meta_entrydate', $entrydate);
   
} // end simplecart_postmeta_entrydate()

// Create edit link for post meta
function simplecart_postmeta_editlink() {
    
    // Display edit link
    if (current_user_can('edit_posts')) {
        $editlink = ' <span class="meta-sep meta-sep-edit">|</span> ' . '<span class="edit">' . simplecart_postheader_posteditlink() . '</span>';
        return apply_filters('simplecart_post_meta_editlink', $editlink);
    }               

}

//creates the content
function simplecart_content() {

	if (is_home() || is_front_page()) { 
		$content = 'full';
	} elseif (is_single()) {
		$content = 'full';
	} elseif (is_tag()) {
		$content = 'excerpt';
	} elseif (is_search()) {
		$content = 'excerpt';	
	} elseif (is_category()) {
		$content = 'excerpt';
	} elseif (is_author()) {
		$content = 'excerpt';
	} elseif (is_archive()) {
		$content = 'excerpt';
	}
	
	$content = apply_filters('simplecart_content', $content);

	if ( strtolower($content) == 'full' ) {
		$post = get_the_content(more_text());
		$post = apply_filters('the_content', $post);
		$post = str_replace(']]>', ']]&gt;', $post);
	} elseif ( strtolower($content) == 'excerpt') {
		$post = get_the_excerpt();
	} elseif ( strtolower($content) == 'none') {
	} else {
		$post = get_the_content(more_text());
		$post = apply_filters('the_content', $post);
		$post = str_replace(']]>', ']]&gt;', $post);
	}
	echo apply_filters('simplecart_post', $post);
} // end simplecart_content

// Functions that hook into simplecart_archives()

		// Open .archives-page
		function simplecart_archivesopen() { ?>
				<ul id="archives-page" class="xoxo">
		<?php }
		add_action('simplecart_archives', 'simplecart_archivesopen', 1);

		// Display the Category Archives
		function simplecart_category_archives() { ?>
						<li id="category-archives" class="content-column">
							<h2><?php _e('Archives by Category', 'simplecart') ?></h2>
							<ul>
								<?php wp_list_categories('optioncount=1&feed=RSS&title_li=&show_count=1') ?> 
							</ul>
						</li>
		<?php }
		add_action('simplecart_archives', 'simplecart_category_archives', 3);

		// Display the Monthly Archives
		function simplecart_monthly_archives() { ?>
						<li id="monthly-archives" class="content-column">
							<h2><?php _e('Archives by Month', 'simplecart') ?></h2>
							<ul>
								<?php wp_get_archives('type=monthly&show_post_count=1') ?>
							</ul>
						</li>
		<?php }
		add_action('simplecart_archives', 'simplecart_monthly_archives', 5);

		// Close .archives-page
		function simplecart_archivesclose() { ?>
				</ul>
		<?php }
		add_action('simplecart_archives', 'simplecart_archivesclose', 9);
		
// End of functions that hook into simplecart_archives()


// Action hook called in 404.php
function simplecart_404() {
	do_action('simplecart_404');
} // end simplecart_404


	// 404 content injected into simplecart_404
	function simplecart_404_content() { ?>
   			<?php simplecart_postheader(); ?>
   			
				<div class="entry-content">
					<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps  searching will help.', 'simplecart') ?></p>
				</div>
				
				<form id="error404-searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="error404-s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
						<input id="error404-searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'simplecart') ?>" />
					</div>
				</form>
	<?php } // end simplecart_404_content
	
	add_action('simplecart_404','simplecart_404_content');


// creates the $more_link_text for the_content
function more_text() {
	$content = ''.__('Read More <span class="meta-nav">&raquo;</span>', 'simplecart').'';
	return apply_filters('more_text', $content);
} // end more_text


// creates the $more_link_text for the_content
function list_bookmarks_args() {
	$content = 'title_before=<h2>&title_after=</h2>';
	return apply_filters('list_bookmarks_args', $content);
} // end more_text


// Information in Post Footer
function simplecart_postfooter() {
    global $id, $post;
    
    if ($post->post_type == 'page' && current_user_can('edit_posts')) { /* For logged-in "page" search results */
        $postfooter = '<div class="entry-utility">' . simplecart_postfooter_posteditlink();
        $postfooter .= "</div><!-- .entry-utility -->\n";    
    } elseif ($post->post_type == 'page') { /* For logged-out "page" search results */
        $postfooter = '';
    } else {
        if (is_single()) {
            $postfooter = '<div class="entry-utility">' . simplecart_postfooter_postcategory() . simplecart_postfooter_posttags() . simplecart_postfooter_postconnect();
        } else {
            $postfooter = '<div class="entry-utility">' . simplecart_postfooter_postcategory() . simplecart_postfooter_posttags() . simplecart_postfooter_postcomments();
        }
        $postfooter .= "</div><!-- .entry-utility -->\n";    
    }
    
    // Put it on the screen
    echo apply_filters( 'simplecart_postfooter', $postfooter ); // Filter to override default post footer
} // end simplecart_postfooter

// Create the post edit link
function simplecart_postfooter_posteditlink() {

    global $id;
    
    $posteditlink = '<span class="edit"><a href="' . get_bloginfo('wpurl') . '/wp-admin/post.php?action=edit&amp;post=' . $id;
    $posteditlink .= '" title="' . __('Edit post', 'simplecart') .'">';
    $posteditlink .= __('Edit', 'simplecart') . '</a></span>';
    return apply_filters('simplecart_postfooter_posteditlink',$posteditlink); 
    
} // end simplecart_postfooter_posteditlink

// Create post category
function simplecart_postfooter_postcategory() {
    
    $postcategory = '<span class="cat-links">';
    if (is_single()) {
        $postcategory .= __('This entry was posted in ', 'simplecart') . get_the_category_list(', ');
        $postcategory .= '</span>';
    } elseif ( is_category() && $cats_meow = simplecart_cats_meow(', ') ) { /* Returns categories other than the one queried */
        $postcategory .= __('Also posted in ', 'simplecart') . $cats_meow;
        $postcategory .= '</span> <span class="meta-sep meta-sep-tag-links">|</span>';
    } else {
        $postcategory .= __('Posted in ', 'simplecart') . get_the_category_list(', ');
        $postcategory .= '</span> <span class="meta-sep meta-sep-tag-links">|</span>';
    }
    return apply_filters('simplecart_postfooter_postcategory',$postcategory); 
    
} // end simplecart_postfooter_postcategory

// Create post tags
function simplecart_postfooter_posttags() {

    if (is_single()) {
        $tagtext = __(' and tagged', 'simplecart');
        $posttags = get_the_tag_list("<span class=\"tag-links\"> $tagtext ",', ','</span>');
    } elseif ( is_tag() && $tag_ur_it = simplecart_tag_ur_it(', ') ) { /* Returns tags other than the one queried */
        $posttags = '<span class="tag-links">' . __(' Also tagged ', 'simplecart') . $tag_ur_it . '</span> <span class="meta-sep meta-sep-comments-link">|</span>';
    } else {
        $tagtext = __('Tagged', 'simplecart');
        $posttags = get_the_tag_list("<span class=\"tag-links\"> $tagtext ",', ','</span> <span class="meta-sep meta-sep-comments-link">|</span>');
    }
    return apply_filters('simplecart_postfooter_posttags',$posttags); 

} // end simplecart_postfooter_posttags

// Create comments link and edit link
function simplecart_postfooter_postcomments() {
    if (comments_open()) {
        $postcommentnumber = get_comments_number();
        if ($postcommentnumber > '1') {
            $postcomments = ' <span class="comments-link"><a href="' . get_permalink() . '#comments" title="' . __('Comment on ', 'simplecart') . the_title_attribute('echo=0') . '">';
            $postcomments .= get_comments_number() . __(' Comments', 'simplecart') . '</a></span>';
        } elseif ($postcommentnumber == '1') {
            $postcomments = ' <span class="comments-link"><a href="' . get_permalink() . '#comments" title="' . __('Comment on ', 'simplecart') . the_title_attribute('echo=0') . '">';
            $postcomments .= get_comments_number() . __(' Comment', 'simplecart') . '</a></span>';
        } elseif ($postcommentnumber == '0') {
            $postcomments = ' <span class="comments-link"><a href="' . get_permalink() . '#comments" title="' . __('Comment on ', 'simplecart') . the_title_attribute('echo=0') . '">';
            $postcomments .= __('Leave a comment', 'simplecart') . '</a></span>';
        }
    } else {
        $postcomments = ' <span class="comments-link comments-closed-link">' . __('Comments closed', 'simplecart') .'</span>';
    }
    // Display edit link
    if (current_user_can('edit_posts')) {
        $postcomments .= ' <span class="meta-sep meta-sep-edit">|</span> ' . simplecart_postfooter_posteditlink();
    }               
    return apply_filters('simplecart_postfooter_postcomments',$postcomments); 
    
} // end simplecart_postfooter_postcomments

// Create permalink, comments link, and RSS on single posts
function simplecart_postfooter_postconnect() {
    
    $postconnect = __('. Bookmark the ', 'simplecart') . '<a href="' . get_permalink() . '" title="' . __('Permalink to ', 'simplecart') . the_title_attribute('echo=0') . '">';
    $postconnect .= __('permalink', 'simplecart') . '</a>.';
    if ((comments_open()) && (pings_open())) { /* Comments are open */
        $postconnect .= ' <a class="comment-link" href="#respond" title ="' . __('Post a comment', 'simplecart') . '">' . __('Post a comment', 'simplecart') . '</a>';
        $postconnect .= __(' or leave a trackback: ', 'simplecart');
        $postconnect .= '<a class="trackback-link" href="' . trackback_url(FALSE) . '" title ="' . __('Trackback URL for your post', 'simplecart') . '" rel="trackback">' . __('Trackback URL', 'simplecart') . '</a>.';
    } elseif (!(comments_open()) && (pings_open())) { /* Only trackbacks are open */
        $postconnect .= __(' Comments are closed, but you can leave a trackback: ', 'simplecart');
        $postconnect .= '<a class="trackback-link" href="' . trackback_url(FALSE) . '" title ="' . __('Trackback URL for your post', 'simplecart') . '" rel="trackback">' . __('Trackback URL', 'simplecart') . '</a>.';
    } elseif ((comments_open()) && !(pings_open())) { /* Only comments open */
        $postconnect .= __(' Trackbacks are closed, but you can ', 'simplecart');
        $postconnect .= '<a class="comment-link" href="#respond" title ="' . __('Post a comment', 'simplecart') . '">' . __('post a comment', 'simplecart') . '</a>.';
    } elseif (!(comments_open()) && !(pings_open())) { /* Comments and trackbacks closed */
        $postconnect .= __(' Both comments and trackbacks are currently closed.', 'simplecart');
    }
    // Display edit link on single posts
    if (current_user_can('edit_posts')) {
        $postconnect .= ' ' . simplecart_postfooter_posteditlink();
    }
    return apply_filters('simplecart_postfooter_postconnect',$postconnect); 

} // end simplecart_postfooter_postconnect

// Action to create the below navigation
function simplecart_nav_below() {
		if (is_single()) { ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php simplecart_previous_post_link() ?></div>
				<div class="nav-next"><?php simplecart_next_post_link() ?></div>
			</div>

<?php
		} else { ?>

			<div id="nav-below" class="navigation">
                <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
                <?php } else { ?>  
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'simplecart')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'simplecart')) ?></div>
				<?php } ?>
			</div>	
	
<?php
		}
}
add_action('simplecart_navigation_below', 'simplecart_nav_below', 2);


// creates the previous_post_link
function simplecart_previous_post_link() {
	$args = array ('format'              => '%link',
								 'link'                => '<span class="meta-nav">&laquo;</span> %title',
								 'in_same_cat'         => FALSE,
								 'excluded_categories' => '');
	$args = apply_filters('simplecart_previous_post_link_args', $args );
	previous_post_link($args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories']);
} // end simplecart_previous_post_link


// creates the next_post_link
function simplecart_next_post_link() {
	$args = array ('format'              => '%link',
								 'link'                => '%title <span class="meta-nav">&raquo;</span>',
								 'in_same_cat'         => FALSE,
								 'excluded_categories' => '');
	$args = apply_filters('simplecart_next_post_link_args', $args );
	next_post_link($args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories']);
} // end simplecart_next_post_link


// Produces an avatar image with the hCard-compliant photo class for author info
function simplecart_author_info_avatar() {
    global $wp_query; $curauth = $wp_query->get_queried_object();
	$email = $curauth->user_email;
	$avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar("$email") );
	echo $avatar;
} // end simplecart_author_info_avatar


// For category lists on category archives: Returns other categories except the current one (redundant)
function simplecart_cats_meow($glue) {
	$current_cat = single_cat_title( '', false );
	$separator = "\n";
	$cats = explode( $separator, get_the_category_list($separator) );
	foreach ( $cats as $i => $str ) {
		if ( strpos( $str, ">$current_cat<" ) > 0) {
			unset($cats[$i]);
			break;
		}
	}
	if ( empty($cats) )
		return false;

	return trim(join( $glue, $cats ));
} // end simplecart_cats_meow


// For tag lists on tag archives: Returns other tags except the current one (redundant)
function simplecart_tag_ur_it($glue) {
	$current_tag = single_tag_title( '', '',  false );
	$separator = "\n";
	$tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
	foreach ( $tags as $i => $str ) {
		if ( strpos( $str, ">$current_tag<" ) > 0 ) {
			unset($tags[$i]);
			break;
		}
	}
	if ( empty($tags) )
		return false;

	return trim(join( $glue, $tags ));
} // end simplecart_tag_ur_it



?>