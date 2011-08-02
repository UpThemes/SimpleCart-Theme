<?php

// Check for static widgets in widget-ready areas

function is_sidebar_active( $index ){
  global $wp_registered_sidebars;

  $widgetcolums = wp_get_sidebars_widgets();
		 
  if ($widgetcolums[$index]) return true;
  
	return false;
}

// CSS markup before the widget
function simplecart_before_widget() {
	$content = '<li id="%1$s" class="widgetcontainer %2$s">';
	return apply_filters('simplecart_before_widget', $content);
}

// CSS markup after the widget
function simplecart_after_widget() {
	$content = '</li>';
	return apply_filters('simplecart_after_widget', $content);
}

// CSS markup before the widget title
function simplecart_before_title() {
	$content = "<h3 class=\"widgettitle\">";
	return apply_filters('simplecart_before_title', $content);
}

// CSS markup after the widget title
function simplecart_after_title() {
	$content = "</h3>\n";
	return apply_filters('simplecart_after_title', $content);
}

// Widget: Thematic Search
function widget_simplecart_search($args) {
	extract($args);
	if ( empty($title) )
		$title = __('Search', 'simplecart');
?>
			<?php echo $before_widget ?>
				<?php echo simplecart_before_title() ?><label for="s"><?php echo $title ?></label><?php echo simplecart_after_title();
				get_search_form();
			echo $after_widget;
}

// Widget: Thematic Meta
function widget_simplecart_meta($args) {
	extract($args);
	if ( empty($title) )
		$title = __('Meta', 'simplecart');
?>
			<?php echo $before_widget ?>
				<?php echo simplecart_before_title() . $title . simplecart_after_title(); ?>
				<ul>
					<?php wp_register() ?>
					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>
				</ul>
			<?php echo $after_widget; ?>
<?php
}

// Widget: Thematic RSS links
function widget_simplecart_rsslinks($args) {
	extract($args);
	$options = get_option('widget_simplecart_rsslinks');
	$title = empty($options['title']) ? __('RSS Links', 'simplecart') : $options['title'];
?>
		<?php echo $before_widget ?>
			<?php echo simplecart_before_title() . $title . simplecart_after_title(); ?>
			<ul>
				<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'simplecart'); ?>" rel="alternate nofollow" type="application/rss+xml"><?php _e('All posts', 'simplecart') ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'simplecart'); ?>" rel="alternate nofollow" type="application/rss+xml"><?php _e('All comments', 'simplecart') ?></a></li>
			</ul>
		<?php echo $after_widget ?>
<?php
}

// Widget: RSS links; element controls for customizing text within Widget plugin
function widget_simplecart_rsslinks_control() {
	$options = $newoptions = get_option('widget_simplecart_rsslinks');
	if ( $_POST["rsslinks-submit"] ) {
		$newoptions['title'] = strip_tags(stripslashes($_POST["rsslinks-title"]));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_simplecart_rsslinks', $options);
	}
	$title = htmlspecialchars($options['title'], ENT_QUOTES);
?>
			<p><label for="rsslinks-title"><?php _e('Title:'); ?> <input style="width: 250px;" id="rsslinks-title" name="rsslinks-title" type="text" value="<?php echo $title; ?>" /></label></p>
			<input type="hidden" id="rsslinks-submit" name="rsslinks-submit" value="1" />
<?php
}

?>