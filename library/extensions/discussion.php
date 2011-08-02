<?php

// Custom callback to list comments in the Thematic style
function simplecart_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;
    ?>
    	<li id="comment-<?php comment_ID() ?>" class="<?php comment_class() ?>">
    		<div class="comment-author vcard"><?php simplecart_commenter_link() ?></div>
    		<div class="comment-meta"><?php printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'simplecart'),
    					get_comment_date(),
    					get_comment_time(),
    					'#comment-' . get_comment_ID() );
    					edit_comment_link(__('Edit', 'simplecart'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
    <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'simplecart') ?>
            <div class="comment-content">
        		<?php comment_text() ?>
    		</div>
			<?php // echo the comment reply link with help from Justin Tadlock http://justintadlock.com/ and Will Norris http://willnorris.com/
				if($args['type'] == 'all' || get_comment_type() == 'comment') :
					comment_reply_link(array_merge($args, array(
						'reply_text' => __('Reply','simplecart'), 
						'login_text' => __('Log in to reply.','simplecart'),
						'depth' => $depth,
						'before' => '<div class="comment-reply-link">', 
						'after' => '</div>'
					)));
				endif;
			?>
<?php }

// Custom callback to list pings in the Thematic style
function simplecart_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
    		<li id="comment-<?php comment_ID() ?>" class="<?php comment_class() ?>">
    			<div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'simplecart'),
    					get_comment_author_link(),
    					get_comment_date(),
    					get_comment_time() );
    					edit_comment_link(__('Edit', 'simplecart'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'simplecart') ?>
            <div class="comment-content">
    			<?php comment_text() ?>
			</div>
<?php }

?>