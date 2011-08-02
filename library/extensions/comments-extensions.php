<?php


// Located in comments.php
// Just before #comments
function simplecart_abovecomments() {
    do_action('simplecart_abovecomments');
}


// Located in comments.php
// Just before #comments-list
function simplecart_abovecommentslist() {
    do_action('simplecart_abovecommentslist');
}


// Located in comments.php
// Just after #comments-list
function simplecart_belowcommentslist() {
    do_action('simplecart_belowcommentslist');
}


// Located in comments.php
// Just before #trackbacks-list
function simplecart_abovetrackbackslist() {
    do_action('simplecart_abovetrackbackslist');
}


// Located in comments.php
// Just after #trackbacks-list
function simplecart_belowtrackbackslist() {
    do_action('simplecart_belowtrackbackslist');
}


// Located in comments.php
// Just before the comments form
function simplecart_abovecommentsform() {
    do_action('simplecart_abovecommentsform');
}


// Adds the Subscribe to comments button
function simplecart_show_subscription_checkbox() {
    if(function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); }
}
add_action('comment_form', 'simplecart_show_subscription_checkbox', 98);


// Located in comments.php
// Just after the comments form
function simplecart_belowcommentsform() {
    do_action('simplecart_belowcommentsform');
}


// Adds the Subscribe without commenting button
function simplecart_show_manual_subscription_form() {
    if(function_exists('show_manual_subscription_form')) { show_manual_subscription_form(); }
}
add_action('simplecart_belowcommentsform', 'simplecart_show_manual_subscription_form', 5);


// Located in comments.php
// Just after #comments
function simplecart_belowcomments() {
    do_action('simplecart_belowcomments');
}

// Located in comments.php
// Creates the standard text for one comment
function simplecart_singlecomment_text() {
    $content = __('<span>One</span> Comment', 'simplecart');
    return apply_filters(simplecart_singlecomment_text, $content);
}

// Located in comments.php
// Creates the standard text for more than one comment
function simplecart_multiplecomments_text() {
    $content = __('<span>%d</span> Comments', 'simplecart');
    return apply_filters(simplecart_multiplecomments_text, $content);
}

// creates the list comments arguments
function list_comments_arg() {
	$content = 'type=comment&callback=simplecart_comments';
	return apply_filters('list_comments_arg', $content);
}

// Located in comments.php
// Creates the standard text 'Post a Comment'
function simplecart_postcomment_text() {
    $content = __('Post a Comment', 'simplecart');
    return apply_filters(simplecart_postcomment_text, $content);
}

// Located in comments.php
// Creates the standard text 'Post a Reply to %s'
function simplecart_postreply_text() {
    $content = __('Post a Reply to %s', 'simplecart');
    return apply_filters(simplecart_postreply_text, $content);
}

// Located in comments.php
// Creates the standard text 'Comment' for the text box
function simplecart_commentbox_text() {
    $content = __('Comment', 'simplecart');
    return apply_filters(simplecart_commentbox_text, $content);
}

// Located in comments.php
// Creates the standard text 'Post Comment' for the send button
function simplecart_commentbutton_text() {
    $content = __('Post Comment', 'simplecart');
    return apply_filters(simplecart_commentbutton_text, $content);
}

// Produces an avatar image with the hCard-compliant photo class
function simplecart_commenter_link() {
	$commenter = get_comment_author_link();
	if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
		$commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
	} else {
		$commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
	}
	$avatar_email = get_comment_author_email();
	$avatar_size = apply_filters( 'avatar_size', '80' ); // Available filter: avatar_size
	$avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, $avatar_size ) );
	echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end simplecart_commenter_link


// A hook for the standard comments template
function simplecart_comments_template() {
	do_action('simplecart_comments_template');
} // end simplecart_comments


	// The standard comments template is injected into simplecart_comments_template() by default
	function simplecart_include_comments() {
		comments_template('', true);
	} // end simplecart_include_comments
	
	add_action('simplecart_comments_template','simplecart_include_comments',5);
	
	