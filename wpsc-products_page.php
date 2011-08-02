<?php
global $wp_query;	
/*
 * Most functions called in this page can be found in the wpsc_query.php file
 */
?>

<?php if(wpsc_display_categories()): ?>
  <?php if(wpsc_category_grid_view()) :?>
		<div class="wpsc_categories wpsc_category_grid group">
			<?php wpsc_start_category_query(array('category_group'=> get_option('wpsc_default_category'), 'show_thumbnails'=> 1)); ?>
				<a href="<?php wpsc_print_category_url();?>" class="wpsc_category_grid_item  <?php wpsc_print_category_classes_section(); ?>" title="<?php wpsc_print_category_name(); ?>">
					<?php wpsc_print_category_image(get_option('category_image_width'),get_option('category_image_height')); ?>
				</a>
				<?php wpsc_print_subcategory("", ""); ?>
			<?php wpsc_end_category_query(); ?>
			
		</div><!--close wpsc_categories-->
  <?php else:?>
		<ul class="wpsc_categories">
		
			<?php wpsc_start_category_query(array('category_group'=>get_option('wpsc_default_category'), 'show_thumbnails'=> get_option('show_category_thumbnails'))); ?>
					<li>
						<?php wpsc_print_category_image(get_option('category_image_width'), get_option('category_image_height')); ?>
						
						<a href="<?php wpsc_print_category_url();?>" class="wpsc_category_link <?php wpsc_print_category_classes_section(); ?>" title="<?php wpsc_print_category_name(); ?>"><?php wpsc_print_category_name(); ?></a>
						<?php if(wpsc_show_category_description()) :?>
							<?php wpsc_print_category_description("<div class='wpsc_subcategory'>", "</div>"); ?>				
						<?php endif;?>
						
						<?php wpsc_print_subcategory("<ul>", "</ul>"); ?>
					</li>
			<?php wpsc_end_category_query(); ?>
		</ul>
	<?php endif; ?>
<?php endif; ?>

	<?php if(wpsc_display_products()): ?>
		
		<?php if(wpsc_is_in_category()) : ?> 
			<div class="wpsc_category_details">
				<?php if(wpsc_show_category_thumbnails()) : ?>
					<img src="<?php echo wpsc_category_image(); ?>" alt="<?php echo wpsc_category_name(); ?>" />
				<?php endif; ?>
				
				<?php if(wpsc_show_category_description() &&  wpsc_category_description()) : ?>
					<?php echo wpsc_category_description(); ?>
				<?php endif; ?>
			</div><!--close wpsc_category_details-->
		<?php endif; ?>
		<?php if(wpsc_has_pages_top()) : ?>
			<div class="wpsc_page_numbers_top">
				<?php wpsc_pagination(); ?>
			</div><!--close wpsc_page_numbers_top-->
		<?php endif; ?>		

	<?php endif; ?>

<div id="default_products_page_container" class="wrap wpsc_container">

	<?php do_action('wpsc_top_of_products_page'); // Plugin hook for adding things to the top of the products page, like the live search ?>
	
	<?php if(wpsc_display_products()): ?>
	
		<?php /** start the product loop here */?>
		<?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
					
			<?php get_template_part('product','overview'); ?>

		<?php endwhile; ?>
		<?php /** end the product loop here */?>
		<?php if(wpsc_product_count() == 0):?>
			<h3><?php  _e('There are no products in this group.', 'wpsc'); ?></h3>
		<?php endif ; ?>
	    <?php do_action( 'wpsc_theme_footer' ); ?> 	

		<?php if(wpsc_has_pages_bottom()) : ?>
			<div class="wpsc_page_numbers_bottom">
				<?php wpsc_pagination(); ?>
			</div><!--close wpsc_page_numbers_bottom-->
		<?php endif; ?>
	<?php endif; ?>
</div><!--close default_products_page_container-->
