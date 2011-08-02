<?php
/*  Array Options:
   
   name (string)
   desc (string)
   id (string)
   type (string) - text, color, image, select, multiple, textarea, page, pages, category, categories, text_list
   value (string) 	- default value - replaced when custom value is entered - (text, color, select, textarea, page, category)
					- For multiple default values in multiple selects, separate with a comma space ("value" => "option 1, options 2")
						- For pages "value" => "Page Name, Page Name 2"
						- For categories "value" => "slug, slug2"
   options (array)
   attr (array) - any form field attributes
   url (string) - for image type only - defines the default image
   default_text (string) - overrides "None" option text in selects
	
	How to use this file:
		1. Save this template to the 'theme-options' folder in the theme root
		2. Change the file name to this syntax (remember to add the php extension):  
			tab-name_#.php - # is the position you want your tab to appear. Each tab must have a unique ordinal number.
			Example: 
				colors-and-images_0.php - will render a tab "Colors and Images" that will be the first on the list.
		3. Create your options and BAM!
*/

$options = array (
    
    array(  "name" => "Logo Image",
            "desc" => "Upload your your image or select from the gallery. (200px x 50px)",
            "id" => "logo",
            "type" => "image",
            "value" => "Upload Your Logo",
            "url" => get_bloginfo('stylesheet_directory')."/images/white-logo.png"
    ),

    array(  "name" => "Background Image",
            "desc" => "Upload a custom background image.",
            "id" => "background",
            "type" => "image",
            "value" => "Upload Image",
            "url" => get_bloginfo('stylesheet_directory')."/images/background-wood.jpg"
    ),
	
    array(  "name" => "Background Color",
            "desc" => "Select a custom background color.",
            "id" => "backgroundcolor",
			"default" => "#ffffff",
            "type" => "color"
    ),

    array(  "name" => "Background Image Repeat",
            "desc" => "Do you want your background to be displayed just once or repeated across the page?",
            "id" => "background_repeat",
            "std" => "No Repeat",
            "value" => "no-repeat",
            "type" => "select",
            "options" => array(
            	"Repeat Horizontally (left to right)" => "repeat-x",
            	"Repeat Vertically (top to bottom)" => "repeat-y",
            	"Repeat Both" => "repeat"
            )
    ),

    array(  "name" => "Background Attachment",
            "desc" => "Do you want your background to scroll with the page or stand still?",
            "id" => "background_attachment",
            "std" => "no-repeat",
            "type" => "select",
            "options" => array(
            	"Scroll" => "scroll",
            	"Fixed" => "fixed",
            	"inherit" => "inherit"
            )
    ),

    array(  "name" => "Background Image Position",
            "desc" => "Where do you want your background to be positioned?",
            "id" => "background_position",
            "type" => "select",
            "std" => "top center",
            "options" => array(
            	"Middle of Page" => "center center",
            	"Top Left" => "top left",
            	"Top Right" => "top right",
            	"Top Center" => "top center",
            	"Bottom Left" => "bottom left",
            	"Bottom Right" => "bottom right",
            	"Bottom Center" => "bottom center")
    ),    

	array(  "name" => "Default Link Color",
            "desc" => "Select a custom link color for the default state.",
            "id" => "linkcolor",
            "type" => "color",
			"value" => "#c23f26"
    ),
    
    array(  "name" => "Hover Link Color",
            "desc" => "Select a custom link color for the hover state.",
            "id" => "hovercolor",
            "type" => "color"
    ),
    
	array(  "name" => "Active Link Color",
            "desc" => "Select a custom link color for the hover state.",
            "id" => "activecolor",
            "type" => "color"
    ),    

	array(  "name" => "Product Buy Button Color",
            "desc" => "Select a custom color for the product buy buttons.",
            "id" => "buy_button_color",
            "type" => "color",
			"value" => "#169939"
    ),    

	array(  "name" => "Product Buy Button Hover Color",
            "desc" => "Select a custom hover color for the product buy buttons.",
            "id" => "buy_button_hover_color",
            "type" => "color",
			"value" => "#169939"
    ),    

	array(  "name" => "Sidebar Active Page &amp; Hover Link Color",
            "desc" => "Select a custom color for the sidebar active page &amp; hover link color.",
            "id" => "sidebar_pagelink_color",
            "type" => "color",
			"value" => "#FF4B33"
    )

);


/* ------------ Do not edit below this line ----------- */

//Check if theme options set
global $default_check;
global $default_options;

if(!$default_check):
    foreach($options as $option):
        if($option['type'] != 'image'):
            $default_options[$option['id']] = $option['value'];
        else:
            $default_options[$option['id']] = $option['url'];
        endif;
    endforeach;
    $update_option = get_option('up_themes_'.UPTHEMES_SHORT_NAME);
    
    if(is_array($update_option)):
        $update_option = array_merge($update_option, $default_options);
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $update_option);
    else:
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $default_options);
    endif;
endif;

render_options($options);

?>