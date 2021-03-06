<?php simplecart_abovecomments() ?>
			<div id="comments">
<?php
	$req = get_option('require_name_email'); // Checks if fields are required.
	if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
		die ( 'Please do not load this page directly. Thanks!' );
	if ( ! empty($post->post_password) ) :
		if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
?>
				<div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'simplecart') ?></div>
			</div><!-- .comments -->
<?php
		return;
	endif;
endif;
?>

<?php if ( have_comments() ) : ?>

<?php /* numbers of pings and comments */
$ping_count = $comment_count = 0;
foreach ( $comments as $comment )
	get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
?>

<?php if ( ! empty($comments_by_type['comment']) ) : ?>

<?php simplecart_abovecommentslist() ?>

				<div id="comments-list" class="comments">
					<h3><?php printf($comment_count > 1 ? __(simplecart_multiplecomments_text(), 'simplecart') : __(simplecart_singlecomment_text(), 'simplecart'), $comment_count) ?></h3>
				
					<ol>
<?php wp_list_comments(list_comments_arg()); ?>
					</ol>

        			<div id="comments-nav-below" class="comment-navigation">
        			     <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                    </div>
					
				</div><!-- #comments-list .comments -->

<?php simplecart_belowcommentslist() ?>			

<?php endif; /* if ( $comment_count ) */ ?>

<?php if ( ! empty($comments_by_type['pings']) ) : ?>

<?php simplecart_abovetrackbackslist() ?>

				<div id="trackbacks-list" class="comments">
					<h3><?php printf($ping_count > 1 ? __('<span>%d</span> Trackbacks', 'simplecart') : __('<span>One</span> Trackback', 'simplecart'), $ping_count) ?></h3>
					
					<ol>
<?php wp_list_comments('type=pings&callback=simplecart_pings'); ?>
					</ol>				
					
				</div><!-- #trackbacks-list .comments -->			

<?php simplecart_belowtrackbackslist() ?>				

<?php endif /* if ( $ping_count ) */ ?>
<?php endif /* if ( $comments ) */ ?>

<?php if ( 'open' == $post->comment_status ) : ?>
				<div id="respond">
    				<h3><?php comment_form_title( __(simplecart_postcomment_text(), 'simplecart'), __(simplecart_postreply_text(), 'simplecart') ); ?></h3>
    				
    				<div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'simplecart'),
					get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>

<?php else : ?>
					<div class="formcontainer">	
					
<?php simplecart_abovecommentsform() ?>					

						<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

<?php if ( $user_ID ) : ?>
							<p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'simplecart'),
								get_option('siteurl') . '/wp-admin/profile.php',
								wp_specialchars($user_identity, true),
								wp_logout_url(get_permalink()) ) ?></p>

<?php else : ?>

							<p id="comment-notes"><?php _e('Your email is <em>never</em> published nor shared.', 'simplecart') ?> <?php if ($req) _e('Required fields are marked <span class="required">*</span>', 'simplecart') ?></p>

                            <div id="form-section-author" class="form-section">
    							<div class="form-label"><label for="author"><?php _e('Name', 'simplecart') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'simplecart') ?></div>
    							<div class="form-input"><input id="author" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" /></div>
                            </div><!-- #form-section-author .form-section -->

                            <div id="form-section-email" class="form-section">
    							<div class="form-label"><label for="email"><?php _e('Email', 'simplecart') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'simplecart') ?></div>
    							<div class="form-input"><input id="email" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" /></div>
                            </div><!-- #form-section-email .form-section -->

                            <div id="form-section-url" class="form-section">
    							<div class="form-label"><label for="url"><?php _e('Website', 'simplecart') ?></label></div>
    							<div class="form-input"><input id="url" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" /></div>
                            </div><!-- #form-section-url .form-section -->

<?php endif /* if ( $user_ID ) */ ?>

                            <div id="form-section-comment" class="form-section">
    							<div class="form-label"><label for="comment"><?php _e(simplecart_commentbox_text(), 'simplecart') ?></label></div>
    							<div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></div>
                            </div><!-- #form-section-comment .form-section -->
                            
                            <div id="form-allowed-tags" class="form-section">
                                <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'simplecart') ?></span> <code><?php echo allowed_tags(); ?></code></p>
                            </div>
							
                  <?php do_action('comment_form', $post->ID); ?>
                  
							<div class="form-submit"><input id="submit" name="submit" type="submit" value="<?php _e(simplecart_commentbutton_text(), 'simplecart') ?>" tabindex="7" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></div>

                            <?php comment_id_fields(); ?>    

						</form><!-- #commentform -->
						
<?php simplecart_belowcommentsform() ?>											
						
					</div><!-- .formcontainer -->
<?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>

				</div><!-- #respond -->
<?php endif /* if ( 'open' == $post->comment_status ) */ ?>

			</div><!-- #comments -->
<?php simplecart_belowcomments() ?>